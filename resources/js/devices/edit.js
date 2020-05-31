import Vue from 'vue'
import Vuetify from 'vuetify'
import DeviceProductEdit from '../pages/devices/DeviceProductEdit'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'device-edit-component': DeviceProductEdit,
  }
})