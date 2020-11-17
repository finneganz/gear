<template>
  <v-app>
    <select-device-modal
      v-show="openedModal"
      v-on:set-device="setDevice"
      v-on:close-modal="closeModal"
      :selected-devices="selectedDevices"
      :initial-display-devices="initialDisplayDevices"
      :page-count="pageCount"
    ></select-device-modal>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="mt-12 pt-12">
      <v-form
        method="POST"
        :action="'/users/' + auth.username + '/edit'"
        id="makerAdd"
      >
        <input type="hidden" name="_token" :value="csrf" />
        <!-- Config -->
        <v-row justify="center">
          <v-col cols="6">
          <v-card-subtitle>Config</v-card-subtitle>
            <v-text-field
              label="config filepath"
              id="configFilepath"
              name="configFilepath"
              :value="settings.config.config_filepath"
            ></v-text-field>
            <v-text-field
              label="autoexec filepath"
              id="autoexecFilepath"
              name="autoexecFilepath"
              :value="settings.config.autoexec_filepath"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.windowsSensitivity"
              type="error"
              dense
              outlined
            >
              {{ errors.windowsSensitivity[0] }}
            </v-alert>
            <v-text-field
              label="windows sensitivity"
              id="windowsSensitivity"
              name="windowsSensitivity"
              :value="settings.config.windows_sensitivity"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.inGameSensitivity"
              type="error"
              dense
              outlined
            >
              {{ errors.inGameSensitivity[0] }}
            </v-alert>
            <v-text-field
              label="ingame sensitivity"
              id="inGameSensitivity"
              name="inGameSensitivity"
              :value="settings.config.ingame_sensitivity"
            ></v-text-field>
          </v-col>
        </v-row>
        <!-- Device -->
        <v-row justify="center">
          <v-col cols="6">
            <v-card-subtitle>Devices</v-card-subtitle>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.headset"
              type="error"
              dense
              outlined
            >
              {{ errors.headset[0] }}
            </v-alert>
            <v-text-field
              v-on:click="selectHeadset"
              v-model="selectedHeadset"
              label="headset"
              id="headset"
              name="headset"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.keyboard"
              type="error"
              dense
              outlined
            >
              {{ errors.keyboard[0] }}
            </v-alert>
            <v-text-field
              v-on:click="selectKeyboard"
              v-model="selectedKeyboard"
              label="keyboard"
              id="keyboard"
              name="keyboard"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.mic"
              type="error"
              dense
              outlined
            >
              {{ errors.mic[0] }}
            </v-alert>
            <v-text-field
              v-on:click="selectMic"
              v-model="selectedMic"
              label="mic"
              id="mic"
              name="mic"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.monitor"
              type="error"
              dense
              outlined
            >
              {{ errors.monitor[0] }}
            </v-alert>
            <v-text-field
              v-on:click="selectMonitor"
              v-model="selectedMonitor"
              label="monitor"
              id="monitor"
              name="monitor"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.mouse"
              type="error"
              dense
              outlined
            >
              {{ errors.mouse[0] }}
            </v-alert>
            <v-text-field
              v-on:click="selectMouse"
              v-model="selectedMouse"
              label="mouse"
              id="mouse"
              name="mouse"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.mousebungee"
              type="error"
              dense
              outlined
            >
              {{ errors.mousebungee[0] }}
            </v-alert>
            <v-text-field
              v-on:click="selectMousebungee"
              v-model="selectedMousebungee"
              label="mousebungee"
              id="mousebungee"
              name="mousebungee"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.mousepad"
              type="error"
              dense
              outlined
            >
              {{ errors.mousepad[0] }}
            </v-alert>
            <v-text-field
              v-on:click="selectMousepad"
              v-model="selectedMousepad"
              label="mousepad"
              id="mousepad"
              name="mousepad"
            ></v-text-field>
          </v-col>
        </v-row>
        <!-- Monitor Setting -->
        <v-row justify="center">
          <v-col cols="6">
            <v-card-subtitle>Monitor Setting</v-card-subtitle>
            <v-text-field
              label="monitor setting"
              id="monitorSetting"
              name="monitorSetting"
              :value="settings.monitorSetting.setting_params"
            ></v-text-field>
          </v-col>
        </v-row>
        <!-- Video Setting -->
        <v-row justify="center">
          <v-col cols="6">
            <v-card-subtitle>Video Settings</v-card-subtitle>
            <v-select
              class="py-3"
              :items="resolutions"
              label="resolution"
              dense
              id="resolution"
              name="resolution"
              :value="settings.resolution.resolution"
            ></v-select>
            <v-select
              class="py-3"
              :items="stretches"
              label="scaling mode"
              dense
              id="stretch"
              name="stretch"
              :value="settings.videoSetting.stretch"
            ></v-select>
            <v-select
              class="py-3"
              :items="antiAliases"
              label="anti alias"
              dense
              id="antiAlias"
              name="antiAlias"
              :value="settings.videoSetting.anti_alias"
            ></v-select>
            <v-select
              class="py-3"
              :items="shadowQualities"
              label="global shadow quality"
              dense
              id="shadowQuality"
              name="shadowQuality"
              :value="settings.videoSetting.shadow_quality"
            ></v-select>
          </v-col>
        </v-row>
        <!-- Mouse Setting -->
        <v-row justify="center">
          <v-col cols="6">
            <v-card-subtitle>Mouse Setting</v-card-subtitle>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.windowsSensitivity"
              type="error"
              dense
              outlined
            >
              {{ errors.dpi[0] }}
            </v-alert>
            <v-text-field
              label="dpi"
              id="dpi"
              name="dpi"
              :value="settings.mouseSetting.dpi"
            ></v-text-field>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.windowsSensitivity"
              type="error"
              dense
              outlined
            >
              {{ errors.pollingRate[0] }}
            </v-alert>
            <v-text-field
              label="polling rate"
              id="pollingRate"
              name="pollingRate"
              :value="settings.mouseSetting.polling_rate"
            ></v-text-field>
          </v-col>
        </v-row>
        <v-row justify="center">
          <v-col cols="6">
            <v-btn
              type="submit"
              color="primary"
              class="text-capitalize"
            >
              submit
            </v-btn>
          </v-col>
        </v-row>
      </v-form>
    </v-container>
  </v-app>
