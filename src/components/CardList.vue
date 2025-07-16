<script setup>
  import Card from './Card.vue'

  const onClickAdd = () => {
    alert('добавить!')
  }
</script>

<template>
    <div class="grid grid-cols-4 gap-5">
        <Card 
            :price="12900" 
            title="Мужские кросовки" 
            imageUrl="/sneakers/sneakers-1.jpg"
            :isAdded="false"
            :isFavorite="true"
            :onClickAdd="onClickAdd"
        />

    </div>
</template>