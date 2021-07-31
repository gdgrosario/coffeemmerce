<template>
  <div class="flex w-full xs:px-2 md:px-10 py-5 items-center">
    <h4 class="w-2/6 text-gray-400">Profile</h4>
    <div class="w-4/6">
      <img
        class="rounded-sm"
        width="100"
        height="100"
        :src="user.img"
        :alt="user.name"
      />
    </div>
  </div>
  <hr />
  <div class="flex w-full xs:px-2 md:px-10 py-5 items-center">
    <h4 class="w-2/6 text-gray-400">Name</h4>
    <div class="w-4/6 text-gray-700">
      <p>{{ user.name }}</p>
    </div>
  </div>
  <hr />
  <div class="flex w-full xs:px-2 md:px-10 py-5 items-center">
    <h4 class="w-2/6 text-gray-400">Bio</h4>
    <div class="w-4/6 text-gray-700">
      <p>{{ user.bio }}</p>
    </div>
  </div>
  <hr />
  <div class="flex w-full xs:px-2 md:px-10 py-5 items-center">
    <h4 class="w-2/6 text-gray-400">Phone</h4>
    <div class="w-4/6 text-gray-700">
      <p>{{ user.phone }}</p>
    </div>
  </div>
  <hr />
  <div class="flex w-full xs:px-2 md:px-10 py-5 items-center">
    <h4 class="w-2/6 text-gray-400">Email</h4>
    <div class="w-4/6 text-gray-700">
      <p>{{ user.email }}</p>
    </div>
  </div>
  <hr />
  <div class="flex w-full xs:px-2 md:px-10 py-5 items-center">
    <h4 class="w-2/6 text-gray-400">Password</h4>
    <div class="w-4/6 text-gray-700 flex">
      <p class="mr-4">
        {{ !visibility ? hidePassword(user.password) : user.password }}
      </p>
      <button @click="visibility = !visibility">
        <EyeIcon class="w-5 pb-2" v-if="!visibility" />
        <EyeOffIcon class="w-5 pb-2" v-else />
      </button>
    </div>
  </div>
</template>

<script>
import { EyeIcon, EyeOffIcon } from "@heroicons/vue/outline";
import { useStore } from "vuex";
import { computed, ref } from "vue";

export default {
  components: {
    EyeIcon,
    EyeOffIcon,
  },
  setup() {
    const user = computed(() => {
      return useStore().state.profile.user;
    });

    const visibility = ref(false);

    const hidePassword = (pass) => {
      let str = "";
      pass.split("").forEach((el) => (str += "*"));
      return str;
    };

    return { hidePassword, user, visibility };
  },
};
</script>
