import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import Terms from '../pages/statics/Terms'

Vue.use(Vuetify);

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'terms-component': Terms,
  }
})