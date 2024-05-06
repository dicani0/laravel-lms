<script setup lang="ts">
import {onMounted, ref} from 'vue';

withDefaults(defineProps<{
  value?: string;
  required?: boolean;
}>(), {required: true});

const model = defineModel<string>();

const input = ref<HTMLTextAreaElement | null>(null);

onMounted(() => {
  if (input.value?.hasAttribute('autofocus')) {
    input.value?.focus();
  }
});

defineExpose({focus: () => input.value?.focus()});
</script>

<template>
    <textarea
        class="border-gray-300 text-white bg-neutral-900 focus:border-rose-500 focus:ring-rose-500 rounded-md shadow-sm"
        v-model="model"
        :required="required"
        ref="input">

    </textarea>
</template>
