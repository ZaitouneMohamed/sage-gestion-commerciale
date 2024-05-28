<script setup>
import { Link, router } from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
import { onMounted } from "vue";

const props = defineProps({
    items: Object,
    title: String,
    route: String,
    columns: Array,
    colNames: Array,
    showactions: Boolean,
});

const emit = defineEmits(["data"]);
const data = props.items.data;
const title = props.title;
const route = props.route;
const columns = props.columns;
const colNames = props.colNames;

onMounted(() => {
    // document.getElementById("defaultModalButton").click();
});

const deleteRecord = (id) => {
    if (confirm("Are you sure you want to delete this record?")) {
        const fullLink = route + "/" + id;
        router.delete(fullLink)
    }
};

const emitData = (item) => {
    emit("data", item);
};
</script>
<template>
    <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
        <div class="px-4 mx-auto">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">#</th>
                                <th v-for="colName in colNames" :key="colName" scope="colName" class="px-4 py-3">
                                    {{ colName }}
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in data" :key="item.id" class="border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ item.id }}
                                </th>
                                <td v-for="col in columns" :key="col" class="px-4 py-3">
                                    {{ item[col] }}
                                </td>

                                <td class="flex items-center justify-end px-4 py-3" v-if="showactions">
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
                                                <button @click="emitData(item)" type="button"
                                                    data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                                    class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200">
                                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <Pagination :items="items" />
            </div>
        </div>
    </section>
</template>
