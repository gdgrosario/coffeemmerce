<template>
<NavItem/>
<Navbar/>
<Hero/>
<Footer/>
</template>

<script>
import NavItem from '../Home/components/NavItem.vue'
import Navbar from '../Home/components/Navbar.vue'
import Hero from '../Home/components/Hero.vue'
import Footer from '../Home/components/Footer.vue'
export default {
    name: "Home",
    components: {
        NavItem,Navbar,Hero,Footer
    },
};
</script>
