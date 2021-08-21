<template>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-10">
        <h1
          class="
            text-2xl
            font-medium
            title-font
            mb-4
            text-gray-900
            tracking-widest
          "
        >
          TEAM - COFFEEMMERCE
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
          gentrify, subway tile poke farm-to-table. Franzen you probably haven't
          heard of them.
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div v-for="person in team" :key="person.name" class="p-4 lg:w-1/2">
          <div
            class="
              h-full
              flex
              sm:flex-row
              flex-col
              items-center
              sm:justify-start
              justify-center
              text-center
              sm:text-left
            "
          >
            <img
              alt="team"
              class="
                flex-shrink-0
                rounded-lg
                w-48
                h-48
                object-cover object-center
                sm:mb-0
                mb-4
              "
              :src="person.avatar"
            />
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">
                {{ person.name }}
              </h2>
              <h3 class="text-gray-500 mb-3">{{ person.rol }}</h3>
              <p class="mb-4">
                {{ person.bio }}
              </p>
              <span
                v-for="social in person.links"
                :key="social.name"
                class="inline-flex"
              >
                <a :href="social.url" class="mr-2">
                  <img
                    :src="social.img"
                    width="20"
                    height="20"
                    :alt="social.name"
                  />
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { ref } from "vue";
import teamHelper from "../helpers/team";
export default {
  setup() {
    const team = ref(teamHelper);

    return { team };
  },
};
</script>
