<script setup>
import { reactive, watch } from 'vue';
import { router ,useForm} from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

const props = defineProps({
    data: Object,
    type: String,
    products: Object,
    errors: Object
});

const form = useForm({
    product_id: props.data?.product_id || null,
    motif: props.data?.motif || null,
    type: props.data?.type || null,
    qte: props.data?.qte || null,
    observation: props.data?.observation || null,
});

watch(
    () => props.data,
    (newData) => {
        form.product_id = props.data?.product_id || "";
        form.motif = props.data?.motif || "";
        form.type = props.data?.type || "";
        form.qte = props.data?.qte || "";
        form.observation = props.data?.observation || "";
    },
    { immediate: true }
);


function submitForm() {
    if (props.type == "create") {
        router.post('mouvement', form, {
            onError: (errors) => {
                form.errors = errors
            },
            preserveState: (page) => Object.keys(page.props.errors).length > 0
        })
    } else {
        router.put('mouvement/' + props.data.id, form, {
            onError: (errors) => {
                form.errors = errors
            },
            preserveState: (page) => Object.keys(page.props.errors).length > 0
        })
    }
}
</script>


<template>
    <form @submit.prevent="submitForm">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product name<span
                        class="text-red-500"> *</span></label>
                <select v-model="form.product_id" :disabled="type !== 'create'"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected value="">Select Product</option>
                    <option v-for="item in products" :value="item.id">{{ item.name }}</option>
                </select>
                <InputError v-if="form.errors" :message="form.errors.product_id" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motif</label>
                <input type="number" v-model="form.motif"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="motif" />
                <InputError :message="form.errors.motif" v-if="form.errors" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
                <select v-model="form.type" :disabled="type !== 'create'"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected value="">Select Type</option>
                    <option value="entree">entree</option>
                    <option value="sortie">sortie</option>
                </select>
                <InputError :message="form.errors.type" v-if="form.errors" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">qty</label>
                <input type="number" v-model="form.qte" :disabled="type !== 'create'"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="qty" />
                <InputError :message="form.errors.qte" v-if="form.errors" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">observation</label>

                <textarea v-model="form.observation" placeholder="observation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                <InputError :message="form.errors.observation" v-if="form.errors" class="mt-2" />
            </div>
        </div>
        <button type="submit" :disabled="form.processing"
            class="text-black inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd"></path>
            </svg>
            {{ type }} Mouvement
        </button>
    </form>
</template>
