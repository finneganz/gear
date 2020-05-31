import Vue from 'vue'
import Vuetify from 'vuetify'
import User from '../pages/users/User'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'user-component': User,
  }
})