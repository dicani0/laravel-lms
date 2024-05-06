<script setup lang="ts">
import {Course} from "@/types/course";

defineProps<{
  course: Course,
}>()

</script>

<template>
  <div class="flex flex-col lg:flex-row p-4 shadow-lg border rounded-lg bg-black hover:scale-105 transition ease-in-out">
    <div class="w-2/3">
    <h1 class="font-bold mb-2">{{ course.name }}</h1>
    <p>{{ course.description }}</p>
    </div>
    <div class="w-full lg:w-1/2">
      <img src="https://via.placeholder.com/150" class="w-full" alt="Course Image">
    </div>
  </div>
</template>

<style scoped>

</style>