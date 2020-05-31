import Vue from 'vue'
import Vuetify from 'vuetify'
import MakerAdd from '../pages/makers/MakerAdd'

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'maker-add-component': MakerAdd,
  }
})