<template>
  <v-app>
    <header-component></header-component>
    <v-container fluid class="px-0">
      <v-card flat tile width="auto" color="blue-grey lighten-4" class="mt-11">
        <v-card-title class="justify-center">add gear page</v-card-title>
      </v-card>
    </v-container>
    <v-container fluid>
      <v-card flat max-width="500" class="mx-auto">
        <v-form
          method="POST"
          action="/device/add"
          id="deviceAdd"
        >
          <input type="hidden" name="_token" :value="csrf" />
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.deviceType"
            type="error"
            dense
            outlined
          >
            {{ errors.deviceType }}
          </v-alert>
          <v-select
            class="pt-3"
            :items="deviceTypes"
            label="device type"
            dense
            id="deviceType"
            name="deviceType"
          ></v-select>
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.deviceName"
            type="error"
            dense
            outlined
          >
            {{ errors.deviceName }}
          </v-alert>
          <v-text-field
            label="device name"
            id="deviceName"
            name="deviceName"
          ></v-text-field>
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.makerName"
            type="error"
            dense
            outlined
          >
            {{ errors.makerName }}
          </v-alert>
          <v-text-field
            label="maker name"
            id="makerName"
            name="makerName"
          >
          </v-text-field>
          <v-btn
            type="submit"
            color="primary"
            class="text-capitalize"
          >submit</v-btn>
        </v-form>
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
  mounted() {
    console.log(this.errors);
  },
  props: [
    'errors',
  ],
  data: () => ({
    deviceTypes: [
        'headset',
        'keyboard',
        'mic',
        'monitor',
        'mouse',
        'mousebungee',
        'mousepad',
    ],
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
    methods: {
      addDevice: function(){
        document.querySelector('deviceAdd').submit();
      },
    },
  })
}
</script>
