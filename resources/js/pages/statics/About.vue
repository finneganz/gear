<template>
  <v-app>
    <header-component :auth="auth" :csrf="csrf"></header-component>
    <v-container
      fluid
      class="py-12"
    >
      <v-row justify="center">
        <v-col cols="8">
          <v-card
            class="my-12 px-8"
          >
            <v-card-title>GearArchiveの運営について</v-card-title>
            <v-card-text>GearArchiveは、2人の開発者によって運営されています。</v-card-text>
            <v-card-text class="pt-0">
              お問い合わせは、gear.archiveApp@gmail.com または
              <v-btn
                href="/contact"
                text
                class="px-0"
                color="primary"
              >
                コンタクトページ
              </v-btn>
              からお願いします。
            </v-card-text>
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
