<template>
  <div class="space-y-2 flex">
    <img
      class="rounded-sm mr-4"
      :src="img"
      width="50"
      height="50"
      :alt="v$.name.$model"
    />
    <button class="text-gray-400">CHANGE PHOTO</button>
  </div>
  <div class="space-y-2">
    <label for="name" class="block font-medium tracking-tight">Name</label>
    <input
      v-model.trim="v$.name.$model"
      id="name"
      type="text"
      class="input-group md:w-1/2 block"
      placeholder="name"
      autocomplete="off"
    />
    <span
      v-for="error of v$.name.$errors"
      :key="error.$uid"
      class="text-xs text-red-500"
      >{{ error.$message }}</span
    >
  </div>
  <div class="space-y-2">
    <label for="bio" class="block font-medium tracking-tight">Bio</label>
    <textarea
      v-model.trim="v$.bio.$model"
      id="bio"
      maxlength="100"
      class="input-group md:w-1/2 block"
      placeholder="biography"
      autocomplete="off"
      cols="30"
      rows="5"
    ></textarea>
  </div>
  <div class="space-y-2">
    <label for="phone" class="block font-medium tracking-tight">Phone</label>
    <input
      v-model.trim="v$.phone.$model"
      id="phone"
      type="number"
      class="input-group md:w-1/2 block"
      placeholder="phone"
      autocomplete="off"
    />
    <span
      v-for="error of v$.phone.$errors"
      :key="error.$uid"
      class="text-xs text-red-500"
      >{{ error.$message }}</span
    >
  </div>
  <div class="space-y-2">
    <label for="email" class="block font-medium tracking-tight">Email</label>
    <input
      v-model.trim="v$.email.$model"
      id="email"
      type="email"
      class="input-group md:w-1/2 block"
      placeholder="user@gmail.com"
      autocomplete="off"
    />
    <span
      v-for="error of v$.email.$errors"
      :key="error.$uid"
      class="text-xs text-red-500"
      >{{ error.$message }}</span
    >
  </div>
  <div class="space-y-2">
    <label for="password" class="block font-medium tracking-tight"
      >Password</label
    >
    <input
      v-model.trim="v$.password.$model"
      id="password"
      type="password"
      class="input-group md:w-1/2 block"
      placeholder="*********"
      autocomplete="off"
    />
    <span
      v-for="error of v$.password.$errors"
      :key="error.$uid"
      class="text-xs text-red-500"
      >{{ error.$message }}</span
    >
  </div>
</template>

<script>
export default {
  props: {
    userForm: Object,
    img: {
      type: String,
      default: "https://via.placeholder.com/50x50",
    },
  },
  setup(props) {
    const v$ = props.userForm;
    const img = props.img;

    return { v$, img };
  },
};
</script>
