import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import About from '../pages/statics/About'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'about-component': About,
  }
})