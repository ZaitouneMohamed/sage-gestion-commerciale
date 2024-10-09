<script setup>
import { onMounted, toRefs } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";
import { useForm, router } from "@inertiajs/vue3";

// Initialize Flowbite components
onMounted(() => {
    initFlowbite();
});

// Define props
const props = defineProps({
    plan: {
        type: Object,
        required: true,
    },
});

// Use toRefs to destructure props
const { plan } = toRefs(props);

// Initialize form (after destructuring plan)
const form = useForm({
    payementMode: "paypal",
    plan: plan.value.slug,  // Access plan value correctly
});

// Handle form submission
const handleSubmit = () => {
    router.post('create-subscription/' + plan.value.slug, form, {
        onSuccess: () => {
            console.log("All good");
        },
        onError: (errors) => {
            form.errors = errors;
        },
        preserveState: (page) => Object.keys(page.props.errors).length > 0
    });
};
</script>


<template>
    <Head title="Checkout" />
    <AdminLayout>
        {{ form }}
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
            <form @submit.prevent="handleSubmit" class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Checkout</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Secure your plan and proceed with payment</p>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div class="bg-gray-50 rounded-lg shadow p-6 dark:bg-gray-800">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Payment of plan: {{ plan.name }}</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-400">Description: {{ plan.description }}</p>
                        <p class="mt-1 text-gray-600 dark:text-gray-400">Price: {{ plan.price }} / {{ plan.currency }}</p>
                        <p class="mt-1 text-gray-600 dark:text-gray-400">Billing Interval: {{ plan.interval }}</p>
                        <p class="mt-1 text-gray-600 dark:text-gray-400">Trial Days: {{ plan.trial_days }}</p>
                        <div class="grid grid-cols-1 gap-4 mt-6">
                            <!-- Payment Method Selection -->
                            <div class="flex items-center">
                                <input id="credit-card" type="radio" v-model="form.payementMode" value="stripe" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600 dark:focus:ring-blue-500" />
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fclipartcraft.com%2Fimages%2Fstripe-logo-5.png&f=1&nofb=1&ipt=8233cce49e79649b986ca48c5afdea3f89991b3f3ee1e06fb23cac86b8cbc211&ipo=images" alt="Credit Card" class="h-6 w-6 ml-2" />
                                <label for="credit-card" class="ml-2 text-gray-700 dark:text-gray-200">Credit Card (Stripe)</label>
                            </div>
                            <div class="flex items-center">
                                <input id="cmi" type="radio" v-model="form.payementMode" value="cmi" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600 dark:focus:ring-blue-500" />
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.cmi.co.ma%2Fsites%2Fdefault%2Ffiles%2Flogo-cmi-open.png&f=1&nofb=1&ipt=250238a0e84ca242652d3b70b125f16849d715ab52185da8eec6e0211a73eceb&ipo=images" alt="CMI" class="h-6 w-6 ml-2" />
                                <label for="cmi" class="ml-2 text-gray-700 dark:text-gray-200">CMI</label>
                            </div>
                            <div class="flex items-center">
                                <input id="paypal" type="radio" v-model="form.payementMode" value="paypal" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600 dark:focus:ring-blue-500" />
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.wBKSzdf1HTUgx1Ax_EecKwHaHa%26pid%3DApi&f=1&ipt=db3e890376f9281507735b9325f00d5bfeac263491610bb3c82f04c512a1d489&ipo=images" alt="PayPal" class="h-6 w-6 ml-2" />
                                <label for="paypal" class="ml-2 text-gray-700 dark:text-gray-200">PayPal</label>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg shadow p-6 dark:bg-gray-800">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Order Summary</h3>
                        <div class="flex justify-between mt-4">
                            <span class="text-gray-500 dark:text-gray-400">Subtotal:</span>
                            <span class="font-medium text-gray-900 dark:text-white">{{ plan.price }} / {{ plan.currency }}</span>
                        </div>
                        <div class="flex justify-between mt-2">
                            <span class="text-gray-500 dark:text-gray-400">Total:</span>
                            <span class="font-bold text-gray-900 dark:text-white">{{ plan.price }} / {{ plan.currency }}</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <button type="submit" class="w-full py-2 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-4 focus:ring-blue-300">Proceed to Payment</button>
                </div>
            </form>
        </section>
    </AdminLayout>
</template>

<style scoped>
/* Custom Styles */
h2 {
    font-size: 2rem;
}

h3 {
    font-size: 1.5rem;
}

.text-gray-700 {
    transition: color 0.2s ease;
}

.text-gray-700:hover {
    color: #2563eb; /* Tailwind blue-600 */
}
</style>
