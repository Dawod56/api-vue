<template>
  <div>
    <TopHeader></TopHeader>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form @submit.prevent="signIn" style="margin-top: 30px;margin-bottom: 30px;">
            <fieldset>
              <legend style="text-align: center; margin-top: 20px;">Sign In</legend>
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

              <div>
                <div class="position-relative">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <div class="position-absolute top-0 end-0" style="margin-bottom: 20px;">
                    <p>Don't have any account?</p>
                    <a href="/signup" class="btn btn-success">
                      Sign Up
                    </a>

                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

    <Footer class="mt-5" />
  </div>
</template>
  
<script>
import TopHeader from "@/components/TopHeader.vue";
import Footer from "@/components/Footer.vue";
import axios from "axios";
export default {
  name: "LoginView",
  components: {
    TopHeader,
    Footer,
  },
  data() {
    return {
      email: '',
      password: '',
    };
  },
  mounted() { },
  computed: {
  },
  methods: {
    async signIn() {
      try {
        const response = await axios.post('http://localhost:8000/api/auth/login', {
          email: this.email,
          password: this.password,
        })
        console.log(response);
        this.$router.push('/')
        // handle successful response
      } catch (error) {
        console.log(error);
        // handle error
      }
    },
  },
};
</script>
  
<style scoped lang="scss"></style>
  