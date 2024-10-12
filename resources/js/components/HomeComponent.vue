<script setup>
    import {reactive, ref} from 'vue';
    import {useRoute} from 'vue-router'
    import axios from 'axios';
    import router from '../router.js';

    let route = useRoute();
    let data = ref('СУПЕР КОНТЕНТ!')

    let getResponse = async ()=>{
        await axios.get('http://localhost/laravel/lara_10/public/api/index')
            .then(function(res) {
                router.push({name:'test'});
            });
    }
</script>

<template>
    <h2>HomeComponent</h2>
    <div>//TO DO расположить всякий контент</div>
    <div>{{data}}</div>
    <a href="#" @click.prevent="getResponse" class="btn btn-success">Тест редиректа</a>
</template>

<style scoped>

</style>
