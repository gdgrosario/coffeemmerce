import { createStore } from "vuex";

const store = new createStore({
    state: {
        count: 0,
    },
    mutations: {
        increment(state, payload) {
            state.count += payload;
        },
    },
    actions: {
        increment({ commit }) {
            commit("increment", 1);
        },
    },
});

export default store;
