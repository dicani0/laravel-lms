<script lang="ts" setup>
import {computed} from 'vue';
import {Link} from '@inertiajs/vue3';

const props = defineProps<{
  href: string;
  active?: boolean;
  method?: 'get' | 'post' | 'put' | 'patch' | 'delete' | undefined;
}>();

const classes = computed(() =>
    props.active
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-300 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-100 hover:text-rose-700 hover:border-rose-300 focus:outline-none focus:text-rose-700 focus:border-rose-300 transition duration-150 ease-in-out'
);
</script>

<template>
  <Link :class="classes" :href="href" :method="method ? method : 'get'" as="button">
    <slot/>
  </Link>
</template>
