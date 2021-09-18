<template>
<div class="container mx-auto px-20">
<h2 class="text-center font-bold mt-16 text-3xl text-yellow-600	">Coffemmerce</h2>
<div class="flex mt-5 mb-5">
  <div class="flex-1  text-center">
      <span>Home</span>
  </div>
  <div class="flex-1  text-center">
      <span>Tienda</span>
  </div>
  <div class="flex-1 text-center ">
      <router-link to="/acerca" >Acerca</router-link>
  </div>
    <div class="flex-1 text-center ">
        <router-link to="/nosotros" >Nosotros</router-link>
  </div>
</div>
</div>

</template>

<script>
export default {
components:{
}
}
</script>

<style>
body{
      background: #F2DBD2;

}
</style>