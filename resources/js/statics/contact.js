import Vue from 'vue'
import Vuetify from 'vuetify'
import Contact from '../pages/statics/Contact'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'contact-component': Contact,
  }
})