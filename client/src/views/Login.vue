<template>
  <v-card outlined class="mx-auto mt-10" width="70%" max-width="450" min-width="250">
    <v-card-title>
      <span class="mx-auto">
        로그인
      </span>
    </v-card-title>
    <v-form>
      <v-container>
        <v-text-field label="아이디"></v-text-field>
        <v-text-field type="password" label="비밀번호"></v-text-field>
        <v-btn rounded color="primary" width="100%" class="mt-5">
          <span>로그인</span>
        </v-btn>
      </v-container>
    </v-form>
  </v-card>
</template>
