export default {
  namespaced: true,

  state: {
    auth: {
      name: "",
      phone: "",
      email: "",
      password: "",
      check: false,
    },
  },
  mutations: {
    reset(state, payload) {
      state.auth = payload;
    },
  },
  actions: {
    reset({ commit }) {
      commit("reset", {
        name: "",
        phone: "",
        email: "",
        password: "",
        check: false,
      });
    },
  },
};
