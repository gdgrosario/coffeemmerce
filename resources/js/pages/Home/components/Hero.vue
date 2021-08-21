<template>
  <div>
      <splide :options="options">
  <splide-slide>
    <img class="ml-120"   src="../../../assets/cafeExtremo.png">
    <span class="absolute top-44 left-28 font-bold text-5xl text-white ">Café extremo</span>
    <p class="absolute top-56 left-28  w-3/6 text-sm mt-1 text-white ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsam, vero quibusdam sed harum.</p>
    <span class="absolute top-56 left-28 text-sm mt-14 p-4 bg-yellow-800 text-white rounded-full">Quiero probar!</span>
  </splide-slide>
  <splide-slide>
    <img class="ml-120  " src="../../../assets/capuccino.png">
    <span class="absolute top-44 left-28 font-bold text-5xl text-white ">Café familiar </span>
    <p class="absolute top-56 left-28  w-3/6 text-sm mt-1 text-white ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsam, vero quibusdam sed harum.</p>
    <span class="absolute top-56 left-28 text-sm mt-14 p-4 bg-yellow-800 text-white rounded-full">Quiero probar!</span>
  </splide-slide>
  <splide-slide>
    <img class="ml-120" src="../../../assets/cacao.png">
     <span class="absolute top-44 left-28 font-bold text-5xl text-white ">Cacao 100% Colombiano </span>
    <p class="absolute top-56 left-28  w-3/6 text-sm mt-1 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsam, vero quibusdam sed harum.</p>
    <span class="absolute top-56 left-28 text-sm mt-14 p-4 bg-yellow-800 text-white rounded-full">Quiero probar!</span>
  </splide-slide>
</splide>
  </div>
</template>

<script>
export default {
    name:'Hero',
     data() {
      return {
        options: {
          rewind : true,
          gap  : '1rem',
          autoplay: true,
          perpage:1,
        },
      };
     }
}
</script>

<style>
.splide.splide--slide.splide--ltr.splide--draggable.is-active{
background:linear-gradient( #EE9E24, #724500);

}
</style>