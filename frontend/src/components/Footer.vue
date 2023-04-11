<template>
  <div style="background: #1f2e50; color: #ffffff">
    <b-container class="pb-4">
      <b-row class="pt-5 pb-4">
        <b-col cols="5">
          <h2>
            <strong>emarket</strong>
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sequi perferendis! Harum ipsa quaerat iure excepturi accusamus nulla, dolorem cumque veniam, similique est voluptate optio. Tempore enim eius inventore assumenda.</p>
        </b-col>
        <b-col cols="3">
          <h3>Links</h3>
          <b-link href="#">Company Profile</b-link><br />
          <b-link href="#">Your Account</b-link><br />
          <b-link href="#">Terms &amp; Conditions</b-link><br />
          <b-link href="#">Privacy Policy</b-link><br />
          <b-link href="#">Developers Story</b-link><br />
        </b-col>
        <b-col cols="4">
          <h3>Location</h3>
          <div>Dhaka, Bangladesh</div>
          <div class="mt-3">
            <b-icon icon="phone" /> +8801715349523 <br />
            <b-icon icon="envelope" /> support@emarket.com <br />
          </div>
        </b-col>
      </b-row>
      <hr />
      <h5>© 2021, All rights reserved</h5>
    </b-container>
  </div>
</template>

<script>
export default {
  name: "FooterView",
  data() {
    return {
      company: {},
    };
  },
  mounted() {},
};
</script>

<style scoped lang="scss">
#footer {
  bottom: 0px;
}
</style>
