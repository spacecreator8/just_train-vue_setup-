import { createStore } from 'vuex';

const store = createStore({
    state: {
        // Здесь определите свои состояния
        user: null,
        products: [],
        loading: false,
        data: 'aaxaxaxaxaxaxaax',
    },
    mutations: {
        // Определите мутации для изменения состояния
        setUser(state, user) {
            state.user = user;
        },
        setProducts(state, products) {
            state.products = products;
        },
        setLoading(state, loading) {
            state.loading = loading;
        },
        printConsole(state){
            console.log(state.data);
        },
    },
    actions: {

        // Определите действия для выполнения асинхронных операций
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
    },
    getters: {
        // Определите геттеры для получения состояния
        isLoading: (state) => state.loading,
        getUser: (state) => state.user,
        getProducts: (state) => state.products,
    },
});

export default store;
