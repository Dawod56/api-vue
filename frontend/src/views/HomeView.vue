<template>
  <div>
    <TopHeader />
    <b-container>
      <div class="container">
        <h1>Wildlife Photography</h1>
        <div class="article-content">
          <p>Wildlife photography is a fascinating and rewarding genre of photography. It involves capturing images of
            animals in their natural habitat, often in remote and challenging environments. Wildlife photographers have to
            be patient, observant, and skilled at capturing fleeting moments.</p>
          <p>One of the most important aspects of wildlife photography is understanding the behavior of the animals being
            photographed. This requires research, observation, and experience. Photographers need to know when and where
            to find their subjects, as well as how to approach them without disturbing them.</p>
          <h2>Equipment</h2>
          <p>Wildlife photography requires specialized equipment, including telephoto lenses, tripods, and often,
            camouflage gear. Telephoto lenses are necessary to get close-up shots of animals from a safe distance, while
            tripods provide stability and prevent camera shake. Camouflage gear helps photographers blend in with their
            surroundings and avoid being detected by animals.</p>
          <h2>Challenges</h2>
          <p>Wildlife photography can be challenging due to the unpredictability of animal behavior and the difficulties
            of shooting in remote locations. Weather conditions can also be a factor, as can the availability of natural
            light. However, the rewards of capturing a stunning image of a rare or endangered animal make the challenges
            well worth it.</p>
          <div class="article-image">
            <img src="../assets/elephant.jpg" alt="Elephant" class="img-fluid">
            <p class="article-caption">An elephant in the savannah.</p>
          </div>
          <p>Wildlife photography is a way to appreciate and celebrate the beauty and diversity of the natural world. It
            also plays an important role in raising awareness about conservation and the need to protect endangered
            species and their habitats.</p>
        </div>
      </div>
    </b-container>
    <Footer class="mt-5" />
  </div>
</template>

<script>
// @ is an alias to /src
import TopHeader from "@/components/TopHeader.vue";
import { mapGetters } from 'vuex'

import Footer from "@/components/Footer.vue";
export default {
  name: "HomeView",
  components: {
    TopHeader,
    Footer,
  },
  mounted() { },
  computed: {
    ...mapGetters(['isAuthenticated']),
  },
};


</script>

<style lang="scss" scoped></style>
