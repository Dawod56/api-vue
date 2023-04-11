<template>
    <div>
        <TopHeader />
        <div class="container">
            <div class="row" style="margin-top: 30px;">

                <div class="position-relative">
                    <h3>Product list</h3>
                    <div class="position-absolute top-0 end-0">

                        <a href="/product/create" class="btn btn-success">
                            Create
                        </a>

                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 10px;" v-for="item in items" :key="item.id">
                    <div class="card">
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="position-absolute top-0 end-0">
                                    <router-link :to="{ name: 'pageWithId', params: { id: item.id } }" class="btn btn-info">Edit</router-link><br>
                                    <button class="btn btn-danger" @click="deleteItem(item.id)" style="margin-top: 5px;">Delete</button>
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
        deleteItem(item) {
            axios.delete('http://localhost:8000/api/product/delete/' + item)
                .then(response => {
                    console.log(response);
                    this.$router.push('/')
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    computed: {}
};
</script>
  
<style lang="scss" scoped></style>
  