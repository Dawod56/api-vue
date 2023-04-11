<template>
  <div>
    <TopHeader />
    <b-container>
    </b-container>
    <Footer class="mt-5" />
  </div>
</template>

<script>
// @ is an alias to /src
import TopHeader from "@/components/TopHeader.vue";

import Footer from "@/components/Footer.vue";
export default {
  name: "HomeView",
  components: {
    TopHeader,
    Footer,
  },
  mounted() {},
};
</script>

<style lang="scss" scoped></style>
