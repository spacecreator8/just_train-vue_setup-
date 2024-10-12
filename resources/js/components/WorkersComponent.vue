<script setup>
import {reactive, ref, onMounted} from 'vue';
import axios from 'axios';
import {useRoute} from 'vue-router'
import { useStore } from 'vuex';

let store = useStore();
let route = useRoute();
let data = ref([]);
let child = ref(null);
let testStr = ref('');
let visibleFlag = ref(false);
let updatedWorkerId = ref(null);
let getResponse = async()=>{
    try{
        let response = await axios.get('http://localhost/laravel/lara_10/public/api/worker/index');
        // console.log(response.data);
        data.value = response.data;
    }catch(err){
        console.log('Error of api-request' + err);
        throw err;
    }
}
let handleEmit=(data)=>{
    visibleFlag.value = data.flag;
    updatedWorkerId.value = data.id;
}
function checkHandler(){
    getResponse();
}

onMounted(()=>{
    getResponse();
    // store.dispatch('printConsole', 'Это ваше сообщение в консоль')
})

</script>

<template>
    <p>Its workers component!</p>
    <div v-for="worker in data">
        <one-worker-component  :worker="worker" :getResponse="getResponse"  ref="child" @checkData="checkHandler" @sendEmit="handleEmit"></one-worker-component>
    </div>

</template>

<style scoped>

</style>
