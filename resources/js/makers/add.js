import Vue from 'vue'
import Vuetify from 'vuetify'
import MakerAdd from '../pages/makers/MakerAdd'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'maker-add-component': MakerAdd,
  }
})