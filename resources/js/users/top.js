import Vue from 'vue'
import Vuetify from 'vuetify'
import "vuetify/dist/vuetify.min.css"
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import Top from '../pages/users/Top'

Vue.use(Vuetify);

new Vuetify({
  icons: {
    iconfont: 'mdi',
  }
});

new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'top-component': Top,
  }
})