<template>
  <div class="space-y-2 flex">
    <img
      class="rounded-sm mr-4"
      :src="userForm.img"
      width="50"
      height="50"
      :alt="userForm.name"
    />
    <button class="text-gray-400">CHANGE PHOTO</button>
  </div>
  <div class="space-y-2">
    <label for="name" class="block font-medium tracking-tight">Name</label>
    <input
      v-model.trim="userForm.name"
      id="name"
      type="text"
      class="input-group md:w-1/2 block"
      placeholder="name"
      autocomplete="off"
    />
    <span class="text-xs text-red-500">Name is required</span>
  </div>
  <div class="space-y-2">
    <label for="bio" class="block font-medium tracking-tight">Bio</label>
    <textarea
      v-model.trim="userForm.bio"
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
      v-model.trim="userForm.phone"
      id="phone"
      type="number"
      class="input-group md:w-1/2 block"
      placeholder="phone"
      autocomplete="off"
    />
    <span class="text-xs text-red-500">Phone is required</span>
  </div>
  <div class="space-y-2">
    <label for="email" class="block font-medium tracking-tight">Email</label>
    <input
      v-model.trim="userForm.email"
      id="email"
      type="email"
      class="input-group md:w-1/2 block"
      placeholder="user@gmail.com"
      autocomplete="off"
    />
    <span class="text-xs text-red-500">Email is required</span>
  </div>
  <div class="space-y-2">
    <label for="password" class="block font-medium tracking-tight"
      >Password</label
    >
    <input
      v-model.trim="userForm.password"
      id="password"
      type="password"
      class="input-group md:w-1/2 block"
      placeholder="*********"
      autocomplete="off"
    />
    <span class="text-xs text-red-500">Password is required</span>
  </div>
</template>

<script>
export default {
  props: {
    userForm: Object,
  },
  store(props) {
    const userForm = props.userForm;
    return { userForm };
  },
};
</script>
