<template>
  <v-stepper v-model="e1">
    <v-stepper-header>
      <v-stepper-step :complete="e1 > 1" step="1"></v-stepper-step>
      <v-divider></v-divider>
      <v-stepper-step :complete="e1 > 2" step="2"></v-stepper-step>
      <v-divider></v-divider>
      <v-stepper-step :complete="e1 > 3" step="3"></v-stepper-step>
      <v-divider></v-divider>
      <v-stepper-step :complete="e1 > 4" step="4"></v-stepper-step>
      <v-divider></v-divider>
      <v-stepper-step step="5"></v-stepper-step>
    </v-stepper-header>

    <v-stepper-items>
      <v-stepper-content step="1">
        <v-card class="mb-12" height="400px" flat>
         <v-col cols="12">
          <b>어떤 활동을 할 수 있나요?</b>
           <v-checkbox label="씻겨주기"></v-checkbox>
           <v-checkbox label="용변"></v-checkbox>
           <v-checkbox label="밥먹여주기"></v-checkbox>
           <v-checkbox label="운동시켜주기"></v-checkbox>
           <v-checkbox label="말동무해주기"></v-checkbox>
         </v-col>
        </v-card>

        <v-btn color="primary" @click="e1 = 2">
          다음
        </v-btn>
      </v-stepper-content>

      <v-stepper-content step="2">
        <v-card class="mb-12" height="200px" flat>
            <v-col cols="12" sm="6">
            <b>요양보호사에게 지급할 시급을 입력해주세요</b>
            <v-img src="https://image.flaticon.com/icons/svg/1949/1949161.svg" 
            height="150px" width="150px"></v-img>
            
            <v-text-field
            type="number"
            label="8,590원 이상 입력"
            single-line solo suffix="원">
            </v-text-field>
            </v-col>
        </v-card>
        
        <v-btn color="primary" @click="e1 = 3">
          다음
        </v-btn>
        <v-btn @click="e1 = 1">이전</v-btn> 
      </v-stepper-content>

      <v-stepper-content step="3">
        <v-card class="mb-12" height="200px" flat>
         <b>지도생성</b>  
        </v-card>

        <v-btn color="primary" @click="e1 = 4">
          다음
        </v-btn>
        <v-btn @click="e1 = 2">이전</v-btn>
      </v-stepper-content>

      <v-stepper-content step="4">
        <v-card class="mb-12" height="200px" flat>
         <v-col cols="12">
          <b>언제 요양보호사가 필요하신가요?</b>
          <v-radio-group>
           <v-radio class="font-weight-bold" label="월~금 종일"></v-radio>
           <v-radio class="font-weight-bold" label="월~금 오전"></v-radio>
           <v-radio class="font-weight-bold" label="월~금 오후"></v-radio>
           <v-radio class="font-weight-bold" label="주말 종일"></v-radio>
           <v-radio class="font-weight-bold" label="내가 원하는 시간 직접 입력하기"></v-radio>
          </v-radio-group>
         </v-col>
        </v-card>

        <v-btn color="primary" @click="e1 = 5">
          다음
        </v-btn>

        <v-btn @click="e1 = 3">이전</v-btn>
      </v-stepper-content>

      <v-stepper-content step="5">
        <v-card class="mb-12" height="300px" flat>
            <b>요양보호사가 알아야 할 내용이 있나요?</b> 
            <v-textarea
            background-color="grey lighten-2"
            single-line solo height="230px">
            </v-textarea>
        </v-card>

        <v-btn color="primary" depressed to="/Signup">
          완료
        </v-btn>
        <v-btn @click="e1 = 4">이전</v-btn>

      </v-stepper-content>
    </v-stepper-items>
  </v-stepper>
</template>

<script>
  export default {
    data () {
      return {
        e1: 1,
        certificate: false,
        wash: false,
        toilet: false,
        feed: false,
        exercise: false,
        talk: false
      }
    },
  }
</script>
