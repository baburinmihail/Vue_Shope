<script setup>
  //import MyHello from './components/MyHello.vue'
  //import CardTest from './components/CardTest.vue'
  import Header from './components/Header.vue'
  import Card from './components/Card.vue'
  import CardList from './components/CardList.vue';
</script>

<template>
  <div class="bg-white w-4/5 m-auto rounded-xl shadow-xl mt-14">
    <Header />
    <div class="p-10">
      <h2 class="text-3xl font-bold mb-8">Все кроссовки</h2>
      <h2 class="text-3xl font-bold mb-8">Отсановился на 2:14(корзина) https://youtu.be/U_-Ht_v-oAs</h2>
      <CardList />
    </div>
  </div>
</template>

