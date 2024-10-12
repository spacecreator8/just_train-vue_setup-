<script setup>
import { ref, onMounted , computed} from 'vue';
import {useRoute} from 'vue-router';
import axios from 'axios';
import router from '../router.js'
import {useStore} from 'vuex';

let worker = ref(null);
let route = useRoute();
let store = useStore();


let haveData = computed(function(){
    return store.getters['worker'];
});

onMounted(()=>{
    store.dispatch('getResponse', route.params.id);
});
</script>

<template>
    <h2 class="m-3">Демонстрация элемента</h2>
    <div v-if="haveData" class="m-3">
        <div>{{haveData.name}}</div>
        <div>{{haveData.age}}</div>
        <div>{{haveData.profession}}</div>
    </div>
</template>

<style scoped>

</style>
