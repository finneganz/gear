import Vue from 'vue'
import Vuetify from 'vuetify'
import DeviceProduct from '../pages/devices/DeviceProduct'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'device-product-component': DeviceProduct,
  }
})