<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <Head title="Dashboard" />
    <AdminLayout>
        <div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 lg:grid-cols-4">
            <div
                class="h-32 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-64"
            ></div>
            <div
                class="h-32 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-64"
            ></div>
            <div
                class="h-32 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-64"
            ></div>
            <div
                class="h-32 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-64"
            ></div>
        </div>
        <div
            class="mb-4 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 h-96"
        ></div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
        </div>
        <div
            class="mb-4 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 h-96"
        ></div>
        <div class="grid grid-cols-2 gap-4">
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
            <div
                class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
            ></div>
        </div>
    </AdminLayout>
</template>
