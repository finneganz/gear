import Vue from 'vue'
import Vuetify from 'vuetify'
import MakerEdit from '../pages/makers/MakerEdit'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'maker-edit-component': MakerEdit,
  }
})