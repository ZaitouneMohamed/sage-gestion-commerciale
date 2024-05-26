<script setup>
import { reactive } from 'vue'
import InputError from "@/Components/InputError.vue";

let props = defineProps({
    data: Object,
    type: String,
});

const form = reactive({
    category_name: props.data?.category_name || "",
});

function submitForm() {
    console.log(form.category_name);
}
</script>

<template>
    <form @submit.prevent="submitForm">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                form {{ form.category_name }} <br />
                data : {{ data }}
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">categorie name<span
                        class="text-red-500"> *</span></label>
                <input type="text" v-model="form.category_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Driver name" />
                <!-- <InputError :message="form.errors.category_name" class="mt-2" /> -->
            </div>
        </div>
        <button type="submit" :disabled="form.processing"
            class="text-black inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd"></path>
            </svg>
            {{ type }} Categorie
        </button>
    </form>
</template>
