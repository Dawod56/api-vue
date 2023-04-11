<template>
  <div style="background: #1f2e50; color: #ffffff">
    <b-container class="pb-4">
      <b-row class="pt-5 pb-4">
        <b-col cols="4">
          <h2>
            <strong>SOL</strong>
          </h2>
          <p>Welcome to our software company, where we are passionate about developing cutting-edge technology solutions
            that solve complex problems for businesses and individuals. Our team of experienced software engineers,
            developers, and designers are committed to delivering exceptional software products that exceed our customers'
            expectations.</p>
        </b-col>
        <b-col cols="6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1684.7742399545045!2d89.53511113761809!3d22.80157411808884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x39ff851fe411bee1%3A0x69894ab6da91cef1!2zSGFkaSBDaGF0dGFyLCDgprngpr7gpqbgp4Ag4Kaa4Kak4KeN4Kas4KawLCBLaHVsbmE!3m2!1d22.8021647!2d89.5339702!5e0!3m2!1sen!2sbd!4v1681200443884!5m2!1sen!2sbd"
            width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </b-col>
        <b-col cols="2">
          <h3>Location</h3>
          <div>Khulna, Bangladesh</div>
          <div class="mt-3">
            <b-icon icon="phone" /> +8801755273417 <br />
            <b-icon icon="envelope" /> abudaowd4@gmail.com <br />
          </div>
        </b-col>


      </b-row>

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
  mounted() { },
};
</script>

<style scoped lang="scss">#footer {
  bottom: 0px;
}</style>
