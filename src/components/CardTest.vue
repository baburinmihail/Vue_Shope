//composithion api
<script setup>
    const props = defineProps({
        title: String,
        price: Number,
        isAdded: Boolean
    });

    console.log(props)
</script>

<template>
    <div class="product">
        <h2>Товар: {{ title }}</h2>
        <h3>Цена: {{ price }}</h3>
        <h3>Добавлен:{{ isAdded }}</h3>

        <slot></slot>

    </div>
</template>

//локальный стиль
<style scoped>
    .product{
        border: 1px solid blue;
        padding: 10px;
        margin-bottom: 10px;
    }
</style>
