<template>
  <div>
    <b-row v-if="allProducts.length != 0">
      <b-col>
        <h3>Products</h3>
        <hr />
        <b-row>
          <b-col cols="3" v-for="product in allProducts" :key="product.id">
            <b-card deck class="mt-4">
              <b-card-img
                @click="$router.push({ path: `/product/${product.id}` })"
                class="mb-3"
                :src="product.image1"
              />
              <b-link @click="$router.push({ path: `/product/${product.id}` })">
                <h5>{{ product.title }}</h5>
              </b-link>
              <h6>Price: {{ product.amount }} {{ product.currency }}</h6>
              inCart: 0
              <b-row class="mt-2" align-v="center">
                <b-col>
                  <b-form-rating
                    :precision="
                      Math.round(product.rating) == product.rating ? 0 : 1
                    "
                    size="sm"
                    show-value
                    show-value-max
                    readonly
                    :value="product.rating"
                    variant="primary"
                  />
                </b-col>
              </b-row>
              <div class="d-flex justify-content-between">
                <AddToCart
                  class="mt-2"
                  addButtonTitle="Add To Cart"
                  addedButtonTitle="In Cart"
                  buttonType="sm"
                  :productId="product.id"
                  :rating="product.rating"
                  :currency="product.currency"
                  :image="product.image1"
                  :title="product.title"
                  :amount="product.amount"
                  :inCart="product.inCart"
                />
              </div>
            </b-card>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import store from "../store";
import AddToCart from "@/components/AddToCart.vue";
export default {
  name: "AllProducts",
  components: {
    AddToCart,
  },
  data() {
    return {
      allProducts: [
        {
          id: 1,
          rating: 2.4,
          currency: "BDT",
          image1: require("../assets/iphone.jpg"),
          title: "Vivo Mobile",
          amount: 34999,
          inCart: 0,
        },
        {
          id: 2,
          rating: 4.4,
          currency: "BDT",
          quantity: 1,
          image1: require("../assets/iphone.jpg"),
          title: "Iphone Mobile 2",
          amount: 52999,
          inCart: 1,
        },
        {
          id: 3,
          rating: 4.1,
          currency: "BDT",
          quantity: 2,
          image1: require("../assets/iphone.jpg"),
          title: "Apple Mobile 3",
          amount: 45000,
          inCart: 0,
        },
        {
          id: 4,
          rating: 2.4,
          currency: "BDT",
          image1: require("../assets/iphone.jpg"),
          title: "Vivo Mobile 5",
          amount: 34999,
          inCart: 0,
        },
        {
          id: 5,
          rating: 4.4,
          currency: "BDT",
          quantity: 1,
          image1: require("../assets/iphone.jpg"),
          title: "Iphone Mobile 9",
          amount: 54999,
          inCart: 0,
        },
        {
          id: 6,
          rating: 4.1,
          currency: "BDT",
          quantity: 2,
          image1: require("../assets/iphone.jpg"),
          title: "Apple Mobile 11",
          amount: 45000,
          inCart: 0,
        },
        {
          id: 7,
          rating: 2.4,
          currency: "BDT",
          image1: require("../assets/iphone.jpg"),
          title: "Vivo Mobile pro",
          amount: 34999,
          inCart: 0,
        },
        {
          id: 8,
          rating: 4.4,
          currency: "BDT",
          quantity: 1,
          image1: require("../assets/iphone.jpg"),
          title: "Iphone Mobile 22",
          amount: 54999,
          inCart: 1,
        },
        {
          id: 9,
          rating: 4.1,
          currency: "BDT",
          quantity: 2,
          image1: require("../assets/iphone.jpg"),
          title: "Apple Mobile lts",
          amount: 45000,
          inCart: 0,
        },
        {
          id: 10,
          rating: 2.4,
          currency: "BDT",
          image1: require("../assets/iphone.jpg"),
          title: "Vivo Mobile xmax",
          amount: 34999,
          inCart: 1,
        },
      ],
    };
  },
  mounted() {
    console.log(store.state.Products.allProducts);
  },
  methods: {},
  computed: {},
};
</script>

<style lang="scss" scoped></style>
