import Vue from 'vue'
import Vuetify from 'vuetify'
import Contact from '../pages/statics/Contact'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'contact-component': Contact,
  }
})