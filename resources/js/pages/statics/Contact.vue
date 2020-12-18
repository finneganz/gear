<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container
      fluid
      class="mt-12"
    >
      <v-card flat max-width="500" class="mx-auto mt-12">
        <v-form
          method="POST"
          action="/contact"
          id="contact"
        >
          <input type="hidden" name="_token" :value="csrf" />
          <v-text-field
            id="subject"
            name="subject"
            placeholder="件名"
          ></v-text-field>
          <v-textarea
            id="main"
            name="main"
            placeholder="お問い合わせ内容を入力してください。"
          ></v-textarea>
          <v-btn
            type="submit"
            color="primary"
            class="text-capitalize"
          >
            送信
          </v-btn>
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
  props: [
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
