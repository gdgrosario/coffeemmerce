import { createStore } from "vuex";
import count from "./modules/count";
import profile from "./modules/profile";

const store = new createStore({
  modules: {
    count,
    profile,
  },
});

export default store;
