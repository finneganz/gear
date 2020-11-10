<template>
  <v-container
    :style="modalStyle"
    fluid
    class="pt-12 px-12"
  >
    <v-row class="pt-12">
      <v-col
        v-for="testDevice in testDevices"
        :key="testDevice.value"
        :cols="3"
      >
        <v-card
          height="60"
          outlined
        >
          <v-card-text
            cols="12"
            v-text="testDevice.device_name"
            class="font-weight-solid pa-2 text-center"
            style="display: flex; height:100%; justify-content: center; align-items: center;"
          ></v-card-text>
        </v-card>
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
      'testDevices',
    ],
    methods: {
      closeModal: function(){
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