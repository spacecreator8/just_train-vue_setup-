<script setup>
import {useRoute} from "vue-router";
import axios from 'axios';
import {ref} from 'vue'
import router from '../router.js'

let route = useRoute();
let wName =ref('');
let wAge =ref('');
let wProfession =ref('');

let sendData = async () =>{
    await axios.post(`http://localhost/laravel/lara_10/public/api/worker/store`,
        {name: wName.value,
        age: wAge.value,
        profession: wProfession.value})
        .then(res=>{
            router.push({name:'all'});
        });
}
</script>

<template>
    <div class="w-25">
        <input type="text" v-model="wName" class="form-control m-3" placeholder="Name">
        <input type="text" v-model="wAge" class="form-control m-3" placeholder="Age">
        <input type="text" v-model="wProfession" class="form-control m-3" placeholder="Profession">
        <input type="submit" @click.prevent="sendData" class="btn btn-success m-3" value="Create">
    </div>
</template>

<style scoped>

</style>
