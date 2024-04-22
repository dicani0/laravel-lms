<script setup lang="ts">

import Nav from "@/Shared/Nav.vue";
</script>

<template>
  <div class="flex flex-col bg-gray-950">
    <header class="bg-black p-4 text-red-600 border-b-2 border-red-900">
      <Nav></Nav>
    </header>
    <div class="relative">
      <img src="/images/learning.jpg" alt="Banner" class="w-full h-48 object-cover object-center">
      <div class="absolute inset-0 bg-black bg-opacity-95 flex justify-center items-center">
        <h2 class="text-xl text-white font-semibold">Welcome to My LMS</h2>
      </div>
    </div>
  </div>
</template>


<style scoped>

</style>