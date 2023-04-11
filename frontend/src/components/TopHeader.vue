<template>
  <div>
    <b-row>
      <b-col>
        <b-navbar class="py-3" toggleable="lg" type="dark" style="background-color: #00283a">
          <b-navbar-nav>
            <b-navbar-brand href="/">
              <b-img :src="companyLogo" contain height="60px" width="60px" style="margin-left: 20px;" />
            </b-navbar-brand>
          </b-navbar-nav>

          <b-navbar-nav class="ml-auto">
            <b-nav-item class="" to="/cart-view">
              <div>
                Product
              </div>
            </b-nav-item>
            <b-nav-item class="" to="/about">
              <div>
                About
              </div>
            </b-nav-item>
            <b-nav-item class="" v-if="userLoggedIn">
              <b-img height="35px" width="35px" :src="user.profileImage" />
            </b-nav-item>
            <b-button class="" v-if="!userLoggedIn" pill variant="success" to="/login">
              Login &amp; Register
            </b-button>
          </b-navbar-nav>
        </b-navbar>
      </b-col>
    </b-row>

    <hr class="m-0" style="background-color: #000" />
  </div>
</template>

<script>
export default {
  name: "TopHeader",
  data() {
    return {
      companyLogo: "",
    };
  },
  async mounted() {
    this.companyLogo = require("@/assets/silicon.png");
  },
  computed: {},
  methods: {

  },
};
</script>

<style scoped lang="scss"></style>
