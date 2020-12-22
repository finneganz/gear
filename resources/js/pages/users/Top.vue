<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container fluid class="px-0">
      <v-card flat tile width="auto" color="blue-grey lighten-4" class="py-12 mt-11">
        <v-card-title class="justify-center">GearArchive</v-card-title>
        <v-card-subtitle class="text-center">gamer's device sharing for gamers by gamers</v-card-subtitle>
      </v-card>
    </v-container>
    <v-container>
      <v-row>
        <v-col
          v-for="user in users"
          :key="user.id"
          :cols="3"
        >
          <v-card 
            outlined
            v-bind:href="'/users/' + user.username"
            height="130"
          >
            <v-card-text v-text="user.username" class="font-weight-bold pt-8 text-center"></v-card-text>
            <v-card-text v-text="'@' + user.twitterid" class="text-center pt-0"></v-card-text>
          </v-card>
        </v-col>
      </v-row>
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
    'users',
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
