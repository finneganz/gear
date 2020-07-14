import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import Login from '../pages/auth/Login'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'login-component': Login,
  }
})