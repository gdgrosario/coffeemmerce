<template>
  <form class="space-y-3 w-full xs:px-2 md:px-10 py-5">
    <InputsEditUser :userForm="userForm" />
    <button type="submit" class="btn btn-black">Save Changes</button>
  </form>
</template>

<script>
import { computed } from "vue";
import { useStore } from "vuex";
import InputsEditUser from "./InputsEditUser.vue";
export default {
  components: { InputsEditUser },
  setup() {
    const userForm = computed(() => {
      return useStore().state.profile.user;
    });

    return { userForm };
  },
};
</script>
