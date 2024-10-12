import axios from "axios";

const state = {
    worker: null,
}
const getters = {
    worker: (state) => {
        console.log(11111);
        return state.worker;
    }
}
const actions = {
    getResponse : async({commit}, id)=> {
        await axios.get(`http://localhost/laravel/lara_10/public/api/worker/${id}`)
            .then(res=>{
                commit('setWorker', res.data);
            });
    }
}
const mutations = {
    setWorker(state, worker){
        state.worker = worker;
    }
}

export default {
    state,
    getters,
    actions,
    mutations,
}
