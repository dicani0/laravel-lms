<script lang="ts" setup>
import {CoursePagination} from "@/types/course";

defineProps<{
  courses: CoursePagination,
}>()
</script>

<template>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-2 rounded-lg">
    <!--    <div v-for="course in courses" class="p-4 shadow-lg border rounded-lg bg-black hover:scale-105 transition ease-in-out">-->
    <!--      <CourseGridElement v-for="course in courses.data" :course="course"></CourseGridElement>-->
    <!--    </div>-->
  </div>
</template>

<style scoped>

</style>