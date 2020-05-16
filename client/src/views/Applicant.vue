<template>
  <div class="Applicant">
    <h1>요양 보호사 찾기 페이지</h1>
    <div v-for="caregiver in caregivers" v-bind:key="caregiver.id">{{caregiver}}</div>
  </div>
</template>

<script>
import caregiverService from "../services/caregiverService";

export default {
  data() {
    return {
      caregivers: []
    };
  },
  async mounted() {
    try {
      const response = await caregiverService.get();
      console.log(response);
      this.caregivers = response.data;
    } catch (err) {
      console.log("Applicant.vue mounted: ", err);
    }
  }
};
</script>
