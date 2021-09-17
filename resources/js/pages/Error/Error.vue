<template>
  <section class="h-screen flex justify-between items-center">
    <div class="ml-20">
      <h1 class="text-center text-gray-700 text-8xl">404</h1>
      <h2 class="text-3xl my-5">I have bad news for you</h2>
      <p class="my-3">
        The page you are looking for might be removed or temporarily
        unavailable.
      </p>
      <router-link to="/" class="btn btn-blue">Back Home</router-link>
    </div>
    <div class="h-full">
      <img src="../../assets/404.svg" class="w-full h-full" alt="404" />
    </div>
  </section>
</template>

<script>
export default {};
</script>
