import Vue from 'vue'
import Vuetify from 'vuetify'
import Makers from '../pages/makers/Makers'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  components: {
    'makers-component': Makers,
  }
})