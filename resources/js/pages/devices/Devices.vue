<template>
  <v-app>
    <header-component></header-component>
    <v-container fluid class="py-12 mt-12">
      <v-row>
        <v-col
          v-for="device in devices"
          :key="device.name"
          :cols="device.flex"
        >
          <v-card outlined>
            <v-card-text>img</v-card-text>
            <v-card-title v-text="device.name"></v-card-title>
            <v-card-text v-text="device.maker"></v-card-text>
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
    devices: [
      { name: 'Rival 600', maker: 'SteelSeries', flex: '3' },
      { name: 'G304', maker: 'Logicool', flex: '3' },
      { name: 'ZA 13', maker: 'Zowie', flex: '3' },
      { name: 'DeathAdder V2', maker: 'Razer', flex: '3' },
      { name: 'ROG Gradius 1', maker: 'ASUS', flex: '3' },
    ],
  }),
}
</script>
