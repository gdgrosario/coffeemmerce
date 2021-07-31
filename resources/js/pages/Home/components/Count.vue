<template>
    <div class="text-center">
        <h3>{{ count.item }}</h3>
        <button
            class="bg-gray-600 px-1 rounded-sm text-white text-center m-6"
            @click="increment"
        >
            Aumentar
        </button>
    </div>
</template>

<script>
import { mapState, mapActions } from "vuex";
export default {
    name: "Home",
    computed: {
        ...mapState(["count"]),
    },
    methods: {
        ...mapActions(["increment"]),
    },
};
</script>

<style></style>
