<script setup lang="ts">
import TextInput from "@/Components/Forms/TextInput.vue";
import InputLabel from "@/Components/Forms/InputLabel.vue";
import TextArea from "@/Components/Forms/TextArea.vue";
import DateTime from "@/Components/Forms/DateTime.vue";
import {useForm} from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/Forms/InputError.vue";

const form = useForm({
  name: '',
  description: '',
  starts_at: '',
  ends_at: '',
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
      <TextInput class="w-full" v-model="form.name"/>
      <InputError class="mt-2" :message="form.errors.name"/>

      <InputLabel>Description</InputLabel>
      <TextArea :required="false" class="w-full" v-model="form.description"></TextArea>
      <InputError class="mt-2" :message="form.errors.description"/>

      <InputLabel>Starts at</InputLabel>
      <DateTime class="w-full" v-model="form.starts_at"></DateTime>
      <InputError class="mt-2" :message="form.errors.starts_at"/>

      <InputLabel>Ends at</InputLabel>
      <DateTime :required="false" class="w-full" v-model="form.ends_at"></DateTime>
      <InputError class="mt-2" :message="form.errors.ends_at"/>

      <div class="flex items-center justify-end mt-4">

        <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
          Create Course
        </PrimaryButton>
      </div>
    </form>
  </div>
</template>

<style scoped>

</style>