</template>

<script>
import Header from '../../components/Header'
import SelectDeviceModal from '../../components/SelectDeviceModal'
export default {
  components: {
    'header-component': Header,
    'select-device-modal': SelectDeviceModal
  },
  props: [
    'auth',
    'errors',
    'devices',
    'settings',
    'selectDevices'
  ],
  methods: {
    selectHeadset: function(){
      this.openedModal = true
      this.selectedDevices = this.selectDevices.headset
      this.pageCount = this.selectedDevices.length / 12
      this.initialDisplayDevices = this.selectedDevices.slice(0,12)
      this.deviceGenre = 'headset'
    },
    selectKeyboard: function(){
      this.openedModal = true
      this.selectedDevices = this.selectDevices.keyboard
      this.pageCount = this.selectedDevices.length / 12
      this.initialDisplayDevices = this.selectedDevices.slice(0,12)
      this.deviceGenre = 'keyboard'
    },
    selectMic: function(){
      this.openedModal = true
      this.selectedDevices = this.selectDevices.mic
      this.pageCount = this.selectedDevices.length / 12
      this.initialDisplayDevices = this.selectedDevices.slice(0,12)
      this.deviceGenre = 'mic'
    },
    selectMonitor: function(){
      this.openedModal = true
      this.selectedDevices = this.selectDevices.monitor
      this.pageCount = this.selectedDevices.length / 12
      this.initialDisplayDevices = this.selectedDevices.slice(0,12)
      this.deviceGenre = 'monitor'
    },
    selectMouse: function(){
      this.openedModal = true
      this.selectedDevices = this.selectDevices.mouse
      this.pageCount = this.selectedDevices.length / 12
      this.initialDisplayDevices = this.selectedDevices.slice(0,12)
      this.deviceGenre = 'mouse'
    },
    selectMousebungee: function(){
      this.openedModal = true
      this.selectedDevices = this.selectDevices.mousebungee
      this.pageCount = this.selectedDevices.length / 12
      this.initialDisplayDevices = this.selectedDevices.slice(0,12)
      this.deviceGenre = 'mousebungee'
    },
    selectMousepad: function(){
      this.openedModal = true
      this.selectedDevices = this.selectDevices.mousepad
      this.pageCount = this.selectedDevices.length / 12
      this.initialDisplayDevices = this.selectedDevices.slice(0,12)
      this.deviceGenre = 'mousepad'
    },
    setDevice: function(selectedDevice){
      this.openedModal = false
      switch (this.deviceGenre) {
        case 'headset':
          this.selectedHeadset = selectedDevice
          break;
        case 'keyboard':
          this.selectedKeyboard = selectedDevice
          break;
        case 'mic':
          this.selectedMic = selectedDevice
          break;
        case 'monitor':
          this.selectedMonitor = selectedDevice
          break;
        case 'mouse':
          this.selectedMouse = selectedDevice
          break;
        case 'mousebungee':
          this.selectedMousebungee = selectedDevice
          break;
        case 'mousepad':
          this.selectedMousepad = selectedDevice
          break;
        default:
          break;
      }
    },
    closeModal: function(){
      this.openedModal = false
    }
  },
  data: () => ({
    selectedHeadset: "",
    selectedKeyboard: "",
    selectedMic: "",
    selectedMonitor: "",
    selectedMouse: "",
    selectedMousebungee: "",
    selectedMousepad: "",
    openedModal: false,
    initialDisplayDevices: "",
    selectedDevices: "",
    selectedDevice: "",
    deviceGenre: "",
    pageCount: "",
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
    resolutions: [
      '800x600',
      '1024x768',
      '1280x960',
      '1280x720',
      '1600x900',
      '1920x1080',
    ],
    stretches: [
      'stretched',
      'black bar',
    ],
    antiAliases: [
      'None',
      '2x MSAA',
      '4x MSAA',
      '8x MSAA',
    ],
    shadowQualities: [
      'very low',
      'low',
      'middle',
      'high',
    ],
  })
}
</script>
