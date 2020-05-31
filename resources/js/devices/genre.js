import Vue from 'vue'
import Vuetify from 'vuetify'
import DevicesGenre from '../pages/devices/DevicesGenre'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'devices-genre-component': DevicesGenre,
  }
})