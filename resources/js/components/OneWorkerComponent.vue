<script setup>
import {defineProps, ref, defineExpose, defineEmits} from 'vue';
import {useRoute} from 'vue-router'


let route = useRoute();
let props = defineProps({
    worker:{
        type: Object,
        required: true,
    },
    getResponse:{
        type: Function,
        required: true,
    }
})


let updateFlag = ref(false);
let testString = ref('testing string');
let updateData = () =>{
    updateFlag.value = !updateFlag.value;
    console.log(updateFlag.value);
    tryEmmit();
}
defineExpose({
    updateFlag,
    testString: testString,
})
let delWorker = async(id) =>{
    await axios.delete(`http://localhost/laravel/lara_10/public/api/worker/${id}/delete`);
    checkDataEmit();
}

let emit = defineEmits();
const tryEmmit = () =>{
    updateFlag.value = !updateFlag.value;
    getResponse();
    emit('sendEmit', {
        flag: updateFlag.value,
        id: props.worker.id}
    );
}
const checkDataEmit = () =>{
    emit('checkData');
}
</script>

<template>
    <div><b>Name:</b> {{worker.name}}&nbsp&nbsp&nbsp
        <b>Age:</b> {{worker.age}}&nbsp&nbsp&nbsp
        <b>Profession:</b> {{worker.profession}}
        <router-link :to="{ name: 'update', params: {id: worker.id} }">Edit</router-link>&nbsp;&nbsp;&nbsp;
        <a href="#" @click.prevent="delWorker(worker.id)" class=" btn btn-outline-danger">Delete</a>
    </div>
</template>

<style scoped>

</style>
