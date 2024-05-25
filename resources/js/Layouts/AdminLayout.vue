<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import NavBar from "../Pages/Admin/Components/NavBar.vue";
import SideBar from "../Pages/Admin/Components/SideBar.vue";
import { Head, Link } from "@inertiajs/vue3";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!-- NavBar Start -->
        <NavBar />
        <!-- NavBar End -->

        <!-- SideBar Start -->
        <SideBar />
        <!-- SideBar End -->
        <main class="h-auto p-4 pt-20 md:ml-64">
            <slot />
        </main>
    </div>
</template>
