import { createStore } from "vuex";
import count from "./modules/count";
import profile from "./modules/profile";
import auth from "./modules/auth";

const store = new createStore({
  modules: {
    count,
    profile,
    auth,
  },
});

export default store;
