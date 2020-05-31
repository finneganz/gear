import Vue from 'vue'
import Vuetify from 'vuetify'
import Login from '../pages/auth/Login'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'login-component': Login,
  }
})