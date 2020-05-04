<template>
  <v-app>
    <v-app-bar app flat color="white" light>
      <v-toolbar-title class="primary--text">
        App name
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn outlined color="primary" class="mr-2">
        <span>가입하기</span>
      </v-btn>
      <v-btn outlined color="primary">
        <span>로그인</span>
      </v-btn>
    </v-app-bar>
    <v-content class="grey lighten-4">
      <Login />
    </v-content>
    <v-footer>
      &copy;Caregiver Matching Platform
    </v-footer>
  </v-app>
</template>

<script>
import Login from "./components/Login";

export default {
  name: "App",

  components: {
    Login,
  },

  data: () => ({
    //
  }),
};
</script>
