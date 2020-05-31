import Vue from 'vue'
import Vuetify from 'vuetify'
import DevicesGenre from '../pages/devices/DevicesGenre'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'devices-genre-component': DevicesGenre,
  }
})