<template>
  <section class="container mx-auto mt-5">
    <div class="xs:w-full md:w-5/6 mx-auto md:pb-5">
      <router-link to="/profile" class="flex text-blue-400"
        ><ArrowLeftIcon class="w-5 mr-2" /> Back</router-link
      >
    </div>
    <article class="md:border-2 xs:w-full md:w-5/6 mx-auto mb-10 rounded-sm">
      <Subtitle />
      <FormEditUser />
    </article>
  </section>
</template>

<script>
import { ArrowLeftIcon } from "@heroicons/vue/outline";
import Subtitle from "../components/Subtitle.vue";
import FormEditUser from "../components/form/FormEditUser.vue";

export default {
  components: {
    Subtitle,
    ArrowLeftIcon,
    FormEditUser,
  },
};
</script>
