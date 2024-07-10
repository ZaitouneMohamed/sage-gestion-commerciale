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
                        <select id="category" v-model="form.customer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected value="">Select Customar</option>
                            <option v-for="item in data.clients" :value="item.id">{{ item.first_name }}
                                {{ item.last_name }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            v-model="form.date" required>
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
                            class="block w-full px-4 py-3 text-xs text-gray-700 uppercase border border-gray-300 rounded-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Ref">
                        <input type="text" v-model="selectedProduct.name"
                            class="block w-full px-4 py-3 text-xs text-gray-700 uppercase border border-gray-300 rounded-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Name">
                        <input type="text" v-model="selectedProduct.price"
                            class="block w-full px-4 py-3 text-xs text-gray-700 uppercase border border-gray-300 rounded-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="P.U HT">
                        <input type="text" v-model="selectedProduct.quantity"
                            class="block w-full px-4 py-3 text-xs text-gray-700 uppercase border border-gray-300 rounded-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Quantity">
                        <input type="text" v-model="selectedProduct.remise"
                            class="block w-full px-4 py-3 text-xs text-gray-700 uppercase border border-gray-300 rounded-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Remise">
                        <input type="text" v-model="selectedProduct.netPrice"
                            class="block w-full px-4 py-3 text-xs text-gray-700 uppercase border border-gray-300 rounded-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="P.U NET">
                        <input type="text" v-model="selectedProduct.amount"
                            class="block w-full px-4 py-3 text-xs text-gray-700 uppercase border border-gray-300 rounded-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Amount">
                    </div>
                    <button type="button" @click="addProductToSelected"
                        class="px-4 py-2 text-white bg-blue-500 rounded-md">Add
                        Product</button>
                    {{ form.selectedProducts.length }}
                    <button type="button" @click="submitForm"
                        v-if="form.selectedProducts.length > 0 && form.customer != '' && form.customer != null && form.date != null"
                        class="px-4 py-2 text-white bg-blue-500 rounded-md">Validate Form</button>
                </div>
                <Table :items="form.selectedProducts" :columns="columns" :showactions="true" :colNames="colNames">
                    <template #actions="{ item }">
                        <td class="px-6 py-4">
                            <button @click="GetProductInfo(item.ref)" type="button"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                            <button @click="DeleteProductFromSelected(item.ref)" type="button"
                                class="font-medium text-red-600 dark:text-blue-500 hover:underline">delete</button>
                        </td>
                    </template>
                </Table>
            </form>
        </section>
    </AdminLayout>
</template>

<script setup>
import Table from "@/Components/Table.vue";
import { useForm, router } from "@inertiajs/vue3";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const submitForm = () => {
    router.post('StoreOrder', form, {
        onSuccess: () => {
            preserveState: false
        },
        onError: (errors) => {
            form.errors = errors
        }
    })
};

const columns = [
    'ref',
    'name',
    'price',
    'quantity',
    'remise',
    'netPrice',
    'amount',
];

const form = useForm({
    date: ref(new Date().toISOString().substr(0, 10)),
    customer: null,
    selectedProducts: []
});

const selectedProduct = ref({
    id: null,
    ref: '',
    name: '',
    price: 0,
    quantity: 1,
    remise: 0,
    netPrice: 0,
    amount: 0
});

watch(
    () => ({
        price: selectedProduct.value.price,
        quantity: selectedProduct.value.quantity,
        remise: selectedProduct.value.remise,
    }),
    () => {
        const price = parseFloat(selectedProduct.value.price) || 0;
        const quantity = parseInt(selectedProduct.value.quantity) || 1;
        const remise = parseFloat(selectedProduct.value.remise) || 0;

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
            id: product.id,
            ref: product.ref,
            name: product.name,
            price: product.price,
            quantity: 1,
            remise: 0,
            netPrice: product.price,
            amount: product.price * 1
        };
    }
};

const ClearProductInfo = () => {
    selectedProduct.value = {
        id: null,
        ref: '',
        name: '',
        price: 0,
        quantity: 1,
        remise: 0,
        netPrice: 0,
        amount: 0
    };
};

const GetProductInfo = (ref) => {
    const product = props.data.products.find(item => item.ref == ref);
    if (product) {
        selectedProduct.value = {
            id: product.id,
            ref: product.ref,
            name: product.name,
            price: product.price,
            quantity: 1,
            remise: 0,
            netPrice: product.price,
            amount: product.price * 1
        };
    }
};

const addProductToSelected = () => {
    if (selectedProduct.value) {
        const existingProductIndex = form.selectedProducts.findIndex(item => item.id == selectedProduct.value.id);
        if (existingProductIndex === -1) {
            form.selectedProducts.push({ ...selectedProduct.value });
            ClearProductInfo();
        } else {
            form.selectedProducts[existingProductIndex] = { ...selectedProduct.value };
            ClearProductInfo();
        }
    }
};

const DeleteProductFromSelected = (ref) => {
    const existingProductIndex = form.selectedProducts.findIndex(item => item.ref == ref);
    if (existingProductIndex !== -1) {
        form.selectedProducts.splice(existingProductIndex, 1);
        ClearProductInfo();
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
