import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import "vuetify/dist/vuetify.min.css"
import MakerAdd from '../pages/makers/MakerAdd'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'maker-add-component': MakerAdd,
  }
})