<template>
  <v-app>
    <header-component></header-component>
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
          :key="user.name"
          :cols="user.flex"
        >
          <v-card 
            outlined
            v-bind:href="user.url"
          >
            <v-card-text>img</v-card-text>
            <v-card-title v-text="user.name"></v-card-title>
            <v-card-text v-text="user.twitter_id"></v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>
import Header from '../../components/Header'
export default {
  components: {
    'header-component': Header
  },
  data: () => ({
    users: [
      // エラー出るが:keyが重複していなければ解消するので問題なし
      { name: 'Player Name', twitter_id: '@twitter_id', url: '/users/1', flex: '3'},
      { name: 'Player Name', twitter_id: '@twitter_id', url: '/users/2', flex: '3'},
      { name: 'Player Name', twitter_id: '@twitter_id', url: '/users/3', flex: '3'},
      { name: 'Player Name', twitter_id: '@twitter_id', url: '/users/4', flex: '3'},
      { name: 'Player Name', twitter_id: '@twitter_id', url: '/users/5', flex: '3'},
    ]
  }),
}
</script>
