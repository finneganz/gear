<template>
  <v-app>
    <header-component></header-component>
      <v-container class="pa-5 mt-12 pa-12">
        <v-card flat>
          <v-row>
            <v-col cols="3"></v-col>
            <v-col cols="2">
              <v-card-text class="pt-5">img</v-card-text>
            </v-col>
            <v-col cols="7">
              <v-card-title>PLAYER NAME</v-card-title>
              <v-card-text>@twitter_id</v-card-text>
              <v-card-text class="pt-0">^^^^^^^^^^^</v-card-text>
              <v-card-text class="pt-0">^^^^^^^^^^^</v-card-text>
              <v-btn rounded>button</v-btn>
              <v-btn rounded>button</v-btn>
            </v-col>
          </v-row>
        </v-card>
      </v-container>
      <v-divider></v-divider>
      <v-container class="pa-12">
        <v-card flat>
          <v-card-title class="justify-center">Devices</v-card-title>
          <v-card-text class="text-center">^^^^^^^^^^</v-card-text>
          <v-card-text class="text-center pt-0">^^^^^^^^^^</v-card-text>
          <v-row>
            <v-col cols="4">
              <v-card flat>
                <v-card-text class="text-center">img</v-card-text>
                <v-card-title class="justify-center">Mouse</v-card-title>
                <v-card-text class="text-center">^^^^^^^^^^</v-card-text>
                <v-card-text class="text-center pt-0">^^^^^^^^^^</v-card-text>
              </v-card>
            </v-col>
            <v-col cols="4">
              <v-card flat>
                <v-card-text class="text-center">img</v-card-text>
                <v-card-title class="justify-center">Mousepad</v-card-title>
                <v-card-text class="text-center">^^^^^^^^^^</v-card-text>
                <v-card-text class="text-center pt-0">^^^^^^^^^^</v-card-text>
              </v-card>
            </v-col>
            <v-col cols="4">
              <v-card flat>
                <v-card-text class="text-center">img</v-card-text>
                <v-card-title class="justify-center">Keyboard</v-card-title>
                <v-card-text class="text-center">^^^^^^^^^^</v-card-text>
                <v-card-text class="text-center pt-0">^^^^^^^^^^</v-card-text>
              </v-card>
            </v-col>
          </v-row>
        </v-card>
      </v-container>
      <v-divider></v-divider>
      <v-container>
        <v-card flat>
          <v-card-title class="justify-center">Config</v-card-title>
          <v-card-text class="text-center">^^^^^^^^^^^^^^</v-card-text>
          <v-card-text class="text-center">^^^^^^^^^^^^^^</v-card-text>
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
  }
}
</script>
