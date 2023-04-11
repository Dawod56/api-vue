<template>
    <div>
      <TopHeader></TopHeader>
      <div class="container">
            <form @submit.prevent="submitForm">
            <fieldset>
                <legend>Registration</legend>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" v-model="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" v-model="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" v-model="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <button type="submit" style="margin-top: 10px;" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
        </div>
        
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
  