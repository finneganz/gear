<template>
  <v-footer absolute dark color="primary">
    <v-row>
      <v-col cols="2">
        <v-card flat color="primary">
          <v-card-title class="justify-center">GearArchive</v-card-title>
        </v-card>
      </v-col>
      <v-col cols="2">
        <v-card flat color="primary">
          <v-card-title>Menu</v-card-title>
          <v-card-text>^^^^^^^^</v-card-text>
          <v-card-text class="pt-0">^^^^^^^^</v-card-text>
          <v-card-text class="pt-0">^^^^^^^^</v-card-text>
        </v-card>
      </v-col>
      <v-col cols="2">
        <v-card flat color="primary">
          <v-card-title>静的ページ</v-card-title>
          <v-card-text>About</v-card-text>
          <v-card-text class="pt-0">Contact</v-card-text>
          <v-card-text class="pt-0">Policy</v-card-text>
        </v-card>
      </v-col>
      <v-spacer></v-spacer>
      <v-col cols="2">
        <v-card flat color="primary">
          <v-card-title>icons</v-card-title>
        </v-card>
      </v-col>
    </v-row>
  </v-footer>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>