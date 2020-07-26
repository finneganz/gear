<template>
  <v-app>
    <header-component></header-component>
    <v-container fluid class="mt-12">
      <v-row justify="center" class="pt-8">
        <v-col cols="1">
          <v-card-text>img</v-card-text>
        </v-col>
        <v-card flat max-width="300">
          <v-card-title>Device Name</v-card-title>
          <v-card-text>Device's maker</v-card-text>
          <v-btn outlined small color="primary" class="ml-4">Link</v-btn>
        </v-card>
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
