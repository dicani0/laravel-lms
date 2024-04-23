<template>
  <BaseLayout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
      <!-- My Courses Section -->
      <div class="col-span-1">
        <h2 class="text-2xl font-bold mb-2">My Courses</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid aspernatur, aut culpa deserunt
          distinctio dolores fuga fugit maiores nihil nobis nostrum officia sapiente sint, sit sunt veniam
          voluptatem?</p>
      </div>

      <!-- Progress Section -->
      <div class="col-span-1">
        <h2 class="text-2xl font-bold mb-2">Progress</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolore eos iure modi molestiae
          quibusdam quisquam quod sit ut veritatis! Atque commodi error est eum illo nobis, perspiciatis voluptates
          voluptatum!</p>
      </div>

      <!-- Recommendations Section -->
      <div class="col-span-1 md:col-span-2 lg:col-span-1">
        <h2 class="text-2xl font-bold mb-2">Recommended for You</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam blanditiis consequuntur culpa dignissimos
        dolore ea error facere fugiat ipsum magnam, maxime minus porro qui quibusdam repellat repellendus totam
        voluptatem voluptatum!
      </div>

      <!-- Announcements Section -->
      <div class="col-span-1 md:col-span-2 lg:col-span-2">
        <h2 class="text-2xl font-bold mb-2">Announcements</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet dolor dolorum enim et explicabo
          laboriosam mollitia nisi non officia praesentium quae quaerat quas sequi tenetur, voluptas voluptatem?
          Obcaecati, voluptatum.</p>
      </div>
    </div>

    <CourseGrid :courses="courses"></CourseGrid>
  </BaseLayout>
</template>

<script setup lang="ts">
import BaseLayout from "@/Layouts/BaseLayout.vue";
import CourseGrid from "@/Components/Course/CourseGrid.vue";
import {CoursePagination} from "@/types/course";

defineProps<{
  courses: CoursePagination,
}>()
</script>
