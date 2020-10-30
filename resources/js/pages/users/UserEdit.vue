<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="mt-12 pt-12">
      <v-form
        method="POST"
        action="/users/1/edit"
        id="makerAdd"
      >
        <input type="hidden" name="_token" :value="csrf" />
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
export default {
  components: {
    'header-component': Header
  },
  props: [
    'auth',
    'errors',
    'devices',
    'settings',
  ],
  data: () => ({
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
    ]
  })
}
</script>
