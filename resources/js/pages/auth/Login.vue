<template>
  <v-app>
    <header-component></header-component>
    <v-container fluid class="px-0">
      <v-card flat tile width="auto" color="blue-grey lighten-4" class="mt-11">
        <v-card-title class="justify-center">login page</v-card-title>
      </v-card>
    </v-container>
    <v-container fluid>
      <v-card flat max-width="500" class="mx-auto">
        <v-form
          method="POST"
          action="/login"
          id="makerAdd"
        >
          <input type="hidden" name="_token" :value="csrf" />
          <v-text-field
            label="twitter id"
            id="twitterId"
            name="twitterId"
          ></v-text-field>
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
  },
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  })
}
</script>
