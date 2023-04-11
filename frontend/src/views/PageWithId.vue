<template>
    <div>
        <TopHeader />
        <b-container>
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-3"></div>

                    <div class="col-sm-6" style="margin-top: 10px;justify-content:center">
                        <div class="card">
                            <div class="card-body">
                                <img src="../assets/logo.png">
                                <h5 class="card-title">Name: {{ item.name }}</h5>
                                <p class="card-text">Description: {{ item.description }}</p>
                                <p class="card-text">Price: {{ item.price }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </b-container>
        <Footer class="mt-5" />
    </div>
</template>
  
<script>
import TopHeader from "@/components/TopHeader.vue";
import Footer from "@/components/Footer.vue";
import itemService from '@/services/ProductsService.js'
export default {
    name: "HomeView",
    components: {
        TopHeader,
        Footer,
    },
    mounted() { },
    data() {
        return {
            item: {}
        }
    },
    created() {
        itemService.get(this.$route.params.id)
            .then(response => {
                this.item = response
            })
            .catch(error => {
                console.error(error)
            })
    }
};
</script>
  
<style lang="scss" scoped></style>
  