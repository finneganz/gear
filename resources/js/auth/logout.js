import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import Logout from '../pages/auth/Logout'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'logout-component': Logout,
  }
})