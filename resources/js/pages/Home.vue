<template>
    <h1 class="text-xl font-semibold text-center">Welcome laravel with vue</h1>
    <div class="my-2 text-center">
        <router-link
            to="/about"
            class="bg-gray-600 px-1 rounded-sm text-white m-6"
            >about</router-link
        >
        <router-link to="/" class="bg-gray-600 px-1 rounded-sm text-white m-6"
            >Home</router-link
        >
    </div>
    <Count />
</template>

<script>
import Count from "../components/Count.vue";
export default {
    name: "Home",
    components: {
        Count,
    },
};
</script>
