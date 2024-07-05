<script setup>
import { ref, watch } from 'vue';
import { useForm, router } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

const props = defineProps({
    data: Object,
    type: String,
});

const form = useForm({
    first_name: props.data?.first_name || "",
    last_name: props.data?.last_name || "",
    email: props.data?.email || "",
    phone: props.data?.phone || "",
    address: props.data?.address || "",
    city: props.data?.city || "",
    postal_code: props.data?.postal_code || "",
    country: props.data?.country || "",
    date_of_birth: props.data?.date_of_birth || "",
});

watch(
    () => props.data,
    (newData) => {
        form.first_name = newData?.first_name || "";
        form.last_name = newData?.last_name || "";
        form.email = newData?.email || "";
        form.phone = newData?.phone || "";
        form.address = newData?.address || "";
        form.city = newData?.city || "";
        form.postal_code = newData?.postal_code || "";
        form.country = newData?.country || "";
        form.date_of_birth = newData?.date_of_birth || "";
        form.errors = {};
    },
    { immediate: true }
);

function ClearForm() {
    form.first_name = "";
    form.last_name = "";
    form.email = "";
    form.phone = "";
    form.address = "";
    form.city = "";
    form.postal_code = "";
    form.country = "";
    form.date_of_birth = "";
}

function submitForm() {
    if (props.type == "create") {
        router.post('customer', form, {
            onSuccess: () => {
                ClearForm();
            },
            preserveState: (page) => Object.keys(page.props.errors).length > 0,
            onError: (errors) => {
                form.errors = errors;
            }
        })
    } else {
        router.put('customer/' + props.data.id, form, {
            preserveState: false,
            onSuccess: () => {
                preserveState: false
                ClearForm();
            },
            onError: (errors) => {
                form.errors = errors
            }
        })
    }
}
</script>


<template>
    <form @submit.prevent="submitForm">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">first name<span
                        class="text-red-500"> *</span></label>
                <input type="text" v-model="form.first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="categorie name" />
                <InputError :message="form.errors.first_name" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">last name<span
                        class="text-red-500"> *</span></label>
                <input type="text" v-model="form.last_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="categorie name" />
                <InputError :message="form.errors.last_name" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email<span
                        class="text-red-500"> *</span></label>
                <input type="email" v-model="form.email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="categorie name" />
                <InputError :message="form.errors.email" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">phone</label>
                <input type="tel" v-model="form.phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="phone" />
                <InputError :message="form.errors.phone" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">adresse</label>
                <textarea
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    v-model="form.address" placeholder="adresse">
                </textarea>
                <InputError :message="form.errors.adresse" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">city</label>
                <input type="text" v-model="form.city"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="city" />
                <InputError :message="form.errors.city" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">postal code</label>
                <input type="text" v-model="form.postalCode"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="postal code" />
                <InputError :message="form.errors.postal_code" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">country</label>
                <input type="text" v-model="form.country"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="postal code" />
                <InputError :message="form.errors.country" class="mt-2" />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">date of birth</label>
                <input type="date" v-model="form.date_of_birth"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="postal code" />
                <InputError :message="form.errors.date_of_birth" class="mt-2" />
            </div>
        </div>
        <button type="submit" :disabled="form.processing"
            class="text-black inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd"></path>
            </svg>
            {{ type }} customer
        </button>
    </form>
</template>
