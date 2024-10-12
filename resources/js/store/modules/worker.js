const state = {
    user: null,
    products: [],
    loading: false,
    data: 'asd',
};

const mutations = {
    setUser(state, user) {
        state.user = user;
    },
    setProducts(state, products) {
        state.products = products;
    },
    setLoading(state, loading) {
        state.loading = loading;
    },

};

const actions = {
    async fetchProducts({ commit }) {
        commit('setLoading', true);
        try {
            const response = await fetch('/api/products'); // ваш API-эндпоинт
            const data = await response.json();
            commit('setProducts', data);
        } finally {
            commit('setLoading', false);
        }
    },
    printConsole({ commit }, message) {
        console.log(message);
    },
};

const getters = {
    isLoading: (state) => state.loading,
    getUser: (state) => state.user,
    getProducts: (state) => state.products,
};

export default {
    state,
    mutations,
    actions,
    getters,
};
