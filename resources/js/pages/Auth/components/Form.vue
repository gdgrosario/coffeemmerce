<template>
  <form @submit.prevent="onSubmit(v$)" class="mt-5">
    <Inputs :userForm="v$" />
    <button
      :disabled="validateButton(v$)"
      :class="validateButton(v$) ? 'btn-red' : 'btn-blue'"
      class="btn"
      type="submit"
    >
      {{ text }}
    </button>
  </form>
</template>

<script>
import Inputs from "./Inputs";
import { computed, inject, onMounted } from "vue";
import { useForm } from "../../../hooks/useForm";
import { useStore } from "vuex";

export default {
  components: { Inputs },

  setup() {
    const path = inject("path");
    const text = computed(() => (path === "/login" ? "Sign in" : "Sign up"));

    const { state, dispatch } = useStore();

    onMounted(() => {
      dispatch("auth/reset");
    });

    const authForm = computed(() => {
      return state.auth.auth;
    });

    const v$ = useForm(authForm);

    const validateButtonRegister = (v$) => {
      if (
        v$.password.$invalid ||
        v$.name.$invalid ||
        v$.phone.$invalid ||
        v$.email.$invalid ||
        !v$.check.$model
      )
        return true;
      return false;
    };

    const validateButtonLogin = (v$) => {
      if (v$.password.$invalid || v$.email.$invalid) return true;
      return false;
    };

    const validateButton = computed(() =>
      path === "/login" ? validateButtonLogin : validateButtonRegister
    );

    const onSubmitRegister = (v$) => {
      if (
        v$.password.$invalid ||
        v$.name.$invalid ||
        v$.phone.$invalid ||
        v$.email.$invalid ||
        v$.check.$invalid
      )
        return;

      const data = {
        name: v$.name.$model,
        phone: v$.phone.$model,
        email: v$.email.$model,
        password: v$.password.$model,
        check: v$.check.$model,
      };
      console.log(data);
    };
    const onSubmitLogin = (v$) => {
      if (v$.password.$invalid || v$.email.$invalid) return;

      const data = {
        email: v$.email.$model,
        password: v$.password.$model,
      };
      console.log(data);
    };

    const onSubmit = computed(() =>
      path === "/login" ? onSubmitLogin : onSubmitRegister
    );

    return { text, v$, validateButton, onSubmit };
  },
};
</script>
