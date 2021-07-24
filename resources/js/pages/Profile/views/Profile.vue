<template>
  <section class="container mx-auto mt-5">
    <Title />
    <article class="md:border-2 xs:w-full md:w-5/6 mx-auto mb-10 rounded-sm">
      <Subtitle />
      <div>
        <DataUser />
      </div>
    </article>
  </section>
</template>

<script>
import Title from "../components/Title.vue";
import Subtitle from "../components/Subtitle.vue";
import DataUser from "../components/DataUser.vue";

export default {
  components: {
    Title,
    Subtitle,
    DataUser,
  },
};
</script>
