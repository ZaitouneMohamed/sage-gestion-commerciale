<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Table from "@/Components/Table.vue";
import { Head, useForm, router } from "@inertiajs/vue3";
import AddEdit from "./AddEdit.vue";
import DefaultModal from "@/Components/Modal.vue";
import { ref } from "vue";
import Pagination from "@/Components/Pagination.vue";
defineProps({
    data: {
        type: Object,
        required: true,
    },
});

const columns = [
    'ref',
    'name',
    'price',
    'price_f',
    'Qty',
    'category_name',
    'supplier_name',
];

const colNames = [
    'ref',
    'name',
    'Price',
    'Price facture',
    'qty',
    'Category Name',
    'Supplier Name'
];


const form = useForm({
    file: null,
});

function submitForm() {
    router.post("importProduct", form)
}

const title = "product";

let selectedData = ref(null);
let type = ref("");

const handleProductData = (data) => {
    type.value = "update";
    selectedData.value = data;
};

const CreateProduct = () => {
    type.value = "create";
    selectedData.value = null;
};


</script>

<template>

    <Head title="Product" />
    <AdminLayout>
        <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
            <div class="w-full md:w-1/4">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search" required="" />
                    </div>
                </form>
            </div>
            <div
                class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                <!-- Modal toggle -->
                <div class="flex justify-center m-5">
                    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        type="button" @click="CreateSupplier">
                        Add {{ title }}
                    </button>
                </div>
                <div class="flex justify-center m-5">
                    <button id="defaultModalButton" data-modal-target="importProductModal"
                        data-modal-toggle="importProductModal"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        type="button">
                        Import {{ title }}
                    </button>
                </div>
                <DefaultModal :id="'importProductModal'">
                    <template #title> Import Form </template>
                    <template #body>
                        <form class="max-w-sm mx-auto" @submit.prevent="submitForm">
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Excel
                                    File Here</label>
                                <input @input="form.file = $event.target.files[0]"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </template>
                </DefaultModal>
            </div>
        </div>
        <Table :items="data" :title="title" :route="'product'" :columns="columns" :showactions="true"
            :colNames="colNames" @data="handleSuppData">
            <template #actions="{ item }">
                <button :id="'dropdownButton' + item.id" :data-dropdown-toggle="'dropdownMenu' + item.id
                    "
                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                    type="button">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </button>
                <div :id="'dropdownMenu' + item.id"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm" aria-labelledby="apple-iphone-14-dropdown-button">
                        <li>
                            <button @click="handleProductData(item)" type="button" data-modal-target="defaultModal"
                                data-modal-toggle="defaultModal"
                                class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                </svg>
                                Edit
                            </button>
                        </li>
                        <li>
                            <button type="submit" @click="deleteRecord(item.id)"
                                class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                </svg>
                                Delete
                            </button>
                        </li>
                    </ul>
                </div>
            </template>
        </Table>
        <Pagination :items="data" />
        <DefaultModal :id="'defaultModal'">
            <template #title> {{ type }} Product </template>
            <template #body>
                <AddEdit :type="type" :data="selectedData" />
            </template>
        </DefaultModal>
    </AdminLayout>
</template>
