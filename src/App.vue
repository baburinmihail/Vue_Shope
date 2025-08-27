<script setup>
  //import MyHello from './components/MyHello.vue'
  //import CardTest from './components/CardTest.vue'
  import Header from './components/Header.vue'
  import Card from './components/Card.vue'
  import CardList from './components/CardList.vue';
  import Drawer from './components/Drawer.vue';
</script>

<template>
  <!--<Drawer />  корзина-->
  <div class="bg-white w-4/5 m-auto rounded-xl shadow-xl mt-14">
    <Header />
    <div class="p-10">
      <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold mb-8">Все кроссовки</h2>

        <div class=" flex gap-4">
          <select class="py-2 px-3 border rounded-md outline-none">
            <option>По названию</option>
            <option>По цене ↓</option>
            <option>По цене ↑</option>
          </select>

          <div class="relative">
              <img class="absolute left-4 top-3"  src="/search.svg" />
              <input class="border border-gray-400 rounded-md py-2 pl-10 pr-4 outline-none focus:border-gray-600" type="text" placeholder="Поиск..."/>          
          </div>
        </div>
      </div>

      <h2 class="text-3xl font-bold mb-8">Отсановился на 3:02(необходимо сделать API для кросовок id,title,price,image) https://youtu.be/U_-Ht_v-oAs</h2>
      <CardList />
    </div>
  </div>
</template>

