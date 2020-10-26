<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="mt-12">
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
  </v-app>
</template>

<script>
import Header from '../../components/Header'
export default {
  components: {
    'header-component': Header
  },
  props: [
    'device',
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
