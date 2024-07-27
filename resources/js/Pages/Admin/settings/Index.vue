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

let form = useForm({
    facture_prefix: props.data.facture_prefix ? props.data.facture_prefix : null,
    show_email: props.data.show_email ? props.data.show_email : null,
});

const SubmitForm = (id) => {
    const fullLink = "settings-edit/" + id;
    form.post(fullLink, {
        preserveState: false,
    });
};

onMounted(() => {
    initFlowbite();
});
</script>

<template>

    <Head title="Company Info" />
    <AdminLayout>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-1 xl:gap-6 dark:bg-gray-900">
            <div class="col-span-2">
                {{ form }}
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Settings Generale</h3>
                    <form @submit.prevent="SubmitForm(data.id)">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-12 sm:col-full">
                                <div class="flex flex-col flex-grow">
                                    <div class="text-base font-normal text-gray-500 dark:text-gray-400">
                                        Show Email</div>
                                </div>
                                <label for="company-news" class="relative flex items-center cursor-pointer">
                                    <input type="checkbox" id="company-news" class="sr-only" v-model="form.show_email">
                                    <span
                                        class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                                </label>
                            </div>
                            <div class="col-span-12 sm:col-full">
                                <label for="country"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facture Prefix
                                    :</label>
                                <input type="text" v-model="form.facture_prefix"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Facture Prefix">
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
