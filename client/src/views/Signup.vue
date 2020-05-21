<template>
  <v-card outlined class="mx-auto mt-10" width="70%" max-width="450" min-width="250">
    <v-card-title>
      <span class="mx-auto">회원 가입</span>
    </v-card-title>
    <v-form v-on:submit="handleSignupSubmit" id="signup-form">
      <v-container>
        <v-text-field label="이름" v-model="name"></v-text-field>
        <v-text-field label="아이디" v-model="username" @input="handleUsernameInput"></v-text-field>
        <v-text-field
          type="password"
          label="비밀번호"
          v-model="password1"
          @change="handlePasswordChange"
        ></v-text-field>
        <v-text-field
          type="password"
          label="비밀번호 획안"
          v-model="password2"
          @change="handlePasswordChange"
        ></v-text-field>
        <v-btn type="submit" :disabled="disabled" rounded color="primary" width="100%" class="mt-5" form="signup-form">
          <span>회원 가입</span>
        </v-btn>
      </v-container>
    </v-form>
  </v-card>
</template>

<script>
import caregiverService from '../services/caregiverService';
import registerService from '../services/registerService';

export default {
  data() {
    return {
      name: '',
      doesExist: true, // 버튼 비활성회를 위해 디폴트 true
      username: '',
      password1: '',
      password2: '',
    };
  },
  computed: {
    disabled() {
      const { name, username, password1, password2, doesExist } = this;
      if (name && username && password1 && password2) {
        return password1 === password2 && !doesExist ? false : true;
      }
      return true;
    },
  },
  methods: {
    // 비밀번호 유효성 검사 함수 필요
    async handleUsernameInput() {
      if (this.username === '') return;
      try {
        const response = await registerService.checkUsernameDuplication({
          params: {
            username: this.username,
          },
        });
        if (response.data.doesExist) {
          this.doesExist = true;
          // 중복된 이메일 존재한다고 경고 띄우기
        } else {
          this.doesExist = false;
        }
      } catch (error) {
        console.log('Signup.vue: ', error);
      }
    },
    handlePasswordChange() {
      const { password1, password2 } = this;
      if (password1 && password2 && password1 !== password2) {
        // 비밀번호1, 2 다르게 입력했다고 경고 띄우기
        console.log('password1, password2 are different');
      }
    },
    async handleSignupSubmit(e) {
      e.preventDefault();
      try {
        const response = await caregiverService.register({
          username: this.username,
          password: this.password,
        });
        console.log('Login.vue: ', response);
      } catch (error) {
        console.log('Login.vue: ', error);
      }
    },
  },
};
</script>
