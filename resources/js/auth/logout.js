import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import Logout from '../pages/auth/Logout'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'logout-component': Logout,
  }
})