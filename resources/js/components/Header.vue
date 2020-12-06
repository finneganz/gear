<template>
  <v-app-bar app dark color="primary">
    <v-card-title>
      <v-card 
        flat
        :ripple="false"
        color="primary"
        href="/"
        width="150"
        class="text-center"
      >
        GearArchive
      </v-card>
    </v-card-title>
    <v-col cols="1"></v-col>
    <v-col cols="2">
      <v-card
        flat
        :ripple="false"
        color="primary"  
        href="/"
        class="text-center"
      >
        ユーザ一覧
      </v-card>
    </v-col>
    <v-col cols="2">
      <v-card
        flat
        :ripple="false"
        color="primary"  
        href="/devices"
        class="text-center"
      >
        デバイス一覧
      </v-card>
    </v-col>
    <v-col cols="2">
      <v-card
        v-show="auth"
        :ripple="false"
        color="primary"  
        :href="'/users/' + auth.username"
        class="text-center"
        max-width="100"
        flat
      >
        設定
      </v-card>
    </v-col>
    <v-spacer></v-spacer>
    <v-card
      v-show="auth"
      :ripple="false"
      color="primary"
      class="mr-3"
      flat
    >
      {{ auth.username }}
    </v-card>
    <form
      method="POST"
      action="/logout"
      id="logout-form"
      v-if="auth"
    >
      <input type="hidden" name="_token" :value="csrf" />
      <v-btn
        cols="2"
        type="submit"
        class="text-lowercase font-weight-bold"
        small
        text
      >
        Sign Out
      </v-btn>
    </form>
    <v-card
      v-else
      color="primary"
      outlined
    >
      <v-row>
        <v-btn
          cols="2"
          href="/register"
          class="text-lowercase px-1 font-weight-bold"
          small
          text
        >
          Sign Up
        </v-btn>
        <span> / </span>
        <v-btn
          cols="2"
          href="/login"
          class="text-lowercase px-1 font-weight-bold"
          small
          text
        >
          Sign In
        </v-btn>
      </v-row>
    </v-card>
  </v-app-bar>
</template>

<script>
  export default {
    props: [
      'csrf',
      'auth',
    ],
  }
</script>
