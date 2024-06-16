<template>

    <Head title="Create Order" />
    <AdminLayout title="create New Order">
        <section class="bg-white dark:bg-gray-900">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create Order</h2>
            <form action="#">
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Costumer</label>
                        <select id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Customar</option>
                            <option v-for="item in data.clients" value="{{ item.id }}">{{ item.first_name }}
                                {{ item.last_name }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            v-model="currentDate" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="product"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product</label>
                        <select @change="updateProductInfo()" id="product"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Product</option>
                            <option v-for="item in data.products" :value="item.id">{{ item.name }}</option>
                        </select>
                    </div>
                </div>
                <div class="px-4 mx-auto">
                    <!-- Inputs styled like table headers -->
                    <div class="grid gap-4 mb-4 sm:grid-cols-8">
                        <input type="text" v-model="selectedProduct.ref"
                            class="px-4 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Ref">
                        <input type="text" v-model="selectedProduct.name"
                            class="px-4 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Name">
                        <input type="text" v-model="selectedProduct.price"
                            class="px-4 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="P.U HT">
                        <input type="text" v-model="selectedProduct.quantity"
                            class="px-4 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Quantity">
                        <input type="text" v-model="selectedProduct.remise"
                            class="px-4 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Remise">
                        <input type="text" v-model="selectedProduct.netPrice"
                            class="px-4 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="P.U NET">
                        <input type="text" v-model="selectedProduct.amount"
                            class="px-4 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Amount">
                    </div>
                    <button type="button" @click="addProductToSelected"
                        class="px-4 py-2 bg-blue-500 text-white rounded-md">Add 
                        Product</button>
                </div>
                <Table :items="selectedProducts" :title="title" :route="'customer'" :columns="columns"
                    :showactions="false" :colNames="colNames" :showPagination="false">
                </Table>
                <div class="flex items-center space-x-4">

                </div>
            </form>
        </section>
    </AdminLayout>
</template>

<script setup>
import Table from "@/Components/Table.vue";

import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const columns = [
    'ref',
    'name',
    'price',
    'quantity',
    'remise',
    'netPrice',
    'amount',
];

const selectedProducts = ref([]);
const selectedProduct = ref({
    ref: '',
    name: '',
    price: '',
    quantity: '',
    remise: '',
    netPrice: '',
    amount: ''
});

const recalculate = () => {
    const price = parseFloat(selectedProduct.value.price) || 0;
    const quantity = parseInt(selectedProduct.value.quantity) || 0;
    const remise = parseFloat(selectedProduct.value.remise) || 0;

    selectedProduct.value.netPrice = price - (price * (remise / 100));

    selectedProduct.value.amount = selectedProduct.value.netPrice * quantity;
};

watch(
    () => ({
        price: selectedProduct.value.price,
        quantity: selectedProduct.value.quantity,
        remise: selectedProduct.value.remise,
    }),
    () => {
        const price = parseFloat(selectedProduct.value.price) || 0;
        const quantity = parseInt(selectedProduct.value.quantity) || 0;
        const remise = parseFloat(selectedProduct.value.remise) || 0;

        // Calculate netPrice
        selectedProduct.value.netPrice = price - (price * (remise / 100));

        selectedProduct.value.amount = selectedProduct.value.netPrice * quantity;
    },
    { immediate: true }
);


const updateProductInfo = () => {
    const selectedProductId = document.getElementById('product').value;
    const product = props.data.products.find(item => item.id == selectedProductId);
    if (product) {
        selectedProduct.value = {
            ref: product.ref,
            name: product.name,
            price: product.price,
            quantity: 1,
            remise: 0,
            netPrice: product.price - (product.price * (selectedProduct.value.remise / 100)),
            amount: product.price * selectedProduct.value.quantity
        };
    }
};

const GetProductInfo = () => {
    const selectedProductId = document.getElementById('product').value;
    const product = props.data.products.find(item => item.id == selectedProductId);
    selectedProduct.value.push(product);
};


const addProductToSelected = () => {
    if (selectedProduct.value && !selectedProducts.value.find(item => item.ref == selectedProduct.value.red)) {
        selectedProducts.value.push({ ...selectedProduct.value });
    }
};


const colNames = [
    "ref",
    'name',
    'P.U HT',
    'Quantite',
    'Remise',
    'P.U NET',
    'Mantant',
];

const title = "Create Order";

const props = defineProps({
    data: {
        type: Object,
        required: true,
    },
});
const currentDate = ref(new Date().toISOString().substr(0, 10));

</script>
