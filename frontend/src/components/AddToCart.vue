<template>
  <div>
    <b-dropdown
      id="cart-dd"
      v-if="inCart != 0"
      :size="buttonType"
      variant="info"
    >
      <template #button-content>
        <b-icon scale="1.2" icon="cart-check-fill" />
        Added to Cart
      </template>
      <b-dropdown-item @click="removeCartItem">
        Remove from Cart
      </b-dropdown-item>
    </b-dropdown>
    <b-button
      v-if="inCart == 0"
      :size="buttonType"
      variant="outline-info"
      @click="addToCart"
    >
      <b-icon scale="1.2" icon="cart-plus-fill" />
      Add to Cart
    </b-button>
  </div>
</template>

<script>
export default {
  name: "AddToCart",
  props: {
    addButtonTitle: {
      default: "",
      type: String,
    },
    addedButtonTitle: {
      default: "",
      type: String,
    },
    buttonType: String,
    productId: Number,
    currency: String,
    rating: Number,
    image: String,
    title: String,
    amount: Number,
    inCart: Number,
  },
  computed: {},
  data() {
    return {};
  },
  async mounted() {},
  methods: {
    async addToCart() {},
    async removeCartItem() {},
  },
};
</script>
<style lang="scss" scoped></style>
