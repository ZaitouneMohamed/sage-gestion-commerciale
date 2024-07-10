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
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Settings Generale</h3>
                    <form>
                        <div class="grid grid-cols-6 gap-6">
                            
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
