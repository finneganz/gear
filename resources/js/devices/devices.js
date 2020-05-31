import Vue from 'vue'
import Vuetify from 'vuetify'
import Devices from '../pages/devices/Devices'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'devices-component': Devices,
  }
})