<template>
  <Navitem/>
  <Navbar/>
    <Products/>
</template>

<script>
import Navbar from '../../Home/components/Navbar.vue'
import Navitem from '../../Home/components/Navitem.vue'
import Products from '../components/Products.vue'
export default {
components:{
    Navbar,Navitem,Products
}
}
</script>

<style>

</style>