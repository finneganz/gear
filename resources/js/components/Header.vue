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
        href="/users/1"
        class="text-center"
        max-width="100"
        flat
      >
        設定
      </v-card>
    </v-col>
    <v-spacer></v-spacer>
    <v-btn
      v-if="auth"
      cols="2"
      color="light-blue"
      href="/logout"
    >
      Logout
    </v-btn>
    <v-btn
      v-else
      cols="2"
      color="light-blue"
      href="/login"
    >
      Login
    </v-btn>
  </v-app-bar>
</template>

<script>
  export default {
    props: [
      'auth',
    ],
  }
</script>
