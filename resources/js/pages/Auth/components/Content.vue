<template>
  <div
    class="
      animate__animated animate__backInUp
      xm:container xm:my-10
      md:mt-0 md:w-3/5
      mx-auto
    "
  >
    <h1 class="text-3xl mb-2 font-bold text-gray-900">
      {{ text }}
      <router-link class="xm:underline md:no-underline" to="/"
        >Coffeemmerce</router-link
      >
    </h1>

    <span class="flex items-center h-5 text-gray-400">
      <hr class="w-6/12 mr-3 border-gray-300" />
      Or
      <hr class="w-6/12 ml-3 border-gray-300" />
    </span>

    <Form />
  </div>
</template>

<script>
import Form from "./Form";
import { computed, inject } from "vue";

export default {
  components: { Form },
  setup() {
    const path = inject("path");

    const text = computed(() =>
      path === "/login" ? "Sign in to" : "Sign up to"
    );

    return { text };
  },
};
</script>
