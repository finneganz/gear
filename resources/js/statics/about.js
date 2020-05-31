import Vue from 'vue'
import Vuetify from 'vuetify'
import About from '../pages/statics/About'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'about-component': About,
  }
})