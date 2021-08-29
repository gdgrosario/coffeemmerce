<template>
  <section v-if="path === '/sign-up'" class="flex w-full gap-3">
    <div class="w-1/2 mb-5">
      <label class="font-bold border-gray-900" for="name">Name</label>
      <input
        v-model.trim="v$.name.$model"
        class="input"
        id="name"
        type="text"
        autocomplete="off"
      />
      <span
        v-for="error of v$.name.$errors"
        :key="error.$uid"
        class="text-xs text-red-500"
        >{{ error.$message }}</span
      >
    </div>
    <div class="w-1/2 mb-5">
      <label class="font-bold border-gray-900" for="username">Phone</label>
      <input
        v-model.trim="v$.phone.$model"
        class="input"
        id="username"
        type="number"
        autocomplete="off"
      />
      <span
        v-for="error of v$.phone.$errors"
        :key="error.$uid"
        class="text-xs text-red-500"
        >{{ error.$message }}</span
      >
    </div>
  </section>
  <div class="mb-5">
    <label class="font-bold border-gray-900" for="email">Email Address</label>
    <input
      v-model.trim="v$.email.$model"
      class="input"
      id="email"
      type="email"
      autocomplete="off"
    />
    <span
      v-for="error of v$.email.$errors"
      :key="error.$uid"
      class="text-xs text-red-500"
      >{{ error.$message }}</span
    >
  </div>
  <div class="mb-5">
    <label class="font-bold border-gray-900" for="password">Password</label>
    <input
      class="input"
      v-model.trim="v$.password.$model"
      id="password"
      type="password"
      placeholder="6+ characters"
    />
    <span
      v-for="error of v$.password.$errors"
      :key="error.$uid"
      class="text-xs text-red-500"
      >{{ error.$message }}</span
    >
  </div>
  <div v-if="path === '/sign-up'" class="mb-4">
    <input
      v-model="v$.check.$model"
      type="checkbox"
      id="check"
      class="mr-2 w-4 h-4 cursor-pointer"
    />
    <label for="check" class="font-light text-gray-600 text-sm cursor-pointer"
      >Creating an account means you’re okay with our Terms of Service, Privacy
      Policy</label
    >
  </div>
</template>

<script>
import { inject } from "vue";

export default {
  props: {
    userForm: {
      type: Object,
    },
  },
  setup(props) {
    const path = inject("path");
    const v$ = props.userForm;
    return { path, v$ };
  },
};
</script>

<style>
input:hover {
  box-shadow: 0 0 0 4px rgba(219, 230, 255, 1);
}
</style>
