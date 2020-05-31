import Vue from 'vue'
import Vuetify from 'vuetify'
import Top from '../pages/users/Top'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'top-component': Top,
  }
})