<template>
  <v-app>
    <header-component :isLoggedIn="isLoggedIn"></header-component>
    <v-container fluid class="py-12 mt-12">
      <v-row>
        <v-col
          v-for="device in devices"
          :key="device.value"
          :cols="3"
        >
          <v-card
            outlined
            :href="'/devices/' + device.genre + '/' + device.maker_name.replace(/\s+/g, '_') + '/' + device.device_name.replace(/\s+/g, '_')"
          >
            <v-card-text>{{isLoggedIn}}</v-card-text>
            <v-card-text v-text="device.device_name"  class="font-weight-bold"></v-card-text>
            <v-card-text v-text="device.maker_name"></v-card-text>
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
    'isLoggedIn',
  ],
  data: () => ({
  }),
}
</script>
