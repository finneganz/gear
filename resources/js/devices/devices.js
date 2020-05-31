import Vue from 'vue'
import Vuetify from 'vuetify'
import Devices from '../pages/devices/Devices'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'devices-component': Devices,
  }
})