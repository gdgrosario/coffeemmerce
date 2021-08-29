<template>
  <NavItem />
  <Navbar />
  <Hero />
  <Footer />
</template>

<script>
import NavItem from "../../layouts/components/NavItem.vue";
import Navbar from "../../layouts/components/Navbar.vue";
import Hero from "../Home/components/Hero.vue";
import Footer from "../../layouts/Footer.vue";
export default {
  name: "Home",
  components: {
    NavItem,
    Navbar,
    Hero,
    Footer,
  },
};
</script>
