<template>
    <div>
        <TopHeader></TopHeader>
        <div class="row" style="margin-top: 50px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form @submit.prevent="addProduct">
                    <fieldset>
                        <legend>Create Product object</legend>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Object Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Object Name"
                                v-model="names">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Object Description</label>
                            <textarea class="form-control" id="exampleInputEmail1" placeholder="Description"
                                v-model="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label mt-4">Price</label>
                            <input type="text" v-model="price" class="form-control" id="exampleInputPassword1"
                                placeholder="Price">
                        </div>
                        <button type="submit" style="margin-top: 10px;" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <Footer class="mt-5" />
    </div>
</template>
  
<script>
import TopHeader from "@/components/TopHeader.vue";
import Footer from "@/components/Footer.vue";
import axios from "axios";

export default {
    name: "CreateView",
    components: {
        TopHeader,
        Footer,
    },
    data() {
        return {
            selectedCurrency: "BDT",
            cartItemCount: 2,
        };
    },
    mounted() { },
    computed: {
    },
    methods: {
        addProduct() {
            axios.post('http://localhost:8000/api/products/store', {
                name: this.names,
                description: this.description,
                price: this.price
            })
                .then(response => {
                    this.response = response.data;
                    this.$router.push('/products')
                    console.log(response);
                })
                .catch(error => {
                    this.error = error.message;
                    console.log(error);
                })
        }
    },
};
</script>
  
<style scoped lang="scss"></style>
  