<template>
    <h1 class="text-xl font-semibold text-center">Welcome laravel with vue</h1>

    <Count />
</template>

<script>
import Count from "./components/Count.vue";
export default {
    name: "Home",
    components: {
        Count,
    },
};
</script>
