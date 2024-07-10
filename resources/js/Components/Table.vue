<script setup>
import { onMounted } from "vue";

const props = defineProps({
    items: Object,
    columns: Array,
    colNames: Array,
    showactions: Boolean,
    showTrFromView: Boolean,
});

const emit = defineEmits(["data"]);
const data = props.items.data ? props.items.data : props.items ;
const columns = props.columns;
const colNames = props.colNames;

onMounted(() => {
    // document.getElementById("defaultModalButton").click();
});

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
                                <th v-for="colName in colNames" :key="colName" scope="colName" class="px-4 py-3">
                                    {{ colName }}
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in data" :key="item.id" class="border-b dark:border-gray-700" v-if="showTrFromView">
                                <td v-for="col in columns" :key="col" class="px-4 py-3">
                                    {{ item[col] }}
                                </td>
                                <td v-if="showactions" class="p-4 space-x-2 whitespace-nowrap">
                                    <slot name="actions" :item="item"></slot>
                                </td>
                            </tr>
                            <tr v-else class="border-b dark:border-gray-700" v-for="item in data" :key="item.id" >
                                <slot name="dataFromView" :item="item"></slot>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</template>
