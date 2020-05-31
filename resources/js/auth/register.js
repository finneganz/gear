import Vue from 'vue'
import Vuetify from 'vuetify'
import Register from '../pages/auth/Register'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'register-component': Register,
  }
})