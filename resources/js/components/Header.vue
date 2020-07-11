<template>
    <v-app-bar app dark color="primary">
      <v-col cols="1"></v-col>
      <v-toolbar-title>GearArchive</v-toolbar-title>
      <v-col cols="1"></v-col>
      <v-col cols="2">ユーザ一覧</v-col>
      <v-col cols="2">デバイス一覧</v-col>
      <v-col cols="2">設定</v-col>
      <v-spacer></v-spacer>
      <v-btn cols="2" color="light-blue">login</v-btn>
    </v-app-bar>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
