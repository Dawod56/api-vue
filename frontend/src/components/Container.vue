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
            password: ''
        };
    },
    computed: {},
    mounted() { },
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
        }
    }
};
</script>
  
<style lang="scss" scoped></style>