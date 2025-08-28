<script setup>
  import Card from './Card.vue'

  defineProps({
    items: Array
  })
  
  const onClickAdd = () => {
    alert('добавить!')
  }
</script>

<template>
    <div class="grid grid-cols-4 gap-5">
        <Card 
            v-for="item in items"
            :key="item.id" 
            :title="item.title"
            :imageUrl="item.image"
            :price="item.price"
            :isAdded="false"
            :isFavorite="true"
            :onClickAdd="onClickAdd"
        />
    </div>
</template>