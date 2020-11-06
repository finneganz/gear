<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="py-12 mt-12">
      <v-row>
        <v-col
          v-for="device in devices"
          :key="device.id"
          cols="3"
        >
          <v-card
            height="150"
            outlined
            v-bind:href="'/devices/' + genre + '/' + device.maker_name + '/' + device.device_name.replace(/\s+/g, '_')"
          >
            <v-card-text
              v-text="device.device_name"
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
    'devices',
    'genre',
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
