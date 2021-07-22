<template>
  <section class="container mx-auto mt-5 grid-template">
    <CardUser class="user" />
    <CardFavorites class="favorites" />
    <CardProducts class="products" />
  </section>
</template>

<script>
import CardFavorites from "./components/CardFavorites.vue";
import CardProducts from "./components/CardProducts.vue";
import CardUser from "./components/CardUser";

export default {
  components: {
    CardUser,
    CardFavorites,
    CardProducts,
  },
};
</script>

<style scoped>
.grid-template {
  display: grid;
  justify-content: center;
  gap: 70px;
  grid-template-columns: repeat(2, minmax(100px, 320px));
  grid-template-rows: repeat(2, 1fr);
  grid-template-areas:
    "user favorites"
    "user products";
}
.user {
  grid-area: user;
}
.favorites {
  grid-area: favorites;
}
.products {
  grid-area: products;
}

@media screen and (max-width: 768px) {
  .grid-template {
    gap: 20px;
  }
}

@media screen and (max-width: 639px) {
  .grid-template {
    grid-template-columns: repeat(1, minmax(100%, auto));
    grid-template-rows: repeat(3, 1fr);
    grid-template-areas:
      "user user"
      "favorites favorites"
      "products products";
  }
}
</style>
