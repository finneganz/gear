import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import Register from '../pages/auth/Register'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'register-component': Register,
  }
})