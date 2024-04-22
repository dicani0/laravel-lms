<script setup lang="ts">

import Header from "@/Shared/Header.vue";
import Footer from "@/Shared/Footer.vue";
</script>

<template>
  <div class="flex flex-col min-h-screen">
    <Header></Header>
    <main class="flex-1 overflow-y-auto bg-neutral-950">
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
}

body {
  display: flex;
  flex-direction: column;
}
</style>