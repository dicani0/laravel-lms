<script setup lang="ts">
import {onMounted, ref} from 'vue';

const model = defineModel<string>();

withDefaults(defineProps<{
  required?: boolean;
}>(), {required: true})

const input = ref<HTMLInputElement | null>(null);

onMounted(() => {
  if (input.value?.hasAttribute('autofocus')) {
    input.value?.focus();
  }
});

defineExpose({focus: () => input.value?.focus()});
</script>

<template>
  <input
      class="border-gray-300 text-white bg-neutral-900 focus:border-rose-500 focus:ring-rose-500 rounded-md shadow-sm"
      v-model="model"
      :required="required"
      ref="input"
  />
</template>
