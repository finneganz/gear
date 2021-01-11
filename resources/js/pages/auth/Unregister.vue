<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container
      fluid
      class="py-12"
    >
      <v-row justify="center" align="center">
        <v-col cols="8">
          <v-card class="my-12 px-8">
            <v-card-title>GearArchive退会手続き</v-card-title>
            <v-card-text>退会ボタンを押すとあなたの登録情報は完全に削除されます。</v-card-text>
            <v-card-text>本当に削除してもよろしいですか？</v-card-text>
            <v-form
              method="POST"
              action="/unregister"
              id="unregister"
            >
              <input type="hidden" name="_token" :value="csrf" />
              <v-row justify="end" class="pb-5">
                <v-col cols="2" class="pa-0">
                  <v-btn
                    type="submit"
                    color="primary"
                    outlined
                  >
                    退会
                  </v-btn>
                </v-col>
              </v-row>
            </v-form>
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
    'auth',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
