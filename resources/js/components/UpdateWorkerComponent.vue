<script setup>
import { ref, onMounted} from 'vue';
import {useRoute} from 'vue-router';
import axios from 'axios';
import router from '../router.js'

let workerId = ref('');
let wName = ref('');
let wAge = ref('');
let wProfession = ref('');
let route = useRoute();

let getResponse = async()=> {
    await axios.get(`http://localhost/laravel/lara_10/public/api/worker/${workerId}`)
        .then(res=>{
            wName.value = res.data.name;
            wAge.value = res.data.age;
            wProfession.value = res.data.profession;
        });
}

let update = async()=>{
    await axios.patch(`http://localhost/laravel/lara_10/public/api/worker/${workerId}/update`, {
        name:wName.value,
        age:wAge.value,
        profession:wProfession.value,})
        .then(res=>{
            router.push({name:'show', params:{id: workerId.value}})
        })
}

onMounted(()=>{
  workerId = route.params.id;
  getResponse();
});
</script>

<template>
    <h2>Редактирование</h2>
    <div class="w-25">
        <input type="text" v-model="wName">
    </div>
    <div class="w-25">
        <input type="text" v-model="wAge">
    </div>
    <div class="w-25">
        <input type="text" v-model="wProfession">
    </div>
    <div class="w-25">
        <input type="submit" @click.prevent="update" value="Save">
    </div>

</template>

<style scoped>

</style>
