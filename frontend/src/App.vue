<template>
  <div>
    <Header></Header>
    <Container></Container>
    <Footer></Footer>
  </div>
</template>

<script>

import Footer from './components/Footer.vue';
import Header from './components/Header.vue';
import Container from './components/Container.vue';

export default {
  name: 'App',
  components: {
    Header,
    Container,
    Footer,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
