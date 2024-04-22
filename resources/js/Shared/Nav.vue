<script setup lang="ts">

import {ref} from "vue";

const menuOpen = ref(false);
const toggleMenu = () => menuOpen.value = !menuOpen.value;

</script>

<template>
  <div class="container mx-auto">
    <!-- Header  -->
    <div class="flex flex-col lg:flex-row justify-between items-center px-4 py-2 text-white">
      <div class="flex justify-between items-center w-full lg:w-auto">
        <h1 class="text-xl font-bold">My LMS</h1>
        <button class="lg:hidden" @click="toggleMenu">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
               class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
          </svg>
        </button>
      </div>
      <!-- Nav menu -->
      <nav :class="{'hidden': !menuOpen, 'block': menuOpen, 'lg:flex': menuOpen || !menuOpen}" class="w-full lg:w-auto lg:bg-transparent">
        <ul class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-4 p-4 lg:p-0">
          <li><a href="#" class="hover:text-gray-300">Dashboard</a></li>
          <li><a href="#" class="hover:text-gray-300">Courses</a></li>
          <li><a href="#" class="hover:text-gray-300">Forums</a></li>
        </ul>
      </nav>
    </div>
  </div>
</template>

<style scoped>

</style>