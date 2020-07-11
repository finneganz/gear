<template>
  <v-app>
    <header-component></header-component>
    <v-content>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">User Edit Component</div>

                      <div class="card-body">
                          I'm an user edit page component.
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </v-content>
  </v-app>
</template>

<script>
import Header from '../../components/Header'
export default {
  components: {
    'header-component': Header
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
