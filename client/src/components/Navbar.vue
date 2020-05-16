<template>
  <nav>
    <v-app-bar flat app>
      <v-app-bar-nav-icon class="grey--text" @click="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>
        <span class="grey--text">CMS</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn depressed color="transparent" to="/Login">
        <span class="grey--text">Sign In</span>
        <v-icon right>exit_to_app</v-icon>
      </v-btn>
    </v-app-bar>
    <v-navigation-drawer disable-resize-watcher app v-model="drawer" class="light-green lighten-4">
      <v-list>
        <v-list-item v-for="link in links" :key="link.text" router :to="link.route">
          <v-list-item-action>
            <v-icon large>{{ link.icon }}</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>{{ link.text }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
      links: [
        { icon: "priority_high", text: "서비스 소개", route: "/" },
        { icon: "account_box", text: "요양보호사 찾기", route: "/Applicant" },
        { icon: "home", text: "요양원 찾기", route: "/Jobopening" }
      ]
    };
  }
};
</script>
