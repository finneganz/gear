import Vue from 'vue'
import Vuetify from 'vuetify'
import UserEdit from '../pages/users/UserEdit'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'user-edit-component': UserEdit,
  }
})