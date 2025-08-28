<script setup>
  //хук для onMounted
  import { onMounted } from 'vue';
  //для запроса к бэку
  import axios from 'axios';
  //import MyHello from './components/MyHello.vue'
  //import CardTest from './components/CardTest.vue'
  import Header from './components/Header.vue'
  import Card from './components/Card.vue'
  import CardList from './components/CardList.vue';
  import Drawer from './components/Drawer.vue';
  import { ref } from 'vue';

  const sortBy = ref('');
  const searchQuery = ref('');
  //onMounted(()=>{
    //альтернатива , но он хуже
    //fetch('http://127.0.0.1:8000/api/sneker')
    //  .then((res) => res.json())
    //  .then((data) => {
    //    console.log(data)
    //  })

    //работает
    //axios.get('http://127.0.0.1:8000/api/sneker').then(resp => console.log(resp.data))
  //})

  const items = ref([]);

  onMounted(async () => {
    try {
      const {data} = await axios.get('http://127.0.0.1:8000/api/sneker');

      items.value = data;
    } catch(err){
      console.log(err);
    }
  })

  //отслеживаю состояние на странице
  watch(sortBy, async () => {

  });

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

      <h2 class="text-3xl font-bold mb-8">Отсановился на 3:27(необходимо сделать API запрос на сортировку кросовок вниз, верх , и поик) https://youtu.be/U_-Ht_v-oAs</h2>
      <div class="mt-10">
        <CardList :items="items"/>
      </div>
    </div>
  </div>
</template>

