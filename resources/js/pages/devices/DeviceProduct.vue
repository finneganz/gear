<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="my-12 py-12">
      <v-row justify="center" class="pt-8">
        <v-col cols="1">
          <v-card-text>img</v-card-text>
        </v-col>
        <v-card flat max-width="300">
          <v-card-title v-text="device.device_name"></v-card-title>
          <v-card-text v-text="device.maker_name"></v-card-text>
          <v-btn outlined small color="primary" class="ml-4">Link</v-btn>
        </v-card>
      </v-row>
    </v-container>
    <v-divider></v-divider>
    <v-container class="pb-12 mb-12">
      <v-card flat>
        <v-card-title class="justify-center">関連デバイス</v-card-title>
        <v-row>
          <v-col
            v-for="subDevice in subDevices"
            :key="subDevice.value"
            :cols="3"
          >
            <v-card 
              outlined
              height="150"
              :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + subDevice.device_name.replace(/\s+/g, '_')"
            >
              <v-card-text 
                v-text="subDevice.device_name"
                class="font-weight-bold text-center pt-8"
                style="height: 60%"
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
    'auth',
    'device',
    'subDevices',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
