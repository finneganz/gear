<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="px-0">
      <v-card flat tile width="auto" color="blue-grey lighten-4" class="mt-11">
        <v-card-title class="justify-center">login page</v-card-title>
      </v-card>
    </v-container>
    <v-container 
      class="my-12"
      fluid 
    >
      <v-card flat max-width="500" class="mx-auto">
        <v-form
          method="POST"
          action="/login"
          id="login"
        >
          <input type="hidden" name="_token" :value="csrf" />
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.username"
            type="error"
            dense
            outlined
          >
            {{ errors.username[0] }}
          </v-alert>
          <v-text-field
            label="user name"
            id="username"
            name="username"
          ></v-text-field>
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.password"
            type="error"
            dense
            outlined
          >
            {{ errors.password[0] }}
          </v-alert>
          <v-text-field
            label="password"
            id="password"
            name="password"
            type="password"
          ></v-text-field>
          <v-btn
            type="submit"
            color="primary"
            class="text-capitalize"
          >submit</v-btn>
        </v-form>
      </v-card>
    </v-container>
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
    'errors',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  })
}
</script>
