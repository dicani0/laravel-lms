<script setup lang="ts">
import Header from "@/Shared/Header.vue";
import Footer from "@/Shared/Footer.vue";
</script>

<template>
  <div class="flex flex-col min-h-screen bg-neutral-950 text-white">
    <Header></Header>
    <main class="flex-1 overflow-y-auto p-4 lg:p-8 max-w-7xl min-w-80 mx-auto">
      <slot></slot>
    </main>
    <Footer></Footer>
  </div>
</template>

<style scoped>
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
}

</style>