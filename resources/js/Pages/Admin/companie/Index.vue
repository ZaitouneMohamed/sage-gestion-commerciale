<script setup>
import { ref, onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, useForm, router } from "@inertiajs/vue3";
const props = defineProps({
    data: {
        type: Object,
        required: true,
    },
});

const imageUrl = ref(props.data.company.company_logo ? props.data.company.company_logo : null);

function handleImageChange(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = () => {
            imageUrl.value = reader.result;
        };
        reader.readAsDataURL(file);
        form.image = file;
    }
}

let form = useForm({
    image: props.data.company.company_logo ? props.data.company.company_logo : null,
    company_name: props.data.company.company_name ? props.data.company.company_name : null,
    company_email: props.data.company.company_email ? props.data.company.company_email : null,
    company_phone: props.data.company.company_phone ? props.data.company.company_phone : null,
    company_adresse: props.data.company.company_address ? props.data.company.company_address : null,
    company_tax: props.data.company.company_tax ? props.data.company.company_tax : null,
    company_ice: props.data.company.company_ice ? props.data.company.company_ice : null,
});

function submitForm() {
    router.post('settings-edit', form, {
        preserveState: (page) => Object.keys(page.props.errors).length > 0
    })
}

onMounted(() => {
    initFlowbite();
});
</script>

<template>

    <Head title="Company Info" />
    <AdminLayout>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-1 xl:gap-6 dark:bg-gray-900">
            <div class="col-span-2">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Company Information</h3>
                    <form @submit.prevent="submitForm">
                        <div
                            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                                <img v-if="imageUrl" :src="imageUrl"
                                    class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" alt="Uploaded picture">
                                <div>
                                    <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture
                                    </h3>
                                    <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                        JPG, GIF or PNG. Max size of 1 MB
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <label for="file"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg cursor-pointer bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                                </path>
                                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                            </svg>
                                            Upload picture
                                            <input type="file" id="file" @input="form.image = $event.target.files[0]"
                                                @change="handleImageChange">
                                        </label>
                                    </div>
                                    <button type="button" @click="deletePicture"
                                        class="px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name :</label>
                                <input type="text" v-model="form.company_name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Company Name" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email :</label>
                                <input type="email" v-model="form.company_email" id="last-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Company Email" >
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="country"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone :</label>
                                <input type="text" v-model="form.company_phone" id="country"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Company phone" >
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="country"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tax :</label>
                                <input type="text" v-model="form.company_tax" id="country"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Company tax" >
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="country"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse :</label>
                                <input type="text" name="country" id="country" v-model="form.company_adresse"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Company adresse">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="country"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ICE :</label>
                                <input type="text" name="country" id="country" v-model="form.company_ice"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Company ICE">
                            </div>
                            <div class="col-span-6 sm:col-full">
                                <button
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="submit">Save all</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </AdminLayout>

</template>
