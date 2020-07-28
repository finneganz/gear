<template>
  <v-app>
    <header-component></header-component>
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
            ></v-text-field>
            <v-text-field
              label="autoexec filepath"
              id="autoexecFilepath"
              name="autoexecFilepath"
            ></v-text-field>
            <v-text-field
              label="windows sensitivity"
              id="configFilepath"
              name="configFilepath"
            ></v-text-field>
            <v-text-field
              label="ingame sensitivity"
              id="inGameSensitivity"
              name="inGameSensitivity"
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
            ></v-select>
            <v-select
              class="py-3"
              :items="streatches"
              label="scaling mode"
              dense
              id="streatch"
              name="streatch"
            ></v-select>
            <v-select
              class="py-3"
              :items="antiAliases"
              label="anti alias"
              dense
              id="antiAlias"
              name="antiAlias"
            ></v-select>
            <v-select
              class="py-3"
              :items="shadowQualities"
              label="global shadow quality"
              dense
              id="shadowQuality"
              name="shadowQuality"
            ></v-select>
          </v-col>
        </v-row>
        <v-row justify="center">
          <v-col cols="6">
            <v-card-subtitle>Mouse Setting</v-card-subtitle>
            <v-text-field
              label="dpi"
              id="dpi"
              name="dpi"
            ></v-text-field>
            <v-text-field
              label="polling rate"
              id="pollingRate"
              name="pollingRate"
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
    streatches: [
      'streatched',
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
