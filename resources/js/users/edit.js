import Vue from 'vue'
import Vuetify from 'vuetify'
import UserEdit from '../pages/users/UserEdit'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'user-edit-component': UserEdit,
  }
})