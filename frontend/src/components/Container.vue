<template>
    <div class="container">
        <div v-if="response">
            <p>Thank you for signing up, {{ response }}!</p>
        </div>

        <div v-if="error">
            <p>Oops, there was an error: {{ error }}</p>
        </div>
        <form @submit.prevent="submitForm">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" v-model="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" v-model="password" required>

            <button type="submit">Sign Up</button>
        </form>
        <form @submit.prevent="addProduct" style="margin-top: 200px;">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="name" required>

            <label for="email">Description:</label>
            <input type="text" id="description" v-model="description" required>

            <label for="password">Price:</label>
            <input type="text" id="password" v-model="price" required>

            <button type="submit">Add product</button>
        </form>
        <div class="row" >
            <div class="col-sm-6" v-for="item in items" :key="item.id">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ item.name }}</h5>
                        <p class="card-text">{{ item.description }}</p>
                        <a href="#" class="btn btn-primary">{{ item.price }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
import axios from 'axios'
export default {
    name: 'ContainerView',
    props: {},
    components: {},
    data() {
        return {
            name: '',
            email: '',
            password: '',
            items: []
        };
    },
    computed: {},
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
        submitForm() {
            axios.post('http://localhost:8000/api/auth/register', {
                name: this.name,
                email: this.email,
                password: this.password
            })
                .then(response => {
                    this.response = response.data;
                    console.log(response);
                })
                .catch(error => {
                    this.error = error.message;
                    console.log(error);
                })
        },
        addProduct() {
            axios.post('http://localhost:8000/api/products/store', {
                name: this.name,
                description: this.description,
                price: this.price
            })
                .then(response => {
                    this.response = response.data;
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