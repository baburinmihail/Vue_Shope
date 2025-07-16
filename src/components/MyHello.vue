//composithion api
<script setup>
    //alert('hello')
    import {ref} from 'vue'

    let count = ref(0);

    function increment(){
        count.value++;
    }

    function updateCount(event){
        console.log(count.value);
        count.value = Number(event.target.value);
    }
</script>

//options api
<script >
    //alert('hello2')
    /*
    export default {
       data(){
            return{
                count: 0
            }
        },
        methods: {
            increment(){
                this.count++
            }
        }
    }
    */
</script>

<template>
    <h1>{{ count }}</h1>

    <input v-on:input="updateCount" type="number">

    <input @input="updateCount" type="number">
    //как выше но короче
    <input v-model="count" type="number">

    //комбиная клавишь
    <input @keyup.enter.ctrl="increment">

    <button @click="increment()">+</button>
    
</template>

//локальный стиль
<style scoped>
    body{
        background: rgb(0, 255, 234);
    }
</style>

//глобальный
<style >
    body{
        background: rgb(0, 255, 234);
    }
</style>