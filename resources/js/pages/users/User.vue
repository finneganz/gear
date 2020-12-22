<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container class="pt-12 px-12 mt-12">
      <v-row justify="center">
        <v-col>
          <v-card flat>
            <v-card-title
              v-text="user.username"
              class="justify-center pb-0"
            ></v-card-title>
            <v-row justify="center">
              <v-btn
                v-show="user.twitterid"
                :href="'https://twitter.com/' + user.twitterid"
                target="_blank"
                text
                rel="noopener noreferrer"
                class="text-lowercase"
                v-text="'@twitter: ' + user.twitterid"
              ></v-btn>
            </v-row>
            <v-row justify="center" class="pt-10">
              <v-btn
                v-show="auth.username === user.username"
                outlined
                small
                color="primary"
                class="text-lowercase"
                :href="'/users/' + user.username + '/edit'"
              >
                edit
              </v-btn>
            </v-row>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
    <v-divider></v-divider>
    <v-container class="pa-12">
      <v-card flat>
        <v-card-title class="justify-center">Devices</v-card-title>
        <v-row justify="center">
          <v-col>
            <v-card flat>
              <v-card-text
                class="text-center"
                v-show="devices.length === 0"
              >
                デバイスは登録されていません
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
        <v-row>
          <v-col
            v-for="device in devices"
            :key="device.value"
            cols="3"
          >
            <v-card
              height="150"
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
                v-text="device.device_name"
              ></v-card-text>
              <v-card-text 
                v-text="device.maker_name"
                class="text-center"
              ></v-card-text>
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
                    <v-col cols="6">
                      <v-card flat height="250">
                        <v-card-subtitle class="text-center">config</v-card-subtitle>
                        <v-card-text>config : 
                          <v-btn
                            v-show="settings.config.config"
                            :href="'/users/' + user.username + '/config/download'"
                            small
                            outlined
                            color="primary"
                          >
                            ダウンロード
                          </v-btn>
                        </v-card-text>
                        <v-card-text class="pt-0">autoexec : 
                          <v-btn
                            v-show="settings.config.autoexec"
                            :href="'/users/' + user.username + '/autoexec/download'"
                            small
                            outlined
                            color="primary"
                          >
                            ダウンロード
                          </v-btn>
                        </v-card-text>
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
                    <v-col cols="6">
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
                    <v-col cols="6">
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
                    <v-col cols="6">
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
    <footer-component></footer-component>
  </v-app>
</template>

<script>
import Header from '../../components/Header'
import Footer from '../../components/Footer'

export default {
  components: {
    'header-component': Header,
    'footer-component': Footer,
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
