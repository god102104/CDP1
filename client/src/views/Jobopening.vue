<template>
  <div class="Jobopening">
    <h1>일자리 찾기 페이지</h1>
    <div v-for="offerer in offerers" v-bind:key="offerer.id">{{offerer}}</div>
  </div>
</template>

<script>
import offererService from "../services/offererService";

export default {
  data() {
    return {
      offerers: []
    };
  },
  async mounted() {
    try {
      const response = await offererService.get();
      console.log(response);
      this.offerers = response.data;
    } catch (err) {
      console.log("Jobopening.vue mounted: ", err);
    }
  }
};
</script>
