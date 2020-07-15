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
      <v-row justify="space-around">
        <v-col cols="3">
          <v-card outlined>
            <v-card-text>img</v-card-text>
            <v-card-title>PlayerName</v-card-title>
            <v-card-subtitle>@twitter_id</v-card-subtitle>
            <v-card-text>^^^^^^^^^</v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card outlined>
            <v-card-text>img</v-card-text>
            <v-card-title>PlayerName</v-card-title>
            <v-card-subtitle>@twitter_id</v-card-subtitle>
            <v-card-text>^^^^^^^^^</v-card-text>
          </v-card>
        </v-col>
        <v-col cols="3">
          <v-card outlined>
            <v-card-text>img</v-card-text>
            <v-card-title>PlayerName</v-card-title>
            <v-card-subtitle>@twitter_id</v-card-subtitle>
            <v-card-text>^^^^^^^^^</v-card-text>
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
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
