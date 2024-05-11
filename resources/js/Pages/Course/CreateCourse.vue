<script lang="ts" setup>
import TextInput from "@/Components/Forms/TextInput.vue";
import InputLabel from "@/Components/Forms/InputLabel.vue";
import TextArea from "@/Components/Forms/TextArea.vue";
import DateTime from "@/Components/Forms/DateTime.vue";
import {useForm} from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/Forms/InputError.vue";

const form = useForm<{
  name: string;
  description: string;
  starts_at: string;
  ends_at: string;
  published_at: string;
}>({
  name: '',
  description: '',
  starts_at: '',
  ends_at: '',
  published_at: '',
});

const submit = () => {
      form.post(route('courses.store'), {
        onSuccess: () => {
          form.reset('name', 'description', 'starts_at', 'ends_at');
        },
      });
    }
;

</script>

<template>
  <div class="">
    <div>
      <h1>Create Course</h1>
    </div>

    <form class="w-full md:min-w-[400px] lg:min-w-[600px]" @submit.prevent="submit">
      <InputLabel>Course Name</InputLabel>
      <TextInput v-model="form.name" class="w-full"/>
      <InputError :message="form.errors.name" class="mt-2"/>

      <InputLabel>Description</InputLabel>
      <TextArea v-model="form.description" :required="false" class="w-full"></TextArea>
      <InputError :message="form.errors.description" class="mt-2"/>

      <InputLabel>Starts at</InputLabel>
      <DateTime v-model="form.starts_at" class="w-full"></DateTime>
      <InputError :message="form.errors.starts_at" class="mt-2"/>

      <InputLabel>Ends at</InputLabel>
      <DateTime v-model="form.ends_at" :required="false" class="w-full"></DateTime>
      <InputError :message="form.errors.ends_at" class="mt-2"/>

      <InputLabel>Published at</InputLabel>
      <DateTime v-model="form.published_at" class="w-full"></DateTime>
      <InputError :message="form.errors.published_at" class="mt-2"/>

      <div class="flex items-center justify-end mt-4">

        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="ms-4">
          Create Course
        </PrimaryButton>
      </div>
    </form>
  </div>
</template>

<style scoped>

</style>