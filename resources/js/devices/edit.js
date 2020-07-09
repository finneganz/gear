import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import DeviceProductEdit from '../pages/devices/DeviceProductEdit'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'device-edit-component': DeviceProductEdit,
  }
})