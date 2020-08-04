<template>
  <v-app>
    <header-component></header-component>
    <v-container fluid class="py-12 mt-12">
      <v-row>
        <v-col
          v-for="maker in makers"
          :key="maker.id"
          :cols="2"
        >
          <v-card outlined>
            <v-card-text v-text="maker.maker_name"></v-card-text>
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
  props: [
    'makers',
  ],
}
</script>
