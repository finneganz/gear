<template>
  <v-app>
    <header-component></header-component>
    <v-container fluid class="px-0">
      <v-card flat tile width="auto" color="blue-grey lighten-4" class="mt-11">
        <v-card-title class="justify-center">edit maker page</v-card-title>
      </v-card>
    </v-container>
    <v-container fluid>
      <v-card flat max-width="500" class="mx-auto">
        <v-form
          method="POST"
          action="/maker/steelseries/edit"
          id="makerEdit"
        >
          <input type="hidden" name="_token" :value="csrf" />
          <v-alert 
            class="mb-0 mt-4"
            v-if="errors.makerName"
            type="error"
            dense
            outlined
          >
            {{ errors.makerName[0] }}
          </v-alert>
          <v-text-field
            label="maker name"
            id="makerName"
            name="makerName"
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
  props: [
    'errors',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
    methods: {
      addDevice: function(){
        document.querySelector('makerEdit').submit();
      },
    },
  })
}
</script>
