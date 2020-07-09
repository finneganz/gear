import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import Contact from '../pages/statics/Contact'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'contact-component': Contact,
  }
})