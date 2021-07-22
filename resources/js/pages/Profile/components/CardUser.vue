<template>
  <article class="max-w-sm rounded overflow-hidden shadow-lg">
    <img
      class="w-full"
      :src="user.img"
      alt="Mountain"
      width="320"
      height="320"
    />
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">My Profile</div>
      <p class="text-gray-700 text-base py-2">{{ user.name }}.</p>
      <hr />
      <p class="text-gray-700 text-base py-2">{{ user.email }}</p>
      <hr />
    </div>
    <div class="px-6 pt-4 pb-2">
      <router-link to="/" class="btn btn-black">Edit profile</router-link>
    </div>
  </article>
</template>

<script>
import { ref } from "vue";
export default {
  setup() {
    const user = ref({
      img: "https://i.pinimg.com/originals/73/16/f5/7316f550de9ca0045e3d8d98a5bb5e44.png",
      name: "Bryan Adams",
      email: "bryan@gmail.com",
    });

    return { user };
  },
};
</script>
