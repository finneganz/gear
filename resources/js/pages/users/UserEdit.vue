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
        enctype="multipart/form-data"
      >
        <input type="hidden" name="_token" :value="csrf" />
        <v-row justify="center">
          <v-col cols="6">
            <v-card-subtitle>twitter id</v-card-subtitle>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.twitterid"
              type="error"
              dense
              outlined
            >
              {{ errors.twitterid[0] }}
            </v-alert>
            <v-text-field
              label="twitter ID"
              id="twitterid"
              name="twitterid"
              v-model="auth.twitterid"
            ></v-text-field>
          </v-col>
        </v-row>
        <!-- Config -->
        <v-row justify="center">
          <v-col cols="6">
          <v-card-subtitle>Config</v-card-subtitle>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.config"
              type="error"
              dense
              outlined
            >
              {{ errors.config[0] }}
            </v-alert>
            <v-file-input
              label="config"
              id="config"
              name="config"
            ></v-file-input>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.autoexec"
              type="error"
              dense
              outlined
            >
              {{ errors.autoexec[0] }}
            </v-alert>
            <v-file-input
              label="autoexec"
              id="autoexec"
              name="autoexec"
            ></v-file-input>
            <v-alert
              class="mb-0 mt-4"
              v-if="errors.windowsSensitivity"
              type="error"
              dense
              outlined
            >
              {{ errors.windowsSensitivity[0] }}
            </v-alert>
            <v-select
              :items="windowsSensitivities"
              v-model="settings.config.windows_sensitivity"
              dense
              label="windows sensitivity"
              id="windowsSensitivity"
              name="windowsSensitivity"
              class="pt-3"
            ></v-select>
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
              v-model="settings.config.ingame_sensitivity"
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
              v-model="settings.monitorSetting.setting_params"
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
              v-model="settings.resolution.resolution"
            ></v-select>
            <v-select
              class="py-3"
              :items="stretches"
              label="scaling mode"
              dense
              id="stretch"
              name="stretch"
              v-model="settings.videoSetting.stretch"
            ></v-select>
            <v-select
              class="py-3"
              :items="antiAliases"
              label="anti alias"
              dense
              id="antiAlias"
              name="antiAlias"
              v-model="settings.videoSetting.anti_alias"
            ></v-select>
            <v-select
              class="py-3"
              :items="shadowQualities"
              label="global shadow quality"
              dense
              id="shadowQuality"
              name="shadowQuality"
              v-model="settings.videoSetting.shadow_quality"
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
              v-model="settings.mouseSetting.dpi"
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
              v-model="settings.mouseSetting.polling_rate"
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
  mounted(){
    this.selectedHeadset = (this.devices.headset) ? (this.devices.headset.device_name) : ""
    this.selectedKeyboard = (this.devices.keyboard) ? (this.devices.keyboard.device_name) : ""
    this.selectedMic = (this.devices.mic) ? (this.devices.mic.device_name) : ""
    this.selectedMonitor = (this.devices.monitor) ? (this.devices.monitor.device_name) : ""
    this.selectedMouse = (this.devices.mouse) ? (this.devices.mouse.device_name) : ""
    this.selectedMousebungee = (this.devices.mousebungee) ? (this.devices.mousebungee.device_name) : ""
    this.selectedMousepad = (this.devices.mousepad) ? (this.devices.mousepad.device_name) : ""
  },
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
    windowsSensitivities: [
      '1/11',
      '2/11',
      '3/11',
      '4/11',
      '5/11',
      '6/11',
      '7/11',
      '8/11',
      '9/11',
      '10/11',
      '11/11',
    ],
  })
}
</script>
