import Vue from 'vue'
import Vuetify from 'vuetify'
import Policy from '../pages/statics/Policy'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'policy-component': Policy,
  }
})