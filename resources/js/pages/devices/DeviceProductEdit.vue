<template>
  <v-app>
    <header-component></header-component>
    <v-container fluid class="px-0">
      <v-card flat tile width="auto" color="blue-grey lighten-4" class="mt-11">
        <v-card-title class="justify-center">device product edit page</v-card-title>
      </v-card>
    </v-container>
    <v-container fluid>
      <v-card flat max-width="500" class="mx-auto">
        <v-form
          method="POST"
          action="/devices/headsets/steelseries/siberia_v2/edit"
          id="deviceEdit"
        >
          <input type="hidden" name="_token" :value="csrf" />
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.deviceName"
            type="error"
            dense
            outlined
          >
            {{ errors.deviceName[0] }}
          </v-alert>
          <v-text-field
            label="device name"
            id="deviceName"
            name="deviceName"
            :value="device.device_name"
          ></v-text-field>
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.makerName"
            type="error"
            dense
            outlined
          >
            {{ errors.makerName[0] }}
          </v-alert>
          <v-text-field
            label="maker name"
            id="makerName"
            name="makerName"
            :value="device.maker_name"
          >
          </v-text-field>
          <v-btn
            type="submit"
            color="primary"
            class="text-capitalize mt-3"
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
    console.log('Component mounted.')
  },
  props: [
    'errors',
    'device',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  })
}
</script>
