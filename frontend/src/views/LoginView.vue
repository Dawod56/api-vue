<template>
    <div>
      <TopHeader></TopHeader>

      <Footer class="mt-5" />
    </div>
  </template>
  
  <script>
  import TopHeader from "@/components/TopHeader.vue";
  import Footer from "@/components/Footer.vue";
  // import { mapState } from "vuex";
  export default {
    name: "LoginView",
    components: {
      TopHeader,
      Footer,
    },
    data() {
      return {
        selectedCurrency: "BDT",
        cartItemCount: 2,
      };
    },
    mounted() {},
    computed: {
    },
    methods: {
    },
  };
  </script>
  
  <style scoped lang="scss"></style>
  