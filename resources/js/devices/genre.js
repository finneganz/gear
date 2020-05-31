import Vue from 'vue'
import Vuetify from 'vuetify'
import DevicesGenre from '../pages/devices/DevicesGenre'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'devices-genre-component': DevicesGenre,
  }
})