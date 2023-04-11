<template>
    <div>
        <TopHeader />
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <h3>Product list</h3>
                <div class="col-sm-4" style="margin-top: 10px;" v-for="item in items" :key="item.id">
                    <div class="card">
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="position-absolute top-0 end-0">
                                    <router-link :to="{ name: 'pageWithId', params: { id: item.id } }">Edit</router-link>
                                </div>
                            </div>
                            <img src="../assets/logo.png">
                            <h5 class="card-title">Name: {{ item.name }}</h5>
                            <p class="card-text">Description: {{ item.description }}</p>
                            <p class="card-text">Price: {{ item.price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer class="mt-5" />
    </div>
</template>
  
<script>
import TopHeader from "@/components/TopHeader.vue";
import Footer from "@/components/Footer.vue";
import axios from 'axios'
export default {
    name: "ProductView",
    components: {
        TopHeader,
        Footer
    },
    data() {
        return {
            items: []
        };
    },
    async mounted() {
        axios.get('http://localhost:8000/api/products')
            .then(response => {
                this.items = response.data
            })
            .catch(error => {
                console.log(error)
            })
    },
    methods: {
        editItem(item) {
            this.item = Object.assign({}, item)
        }
    },
    computed: {}
};
</script>
  
<style lang="scss" scoped></style>
  