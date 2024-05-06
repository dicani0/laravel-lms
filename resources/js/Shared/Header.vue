<script setup lang="ts">

import Nav from "@/Shared/Nav.vue";
</script>

<template>
  <div id="header" class="flex flex-col bg-gray-950">
    <header class="bg-black p-4 text-red-600 border-b-2 border-red-900">
      <Nav></Nav>
    </header>
    <!-- Image Container -->
<!--    <div class="relative w-full h-48">-->
<!--      <div class="w-full h-full bg-cover bg-center" style="background-image: url('/images/learning.jpg');">-->
<!--        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">-->
<!--          <h2 class="text-xl text-white font-semibold">Your Motivational Text Here</h2>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
  </div>
</template>


<style scoped>
#header {
  position: sticky;
  top: 0;
}
</style>