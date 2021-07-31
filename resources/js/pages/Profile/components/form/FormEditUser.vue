<template>
  <form class="space-y-3 w-full xs:px-2 md:px-10 py-5">
    <InputsEditUser :userForm="v$" :img="userForm.img" />
    <button
      :disabled="validateButton(v$)"
      :class="validateButton(v$) ? 'btn-red' : 'btn-black'"
      type="submit"
      class="btn"
    >
      Save Changes
    </button>
  </form>
</template>

<script>
import { computed } from "vue";
import { useStore } from "vuex";
import { useForm } from "../../hooks/useForm";
import InputsEditUser from "./InputsEditUser.vue";

export default {
  components: { InputsEditUser },
  setup() {
    const userForm = computed(() => {
      return useStore().state.profile.user;
    });

    const v$ = useForm(userForm);

    const validateButton = (v$) => {
      if (
        v$.password.$invalid ||
        v$.name.$invalid ||
        v$.phone.$invalid ||
        v$.email.$invalid
      )
        return true;
      return false;
    };

    return { v$, userForm, validateButton };
  },
};
</script>
