import Vue from 'vue'
import Vuetify from 'vuetify'
import Makers from '../pages/makers/Makers'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'makers-component': Makers,
  }
})