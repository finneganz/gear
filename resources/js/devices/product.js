import Vue from 'vue'
import Vuetify from 'vuetify'
import DeviceProduct from '../pages/devices/DeviceProduct'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'device-product-component': DeviceProduct,
  }
})