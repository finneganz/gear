import Vue from 'vue'
import Vuetify from 'vuetify'
import About from '../pages/statics/About'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'about-component': About,
  }
})