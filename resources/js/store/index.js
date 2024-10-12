import { createStore } from 'vuex'; // Используйте createStore из vuex
import worker from './modules/actual-worker.js';

const store = createStore({
    modules: {
        worker,
    },
});

export default store;
