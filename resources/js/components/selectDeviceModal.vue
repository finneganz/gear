<template>
  <v-container
    :style="modalStyle"
    fluid
    class="pt-12 px-12"
  >
    <v-row class="pt-12">
      <v-col
        v-for="selectedDevice in selectedDevices"
        :key="selectedDevice.value"
        :cols="6"
      >
        <v-btn
          width="100%"
          v-text="selectedDevice.device_name"
          v-on:click="setDevice(selectedDevice.device_name)"
          class="font-weight-solid pa-2"
        >
        </v-btn>
      </v-col>
    </v-row>
  <v-row justify="center">
    <v-btn
      v-on:click="closeModal"
      class="text-lowercase mt-5"
      small
    >
      Close
    </v-btn>
  </v-row>
</v-container>
</template>
<script>
  export default {
    props: [
      'selectedDevices',
    ],
    methods: {
      setDevice: function(selectedDevice){
        this.$emit('set-device', selectedDevice)
      },
      closeModal: function()
      {
        this.$emit('close-modal')
      }
    },
    data: () => ({
      modalStyle: [
        'z-index: 1',
        'position: fixed',
        'left: 0',
        'height: 100%',
        'backgroundColor: rgba(0,0,0,0.5)',
      ],
    }),
  }
</script>