<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-content>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">Policy Component</div>

                      <div class="card-body">
                          I'm a policy page component.
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </v-content>
    <footer-component></footer-component>
  </v-app>
</template>

<script>
import Header from '../../components/Header'
import Footer from '../../components/Footer'

export default {
  components: {
    'header-component': Header,
    'footer-component': Footer,
  },
  props: [
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
