import { createApp } from "vue";
import router from "./router/index.js";
import store from "./store/index.js";
import App from "./App.vue";
import VueSplide from "@splidejs/vue-splide";
import "animate.css";
import "@splidejs/splide/dist/css/themes/splide-default.min.css";

const app = createApp(App);
app.use(VueSplide);

app.use(router);
app.use(store);
app.mount("#app");
