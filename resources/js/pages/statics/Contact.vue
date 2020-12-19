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
          <v-alert
            class="mb-0 mt-4"
            v-if="errors.username"
            type="error"
            dense
            outlined
          >
            {{ errors.username[0] }}
          </v-alert>
          <v-text-field
            id="username"
            name="username"
            placeholder="お名前(ペンネーム可)"
          ></v-text-field>
          <v-alert
            class="mb-0 mt-4"
            v-if="errors.email"
            type="error"
            dense
            outlined
          >
            {{ errors.email[0] }}
          </v-alert>
          <v-text-field
            id="email"
            name="email"
            placeholder="メールアドレス"
          ></v-text-field>
          <v-alert
            class="mb-0 mt-4"
            v-if="errors.subject"
            type="error"
            dense
            outlined
          >
            {{ errors.subject[0] }}
          </v-alert>
          <v-text-field
            id="subject"
            name="subject"
            placeholder="件名(20文字以内)"
          ></v-text-field>
          <v-alert
            class="mb-0 mt-4"
            v-if="errors.main"
            type="error"
            dense
            outlined
          >
            {{ errors.main[0] }}
          </v-alert>
          <v-textarea
            id="main"
            name="main"
            placeholder="お問い合わせ内容を入力してください。(400文字以内)"
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
    'errors',
  ],
  data: () => ({
    csrf: 
    document.querySelector('meta[name="csrf-token"]')
    .getAttribute('content'),
  }),
}
</script>
