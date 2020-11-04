<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container class="pa-5 mt-12 pa-12">
      <v-card flat>
        <v-row>
          <v-col cols="3"></v-col>
          <v-col cols="2">
            <v-card-text class="pt-5">img</v-card-text>
          </v-col>
          <v-col cols="7">
            <v-card-title>{{ user.username }}</v-card-title>
            <v-card-text>@twitter_id</v-card-text>
            <v-card-text class="pt-0">^^^^^^^^^^^</v-card-text>
            <v-card-text class="pt-0">^^^^^^^^^^^</v-card-text>
            <v-btn
              outlined
              small
              color="primary"
              class="ml-3 text-lowercase"
              :href="'/users/' + user.username + '/edit'"
            >
              edit
            </v-btn>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
    <v-divider></v-divider>
    <v-container class="pa-12">
      <v-card flat>
        <v-card-title class="justify-center">Devices</v-card-title>
        <v-row>
          <v-col
            v-for="device in devices"
            :key="device.value"
            cols="3"
          >
            <v-card
              :href="'/devices/' + device.genre + '/' + device.maker_name + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text class="text-center">img</v-card-text>
              <v-card-text
                class="text-center"
                v-text="device.device_name"
              ></v-card-text>
              <v-card-text class="text-center">^^^^^^^^^^</v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
    <v-divider></v-divider>
    <v-container>
      <v-card flat>
        <v-card-title class="justify-center">Config</v-card-title>
        <v-carousel
        height="300"
        hide-delimiters
        >
          <v-carousel-item light>
            <v-row justify="center">
              <v-col cols="10">
                <v-card light>
                  <v-row justify="center">
                    <v-col cols="8">
                      <v-card flat height="250">
                        <v-card-subtitle class="text-center">config</v-card-subtitle>
                        <v-card-text>config-filepath : {{ settings.config.config_filepath }}</v-card-text>
                        <v-card-text class="pt-0">autoexec-filepath : {{ settings.config.autoexec_filepath }}</v-card-text>
                        <v-card-text class="pt-0">windows-sensitivity : {{ settings.config.windows_sensitivity }}</v-card-text>
                        <v-card-text class="pt-0">inGame-sensitivity : {{ settings.config.ingame_sensitivity }}</v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>
              </v-col>
            </v-row>
          </v-carousel-item>
          <v-carousel-item light>
            <v-row justify="center">
              <v-col cols="10">
                <v-card light>
                  <v-row justify="center">
                    <v-col cols="8">
                      <v-card flat height="250">
                        <v-card-subtitle class="text-center">monitor setting</v-card-subtitle>
                        <v-card-text>monitor-settings : {{ settings.monitorSetting.setting_params }}</v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>
              </v-col>
            </v-row>
          </v-carousel-item>
          <v-carousel-item light>
            <v-row justify="center">
              <v-col cols="10">
                <v-card light>
                  <v-row justify="center">
                    <v-col cols="8">
                      <v-card flat height="250">
                        <v-card-subtitle class="text-center">video setting</v-card-subtitle>
                        <v-card-text>resolution : {{ settings.resolution.resolution }}</v-card-text>
                        <v-card-text class="pt-0">aspect : {{ settings.resolution.aspect }}</v-card-text>
                        <v-card-text class="pt-0">scalling mode : {{ settings.videoSetting.stretch }}</v-card-text>
                        <v-card-text class="pt-0">anti alias : {{ settings.videoSetting.anti_alias }}</v-card-text>
                        <v-card-text class="pt-0">shadow quality : {{ settings.videoSetting.shadow_quality }}</v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>
              </v-col>
            </v-row>
          </v-carousel-item>
          <v-carousel-item light>
            <v-row justify="center">
              <v-col cols="10">
                <v-card light>
                  <v-row justify="center">
                    <v-col cols="8">
                      <v-card flat height="250">
                        <v-card-subtitle class="text-center">mouse setting</v-card-subtitle>
                      <v-card-text>dpi : {{ settings.mouseSetting.dpi }}</v-card-text>
                      <v-card-text class="pt-0">polling rate : {{ settings.mouseSetting.polling_rate }}</v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>
              </v-col>
            </v-row>
          </v-carousel-item>
        </v-carousel>
      </v-card>
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
    'user',
    'devices',
    'settings',
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
