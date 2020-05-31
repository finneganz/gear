import Vue from 'vue'
import Vuetify from 'vuetify'
import Top from '../pages/users/Top'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'top-component': Top,
  }
})