<template>
    <div>
        <TopHeader />
        <b-container>
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-3"></div>
                    <form @submit.prevent="onSubmit" class="col-sm-6">
                        <div class="card">
                            <div>
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name" class="form-control" v-model="form.name" required>
                            </div>
                            <div>
                                <label for="email" class="form-label">Description</label>
                                <input type="text" id="email" class="form-control" v-model="form.description" required>
                            </div>
                            <div>
                                <label for="message" class="form-label">Price</label>
                                <textarea id="message" class="form-control" v-model="form.price" required></textarea>
                            </div>
                            <button type="submit">Submit</button>
                        </div>

                    </form>

                    <!-- <div class="col-sm-6" style="margin-top: 10px;justify-content:center">
                        <div class="card">
                            <div class="card-body">
                                <img src="../assets/logo.png">
                                <h5 class="card-title">Name: {{ item.name }}</h5>
                                <p class="card-text">Description: {{ item.description }}</p>
                                <p class="card-text">Price: {{ item.price }}</p>
                            </div>
                        </div>
                    </div> -->
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
import axios from "axios";
export default {
    name: "HomeView",
    components: {
        TopHeader,
        Footer,
    },
    mounted() { },
    data() {
        return {
            item: {},
            form: {
                name: '',
                description: '',
                price: ''
            },
            loading: true

        }
    },
    created() {
        const id = this.$route.params.id
        itemService.get(id)
            .then(response => {
                this.item = response
                this.form = { ...response }
                this.loading = false
            })
            .catch(error => {
                console.error(error)
                this.loading = false
            })
    },
    methods: {
        async onSubmit() {
            const id = this.$route.params.id // retrieve id from the route params
            axios.post('http://localhost:8000/api/product/update/' + id, this.form)
                .then(response => {
                    this.$router.push('/products')
                    console.log(response);
                })
                .catch(error => {
                    this.error = error.message;
                    console.log(error);
                })
        }
    }
};
</script>
  
<style lang="scss" scoped></style>
  