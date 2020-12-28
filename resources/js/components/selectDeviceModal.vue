<template>
  <v-container
    :style="modalStyle"
    fluid
    class="pt-12 px-12"
  >
    <v-row class="pt-12" v-if="initializedModal">
      <v-col
        v-for="initialDisplayDevice in initialDisplayDevices"
        :key="initialDisplayDevice.value"
        :cols="6"
      >
        <v-btn
          width="100%"
          v-text="initialDisplayDevice.device_name"
          v-on:click="setDevice(initialDisplayDevice.device_name)"
          class="font-weight-solid pa-2"
        >
        </v-btn>
      </v-col>
    </v-row>
    <v-row class="pt-12" v-else>
      <v-col
        v-for="displayDevice in displayDevices"
        :key="displayDevice.value"
        :cols="6"
      >
        <v-btn
          width="100%"
          v-text="displayDevice.device_name"
          v-on:click="setDevice(displayDevice.device_name)"
          class="font-weight-solid pa-2"
        >
        </v-btn>
      </v-col>
    </v-row>
    <v-row justify="center">
      <v-btn 
        v-for="n in Math.ceil(pageCount)"
        v-on:click="transPage(n)"
        :key="n"
        color="light-blue"
        dark
        small
        class="px-0 mx-2"
      >
        {{ n }}
      </v-btn>
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
      'pageCount',
      'initialDisplayDevices',
    ],
    methods: {
      setDevice: function(selectedDevice){
        this.$emit('set-device', selectedDevice)
        this.initializedModal = true
      },
      closeModal: function(n)
      {
        this.$emit('close-modal')
        this.initializedModal = true
      },
      transPage: function(n)
      {
        this.currentPageNum = n
        this.initializedModal = false
        this.displayDevices = this.selectedDevices.slice((this.currentPageNum - 1) * 12, (this.currentPageNum - 1) * 12 + 12)
      }
    },
    data: () => ({
      currentPageNum: 1,
      initializedModal: true,
      displayDevices: [],
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