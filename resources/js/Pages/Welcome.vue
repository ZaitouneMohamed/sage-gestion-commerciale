<script setup>
import { onMounted } from "vue";
import { Head, Link } from '@inertiajs/vue3';
import Layout from "@/Layouts/NormalLayouts.vue";
import { initFlowbite } from "flowbite";
onMounted(() => {
    initFlowbite();
});

defineProps({
    plans: {
        type: Object,
    },
});
</script>

<template>

    <Head title="Saig | systeme Facturation" />

    <Layout>
        <!-- ====== Hero Section Start -->
        <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
            <div class="container">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4">
                        <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                            <h1
                                class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                                Logiciel Gratuit de Facturation
                            </h1>
                            <!-- <p
                                class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                                Multidisciplinary Web Template Built with Your Favourite
                                Technology - HTML Bootstrap, Tailwind and React NextJS.
                            </p> -->
                            <ul class="flex flex-wrap items-center justify-center gap-5 mb-10">
                                <li>
                                    <Link href="https://links.tailgrids.com/play-download"
                                        class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                                        Inscription
                                </Link>
                                </li>
                                <li>
                                    <Link href="https://github.com/tailgrids/play-tailwind" target="_blank"
                                        class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark">
                                        Connexion
                                </Link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <div class="wow fadeInUp relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
                            <div class="mt-16">
                                <img src="https://www.manageo.io/wp-content/uploads/2023/10/hero-facturation-1-1024x539-1.png" alt="hero"
                                    class="max-w-full mx-auto rounded-t-xl rounded-tr-xl" />
                            </div>
                            <div class="absolute -left-9 bottom-0 z-[-1]">
                                <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                        fill="white" />
                                    <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                        fill="white" />
                                    <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                                    <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                        fill="white" />
                                    <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                        fill="white" />
                                    <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                        fill="white" />
                                    <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                        fill="white" />
                                    <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                        fill="white" />
                                    <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                        fill="white" />
                                    <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 1.66667 89.3333)" fill="white" />
                                    <circle cx="16.3333" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 16.3333 89.3333)" fill="white" />
                                    <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 45.6667 89.3333)" fill="white" />
                                    <circle cx="60.3333" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 60.3333 89.3338)" fill="white" />
                                    <circle cx="88.6667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 88.6667 89.3338)" fill="white" />
                                    <circle cx="117.667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 117.667 89.3338)" fill="white" />
                                    <circle cx="74.6667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 74.6667 89.3338)" fill="white" />
                                    <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                        fill="white" />
                                    <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="74.6673" r="1.66667"
                                        transform="rotate(-90 1.66667 74.6673)" fill="white" />
                                    <circle cx="1.66667" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 1.66667 31.0003)" fill="white" />
                                    <circle cx="16.3333" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 16.3333 74.6668)" fill="white" />
                                    <circle cx="16.3333" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 16.3333 31.0003)" fill="white" />
                                    <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                        fill="white" />
                                    <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 45.6667 74.6668)" fill="white" />
                                    <circle cx="45.6667" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 45.6667 31.0003)" fill="white" />
                                    <circle cx="60.3333" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 60.3333 74.6668)" fill="white" />
                                    <circle cx="60.3333" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 60.3333 31.0001)" fill="white" />
                                    <circle cx="88.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 88.6667 74.6668)" fill="white" />
                                    <circle cx="88.6667" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 88.6667 31.0001)" fill="white" />
                                    <circle cx="117.667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 117.667 74.6668)" fill="white" />
                                    <circle cx="117.667" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 117.667 31.0001)" fill="white" />
                                    <circle cx="74.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 74.6667 74.6668)" fill="white" />
                                    <circle cx="74.6667" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 74.6667 31.0001)" fill="white" />
                                    <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                        fill="white" />
                                    <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                        fill="white" />
                                    <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                        fill="white" />
                                    <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 1.66667 60.0003)" fill="white" />
                                    <circle cx="1.66667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 1.66667 16.3336)" fill="white" />
                                    <circle cx="16.3333" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 16.3333 60.0003)" fill="white" />
                                    <circle cx="16.3333" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 16.3333 16.3336)" fill="white" />
                                    <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                        fill="white" />
                                    <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 45.6667 60.0003)" fill="white" />
                                    <circle cx="45.6667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 45.6667 16.3336)" fill="white" />
                                    <circle cx="60.3333" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 60.3333 60.0003)" fill="white" />
                                    <circle cx="60.3333" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 60.3333 16.3336)" fill="white" />
                                    <circle cx="88.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 88.6667 60.0003)" fill="white" />
                                    <circle cx="88.6667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 88.6667 16.3336)" fill="white" />
                                    <circle cx="117.667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 117.667 60.0003)" fill="white" />
                                    <circle cx="117.667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 117.667 16.3336)" fill="white" />
                                    <circle cx="74.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 74.6667 60.0003)" fill="white" />
                                    <circle cx="74.6667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 74.6667 16.3336)" fill="white" />
                                    <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                        fill="white" />
                                    <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                        fill="white" />
                                    <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                        fill="white" />
                                    <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="45.3336" r="1.66667"
                                        transform="rotate(-90 1.66667 45.3336)" fill="white" />
                                    <circle cx="1.66667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 1.66667 1.66683)" fill="white" />
                                    <circle cx="16.3333" cy="45.3336" r="1.66667"
                                        transform="rotate(-90 16.3333 45.3336)" fill="white" />
                                    <circle cx="16.3333" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 16.3333 1.66683)" fill="white" />
                                    <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                        fill="white" />
                                    <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="45.3336" r="1.66667"
                                        transform="rotate(-90 45.6667 45.3336)" fill="white" />
                                    <circle cx="45.6667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 45.6667 1.66683)" fill="white" />
                                    <circle cx="60.3333" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 60.3333 45.3338)" fill="white" />
                                    <circle cx="60.3333" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 60.3333 1.66707)" fill="white" />
                                    <circle cx="88.6667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 88.6667 45.3338)" fill="white" />
                                    <circle cx="88.6667" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 88.6667 1.66707)" fill="white" />
                                    <circle cx="117.667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 117.667 45.3338)" fill="white" />
                                    <circle cx="117.667" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 117.667 1.66707)" fill="white" />
                                    <circle cx="74.6667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 74.6667 45.3338)" fill="white" />
                                    <circle cx="74.6667" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 74.6667 1.66707)" fill="white" />
                                    <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                        fill="white" />
                                    <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                        fill="white" />
                                    <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                        fill="white" />
                                    <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="absolute -right-6 -top-6 z-[-1]">
                                <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                        fill="white" />
                                    <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                        fill="white" />
                                    <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                                    <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                        fill="white" />
                                    <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                        fill="white" />
                                    <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                        fill="white" />
                                    <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                        fill="white" />
                                    <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                        fill="white" />
                                    <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                        fill="white" />
                                    <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 1.66667 89.3333)" fill="white" />
                                    <circle cx="16.3333" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 16.3333 89.3333)" fill="white" />
                                    <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 45.6667 89.3333)" fill="white" />
                                    <circle cx="60.3333" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 60.3333 89.3338)" fill="white" />
                                    <circle cx="88.6667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 88.6667 89.3338)" fill="white" />
                                    <circle cx="117.667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 117.667 89.3338)" fill="white" />
                                    <circle cx="74.6667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 74.6667 89.3338)" fill="white" />
                                    <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                        fill="white" />
                                    <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="74.6673" r="1.66667"
                                        transform="rotate(-90 1.66667 74.6673)" fill="white" />
                                    <circle cx="1.66667" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 1.66667 31.0003)" fill="white" />
                                    <circle cx="16.3333" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 16.3333 74.6668)" fill="white" />
                                    <circle cx="16.3333" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 16.3333 31.0003)" fill="white" />
                                    <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                        fill="white" />
                                    <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 45.6667 74.6668)" fill="white" />
                                    <circle cx="45.6667" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 45.6667 31.0003)" fill="white" />
                                    <circle cx="60.3333" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 60.3333 74.6668)" fill="white" />
                                    <circle cx="60.3333" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 60.3333 31.0001)" fill="white" />
                                    <circle cx="88.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 88.6667 74.6668)" fill="white" />
                                    <circle cx="88.6667" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 88.6667 31.0001)" fill="white" />
                                    <circle cx="117.667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 117.667 74.6668)" fill="white" />
                                    <circle cx="117.667" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 117.667 31.0001)" fill="white" />
                                    <circle cx="74.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 74.6667 74.6668)" fill="white" />
                                    <circle cx="74.6667" cy="31.0001" r="1.66667"
                                        transform="rotate(-90 74.6667 31.0001)" fill="white" />
                                    <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                        fill="white" />
                                    <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                        fill="white" />
                                    <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                        fill="white" />
                                    <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 1.66667 60.0003)" fill="white" />
                                    <circle cx="1.66667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 1.66667 16.3336)" fill="white" />
                                    <circle cx="16.3333" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 16.3333 60.0003)" fill="white" />
                                    <circle cx="16.3333" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 16.3333 16.3336)" fill="white" />
                                    <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                        fill="white" />
                                    <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 45.6667 60.0003)" fill="white" />
                                    <circle cx="45.6667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 45.6667 16.3336)" fill="white" />
                                    <circle cx="60.3333" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 60.3333 60.0003)" fill="white" />
                                    <circle cx="60.3333" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 60.3333 16.3336)" fill="white" />
                                    <circle cx="88.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 88.6667 60.0003)" fill="white" />
                                    <circle cx="88.6667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 88.6667 16.3336)" fill="white" />
                                    <circle cx="117.667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 117.667 60.0003)" fill="white" />
                                    <circle cx="117.667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 117.667 16.3336)" fill="white" />
                                    <circle cx="74.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 74.6667 60.0003)" fill="white" />
                                    <circle cx="74.6667" cy="16.3336" r="1.66667"
                                        transform="rotate(-90 74.6667 16.3336)" fill="white" />
                                    <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                        fill="white" />
                                    <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                        fill="white" />
                                    <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                        fill="white" />
                                    <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                        fill="white" />
                                    <circle cx="1.66667" cy="45.3336" r="1.66667"
                                        transform="rotate(-90 1.66667 45.3336)" fill="white" />
                                    <circle cx="1.66667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 1.66667 1.66683)" fill="white" />
                                    <circle cx="16.3333" cy="45.3336" r="1.66667"
                                        transform="rotate(-90 16.3333 45.3336)" fill="white" />
                                    <circle cx="16.3333" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 16.3333 1.66683)" fill="white" />
                                    <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                        fill="white" />
                                    <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                        fill="white" />
                                    <circle cx="45.6667" cy="45.3336" r="1.66667"
                                        transform="rotate(-90 45.6667 45.3336)" fill="white" />
                                    <circle cx="45.6667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 45.6667 1.66683)" fill="white" />
                                    <circle cx="60.3333" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 60.3333 45.3338)" fill="white" />
                                    <circle cx="60.3333" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 60.3333 1.66707)" fill="white" />
                                    <circle cx="88.6667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 88.6667 45.3338)" fill="white" />
                                    <circle cx="88.6667" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 88.6667 1.66707)" fill="white" />
                                    <circle cx="117.667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 117.667 45.3338)" fill="white" />
                                    <circle cx="117.667" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 117.667 1.66707)" fill="white" />
                                    <circle cx="74.6667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 74.6667 45.3338)" fill="white" />
                                    <circle cx="74.6667" cy="1.66707" r="1.66667"
                                        transform="rotate(-90 74.6667 1.66707)" fill="white" />
                                    <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                        fill="white" />
                                    <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                        fill="white" />
                                    <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                        fill="white" />
                                    <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Hero Section End -->
        <!-- ====== Features Section Start -->
        <section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                            <span class="block mb-2 text-lg font-semibold text-primary">
                                Features
                            </span>
                            <h2
                                class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                                Compatible avec tous les appareils
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                Vous pouvez accéder à votre application de facturation à tout moment et depuis n’importe
                                quel appareil connecté à internet, profitez de la mobilité totale qu’offre notre
                                solution gratuite.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mb-12 wow fadeInUp group" data-wow-delay=".1s">
                            <div
                                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                                <span
                                    class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301V14.9426C31.0301 15.1676 30.8613 15.3926 30.5801 15.3926H5.71758C5.49258 15.3926 5.26758 15.2239 5.26758 14.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                Facile à utiliser
                            </h4>
                            <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                                En un seul clic, commencez à utiliser votre logiciel sans la moindre formation, son
                                interface claire et fluide vous facilitera la tache ! </p>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mb-12 wow fadeInUp group" data-wow-delay=".15s">
                            <div
                                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                                <span
                                    class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                Sécurisé
                            </h4>
                            <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                                Vos données sont en sécurité dans notre Cloud vu qu'elles sont chiffrées et bien à
                                l’abri des mauvaises manœuvres. </p>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mb-12 wow fadeInUp group" data-wow-delay=".15s">
                            <div
                                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                                <span
                                    class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                Evolutif
                            </h4>
                            <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                                De nouvelles fonctionnalités sont ajoutées régulièrement à notre logiciel, dont tous les
                                utilisateurs bénéficieront en temps réel ... et bien sûr gratuitement.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ====== Features Section End -->

        <!-- ====== About Section Start -->
        <!-- <section id="about" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="flex flex-wrap items-center -mx-4">
                        <div class="w-full px-4 lg:w-1/2">
                            <div class="mb-12 max-w-[540px] lg:mb-0">
                                <h2
                                    class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]">
                                    Brilliant Toolkit to Build Nextgen Website Faster.
                                </h2>
                                <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6">
                                    The main ‘thrust' is to focus on educating attendees on how to
                                    best protect highly vulnerable business applications with
                                    interactive panel discussions and roundtables led by subject
                                    matter experts.
                                    <br />
                                    <br />
                                    The main ‘thrust' is to focus on educating attendees on how to
                                    best protect highly vulnerable business applications with
                                    interactive panel.
                                </p>

                                <a href="javascript:void(0)"
                                    class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border rounded-md border-primary bg-primary px-7 hover:border-blue-dark hover:bg-blue-dark">
                                    Know More
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->
        <!-- ====== About Section End -->

        <!-- ====== CTA Section Start -->
        <!-- <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
            <div class="container mx-auto">
                <div class="relative overflow-hidden">
                    <div class="flex flex-wrap items-stretch -mx-4">
                        <div class="w-full px-4">
                            <div class="mx-auto max-w-[570px] text-center">
                                <h2 class="mb-2.5 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44]">
                                    <span>What Are You Looking For?</span>
                                    <span class="text-3xl font-normal md:text-[40px]">
                                        Get Started Now
                                    </span>
                                </h2>
                                <p class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white">
                                    There are many variations of passages of Lorem Ipsum but the
                                    majority have suffered in some form.
                                </p>
                                <a href="javascript:void(0)"
                                    class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489]">
                                    Start using Play
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <span class="absolute top-0 left-0">
                    <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                        <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                        <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white"
                            stroke-opacity="0.08" stroke-width="12" />
                    </svg>
                </span>
                <span class="absolute bottom-0 right-0">
                    <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                        <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                        <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white"
                            stroke-opacity="0.06" stroke-width="13" />
                    </svg>
                </span>
            </div>
        </section> -->
        <!-- ====== CTA Section End -->

        <!-- ====== Pricing Section Start -->
        <section id="pricing"
            class="relative z-20 overflow-hidden bg-white pb-12 pt-20 dark:bg-dark lg:pb-[90px] lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                            <span class="block mb-2 text-lg font-semibold text-primary">
                                Pricing Table
                            </span>
                            <h2
                                class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                                Awesome Pricing Plan
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available
                                but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center -mx-4">
                    <div v-for="item in plans" class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="relative z-10 px-8 py-10 mb-10 overflow-hidden bg-white rounded-xl shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                            <span class="block mb-5 text-xl font-medium text-dark dark:text-white">
                                {{ item.name }}
                            </span>
                            <h2
                                class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                                <span class="text-xl font-medium">$</span>
                                <span class="-ml-1 -tracking-[2px]">{{ item.amount }}</span>
                                <span class="text-base font-normal text-body-color dark:text-dark-6">
                                    Per {{ item.interval }}
                                </span>
                            </h2>
                            <div class="mb-[50px]">
                                <h5 class="mb-5 text-lg font-medium text-dark dark:text-white">
                                    Features
                                </h5>
                                <div class="flex flex-col gap-[14px]">
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Up to 1 User
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        All UI components
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Lifetime access
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Free updates
                                    </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)"
                                class="inline-block py-3 text-base font-medium text-center text-white transition rounded-md bg-primary px-7 hover:bg-blue-dark">
                                Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Pricing Section End -->
        <!-- ====== Testimonial Section Start -->
        <!-- <section id="testimonials" class="overflow-hidden bg-gray-1 py-20 dark:bg-dark-2 md:py-[120px]">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                            <span class="block mb-2 text-lg font-semibold text-primary">
                                Testimonials
                            </span>
                            <h2
                                class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                                What our Clients Say
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available
                                but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="-m-5">
                    <div class="p-5 swiper testimonial-carousel common-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div
                                    class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean.
                                        It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="/assets/images/testimonials/author-01.jpg" alt="author"
                                                class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Sabo Masties
                                            </h3>
                                            <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean.
                                        It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="/assets/images/testimonials/author-02.jpg" alt="author"
                                                class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Musharof Chowdhury
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Ayro UI
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean.
                                        It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="/assets/images/testimonials/author-03.jpg" alt="author"
                                                class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                William Smith
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Trorex
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean.
                                        It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="/assets/images/testimonials/author-01.jpg" alt="author"
                                                class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Sabo Masties
                                            </h3>
                                            <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean.
                                        It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="/assets/images/testimonials/author-02.jpg" alt="author"
                                                class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Musharof Chowdhury
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Ayro UI
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                        <img src="/assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean.
                                        It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="/assets/images/testimonials/author-03.jpg" alt="author"
                                                class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                William Smith
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Trorex
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-[60px] flex items-center justify-center gap-1">
                            <div class="swiper-button-prev">
                                <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z" />
                                </svg>
                            </div>

                            <div class="swiper-button-next">
                                <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- ====== Testimonial Section End -->

        <!-- ====== FAQ Section Start -->
        <!-- <section class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[520px] text-center">
                            <span class="block mb-2 text-lg font-semibold text-primary">
                                FAQ
                            </span>
                            <h2
                                class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                                Any Questions? Look Here
                            </h2>
                            <p class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available
                                but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div
                                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                        d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                    <path
                                        d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                    <path
                                        d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3
                                    class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That
                                    includes the in-depth research & creation of your monthly
                                    content ui/ux strategy that we do writing your first blog
                                    post.
                                </p>
                            </div>
                        </div>
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div
                                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                        d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                    <path
                                        d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                    <path
                                        d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3
                                    class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That
                                    includes the in-depth research & creation of your monthly
                                    content ui/ux strategy that we do writing your first blog
                                    post.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div
                                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                        d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                    <path
                                        d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                    <path
                                        d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3
                                    class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That
                                    includes the in-depth research & creation of your monthly
                                    content ui/ux strategy that we do writing your first blog
                                    post.
                                </p>
                            </div>
                        </div>
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div
                                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                        d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                    <path
                                        d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                    <path
                                        d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3
                                    class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That
                                    includes the in-depth research & creation of your monthly
                                    content ui/ux strategy that we do writing your first blog
                                    post.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <span class="absolute left-4 top-4 -z-[1]">
                    <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#13C296" />
                        <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                            fill="#13C296" />
                        <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)" fill="#13C296" />
                        <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)"
                            fill="#13C296" />
                        <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)" fill="#13C296" />
                        <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)"
                            fill="#13C296" />
                        <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#13C296" />
                        <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                            fill="#13C296" />
                        <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                            fill="#13C296" />
                    </svg>
                </span>
                <span class="absolute bottom-4 right-4 -z-[1]">
                    <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#3758F9" />
                        <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                            fill="#3758F9" />
                        <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                            fill="#3758F9" />
                        <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)" fill="#3758F9" />
                        <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)"
                            fill="#3758F9" />
                        <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)"
                            fill="#3758F9" />
                        <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)"
                            fill="#3758F9" />
                        <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)"
                            fill="#3758F9" />
                        <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)"
                            fill="#3758F9" />
                        <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)"
                            fill="#3758F9" />
                        <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)"
                            fill="#3758F9" />
                        <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)"
                            fill="#3758F9" />
                        <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)"
                            fill="#3758F9" />
                        <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)" fill="#3758F9" />
                        <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)"
                            fill="#3758F9" />
                        <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)"
                            fill="#3758F9" />
                        <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)"
                            fill="#3758F9" />
                        <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)"
                            fill="#3758F9" />
                        <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)"
                            fill="#3758F9" />
                        <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)"
                            fill="#3758F9" />
                        <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)"
                            fill="#3758F9" />
                        <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)"
                            fill="#3758F9" />
                        <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#3758F9" />
                        <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                            fill="#3758F9" />
                        <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                            fill="#3758F9" />
                    </svg>
                </span>
            </div>
        </section> -->
        <!-- ====== FAQ Section End -->

        <!-- ====== Team Section Start -->
        <!-- <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                            <span class="block mb-2 text-lg font-semibold text-primary">
                                Our Team Members
                            </span>
                            <h2
                                class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                                Our Creative Team
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available
                                but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center -mx-4">
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div
                            class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="/assets/images/team/team-01.png" alt="team image"
                                    class="h-[120px] w-[120px] rounded-full" />
                                <span
                                    class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                                <span
                                    class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                                    <svg width="55" height="53" viewBox="0 0 55 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5118 3.1009C13.3681 3.1009 14.0622 2.40674 14.0622 1.55045C14.0622 0.69416 13.3681 0 12.5118 0C11.6555 0 10.9613 0.69416 10.9613 1.55045C10.9613 2.40674 11.6555 3.1009 12.5118 3.1009Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.5038 3.1009C23.3601 3.1009 24.0543 2.40674 24.0543 1.55045C24.0543 0.69416 23.3601 0 22.5038 0C21.6475 0 20.9534 0.69416 20.9534 1.55045C20.9534 2.40674 21.6475 3.1009 22.5038 3.1009Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.4958 3.1009C33.3521 3.1009 34.0463 2.40674 34.0463 1.55045C34.0463 0.69416 33.3521 0 32.4958 0C31.6395 0 30.9454 0.69416 30.9454 1.55045C30.9454 2.40674 31.6395 3.1009 32.4958 3.1009Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.4875 3.1009C43.3438 3.1009 44.038 2.40674 44.038 1.55045C44.038 0.69416 43.3438 0 42.4875 0C41.6312 0 40.9371 0.69416 40.9371 1.55045C40.9371 2.40674 41.6312 3.1009 42.4875 3.1009Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4795 3.1009C53.3358 3.1009 54.03 2.40674 54.03 1.55045C54.03 0.69416 53.3358 0 52.4795 0C51.6233 0 50.9291 0.69416 50.9291 1.55045C50.9291 2.40674 51.6233 3.1009 52.4795 3.1009Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.52045 13.0804C3.37674 13.0804 4.0709 12.3862 4.0709 11.5299C4.0709 10.6737 3.37674 9.97949 2.52045 9.97949C1.66416 9.97949 0.970001 10.6737 0.970001 11.5299C0.970001 12.3862 1.66416 13.0804 2.52045 13.0804Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5118 13.0804C13.3681 13.0804 14.0622 12.3862 14.0622 11.5299C14.0622 10.6737 13.3681 9.97949 12.5118 9.97949C11.6555 9.97949 10.9613 10.6737 10.9613 11.5299C10.9613 12.3862 11.6555 13.0804 12.5118 13.0804Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.5038 13.0804C23.3601 13.0804 24.0543 12.3862 24.0543 11.5299C24.0543 10.6737 23.3601 9.97949 22.5038 9.97949C21.6475 9.97949 20.9534 10.6737 20.9534 11.5299C20.9534 12.3862 21.6475 13.0804 22.5038 13.0804Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.4958 13.0804C33.3521 13.0804 34.0463 12.3862 34.0463 11.5299C34.0463 10.6737 33.3521 9.97949 32.4958 9.97949C31.6395 9.97949 30.9454 10.6737 30.9454 11.5299C30.9454 12.3862 31.6395 13.0804 32.4958 13.0804Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.4875 13.0804C43.3438 13.0804 44.038 12.3862 44.038 11.5299C44.038 10.6737 43.3438 9.97949 42.4875 9.97949C41.6312 9.97949 40.9371 10.6737 40.9371 11.5299C40.9371 12.3862 41.6312 13.0804 42.4875 13.0804Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4795 13.0804C53.3358 13.0804 54.03 12.3862 54.03 11.5299C54.03 10.6737 53.3358 9.97949 52.4795 9.97949C51.6233 9.97949 50.9291 10.6737 50.9291 11.5299C50.9291 12.3862 51.6233 13.0804 52.4795 13.0804Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.52045 23.0604C3.37674 23.0604 4.0709 22.3662 4.0709 21.5099C4.0709 20.6536 3.37674 19.9595 2.52045 19.9595C1.66416 19.9595 0.970001 20.6536 0.970001 21.5099C0.970001 22.3662 1.66416 23.0604 2.52045 23.0604Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5118 23.0604C13.3681 23.0604 14.0622 22.3662 14.0622 21.5099C14.0622 20.6536 13.3681 19.9595 12.5118 19.9595C11.6555 19.9595 10.9613 20.6536 10.9613 21.5099C10.9613 22.3662 11.6555 23.0604 12.5118 23.0604Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.5038 23.0604C23.3601 23.0604 24.0543 22.3662 24.0543 21.5099C24.0543 20.6536 23.3601 19.9595 22.5038 19.9595C21.6475 19.9595 20.9534 20.6536 20.9534 21.5099C20.9534 22.3662 21.6475 23.0604 22.5038 23.0604Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.4958 23.0604C33.3521 23.0604 34.0463 22.3662 34.0463 21.5099C34.0463 20.6536 33.3521 19.9595 32.4958 19.9595C31.6395 19.9595 30.9454 20.6536 30.9454 21.5099C30.9454 22.3662 31.6395 23.0604 32.4958 23.0604Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.4875 23.0604C43.3438 23.0604 44.038 22.3662 44.038 21.5099C44.038 20.6536 43.3438 19.9595 42.4875 19.9595C41.6312 19.9595 40.9371 20.6536 40.9371 21.5099C40.9371 22.3662 41.6312 23.0604 42.4875 23.0604Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4795 23.0604C53.3358 23.0604 54.03 22.3662 54.03 21.5099C54.03 20.6536 53.3358 19.9595 52.4795 19.9595C51.6233 19.9595 50.9291 20.6536 50.9291 21.5099C50.9291 22.3662 51.6233 23.0604 52.4795 23.0604Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.52045 33.0404C3.37674 33.0404 4.0709 32.3462 4.0709 31.4899C4.0709 30.6336 3.37674 29.9395 2.52045 29.9395C1.66416 29.9395 0.970001 30.6336 0.970001 31.4899C0.970001 32.3462 1.66416 33.0404 2.52045 33.0404Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5118 33.0404C13.3681 33.0404 14.0622 32.3462 14.0622 31.4899C14.0622 30.6336 13.3681 29.9395 12.5118 29.9395C11.6555 29.9395 10.9613 30.6336 10.9613 31.4899C10.9613 32.3462 11.6555 33.0404 12.5118 33.0404Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.5038 33.0404C23.3601 33.0404 24.0543 32.3462 24.0543 31.4899C24.0543 30.6336 23.3601 29.9395 22.5038 29.9395C21.6475 29.9395 20.9534 30.6336 20.9534 31.4899C20.9534 32.3462 21.6475 33.0404 22.5038 33.0404Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.4958 33.0404C33.3521 33.0404 34.0463 32.3462 34.0463 31.4899C34.0463 30.6336 33.3521 29.9395 32.4958 29.9395C31.6395 29.9395 30.9454 30.6336 30.9454 31.4899C30.9454 32.3462 31.6395 33.0404 32.4958 33.0404Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.4875 33.0404C43.3438 33.0404 44.038 32.3462 44.038 31.4899C44.038 30.6336 43.3438 29.9395 42.4875 29.9395C41.6312 29.9395 40.9371 30.6336 40.9371 31.4899C40.9371 32.3462 41.6312 33.0404 42.4875 33.0404Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4795 33.0404C53.3358 33.0404 54.03 32.3462 54.03 31.4899C54.03 30.6336 53.3358 29.9395 52.4795 29.9395C51.6233 29.9395 50.9291 30.6336 50.9291 31.4899C50.9291 32.3462 51.6233 33.0404 52.4795 33.0404Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.52045 43.0203C3.37674 43.0203 4.0709 42.3262 4.0709 41.4699C4.0709 40.6136 3.37674 39.9194 2.52045 39.9194C1.66416 39.9194 0.970001 40.6136 0.970001 41.4699C0.970001 42.3262 1.66416 43.0203 2.52045 43.0203Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5118 43.0203C13.3681 43.0203 14.0622 42.3262 14.0622 41.4699C14.0622 40.6136 13.3681 39.9194 12.5118 39.9194C11.6555 39.9194 10.9613 40.6136 10.9613 41.4699C10.9613 42.3262 11.6555 43.0203 12.5118 43.0203Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.5038 43.0203C23.3601 43.0203 24.0543 42.3262 24.0543 41.4699C24.0543 40.6136 23.3601 39.9194 22.5038 39.9194C21.6475 39.9194 20.9534 40.6136 20.9534 41.4699C20.9534 42.3262 21.6475 43.0203 22.5038 43.0203Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.4958 43.0203C33.3521 43.0203 34.0463 42.3262 34.0463 41.4699C34.0463 40.6136 33.3521 39.9194 32.4958 39.9194C31.6395 39.9194 30.9454 40.6136 30.9454 41.4699C30.9454 42.3262 31.6395 43.0203 32.4958 43.0203Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.4875 43.0203C43.3438 43.0203 44.038 42.3262 44.038 41.4699C44.038 40.6136 43.3438 39.9194 42.4875 39.9194C41.6312 39.9194 40.9371 40.6136 40.9371 41.4699C40.9371 42.3262 41.6312 43.0203 42.4875 43.0203Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4795 43.0203C53.3358 43.0203 54.03 42.3262 54.03 41.4699C54.03 40.6136 53.3358 39.9194 52.4795 39.9194C51.6233 39.9194 50.9291 40.6136 50.9291 41.4699C50.9291 42.3262 51.6233 43.0203 52.4795 43.0203Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.52045 53.0001C3.37674 53.0001 4.0709 52.3059 4.0709 51.4496C4.0709 50.5933 3.37674 49.8992 2.52045 49.8992C1.66416 49.8992 0.970001 50.5933 0.970001 51.4496C0.970001 52.3059 1.66416 53.0001 2.52045 53.0001Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5118 53.0001C13.3681 53.0001 14.0622 52.3059 14.0622 51.4496C14.0622 50.5933 13.3681 49.8992 12.5118 49.8992C11.6555 49.8992 10.9613 50.5933 10.9613 51.4496C10.9613 52.3059 11.6555 53.0001 12.5118 53.0001Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.5038 53.0001C23.3601 53.0001 24.0543 52.3059 24.0543 51.4496C24.0543 50.5933 23.3601 49.8992 22.5038 49.8992C21.6475 49.8992 20.9534 50.5933 20.9534 51.4496C20.9534 52.3059 21.6475 53.0001 22.5038 53.0001Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.4958 53.0001C33.3521 53.0001 34.0463 52.3059 34.0463 51.4496C34.0463 50.5933 33.3521 49.8992 32.4958 49.8992C31.6395 49.8992 30.9454 50.5933 30.9454 51.4496C30.9454 52.3059 31.6395 53.0001 32.4958 53.0001Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.4875 53.0001C43.3438 53.0001 44.038 52.3059 44.038 51.4496C44.038 50.5933 43.3438 49.8992 42.4875 49.8992C41.6312 49.8992 40.9371 50.5933 40.9371 51.4496C40.9371 52.3059 41.6312 53.0001 42.4875 53.0001Z"
                                            fill="#3758F9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4795 53.0001C53.3358 53.0001 54.03 52.3059 54.03 51.4496C54.03 50.5933 53.3358 49.8992 52.4795 49.8992C51.6233 49.8992 50.9291 50.5933 50.9291 51.4496C50.9291 52.3059 51.6233 53.0001 52.4795 53.0001Z"
                                            fill="#3758F9" />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Melissa Tatcher
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    Marketing Expert
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                fill="" />
                                            <path
                                                d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                fill="" />
                                            <path
                                                d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div
                            class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-02.png"
                                    alt="team image" class="h-[120px] w-[120px] rounded-full" />
                                <span
                                    class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                                <span
                                    class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                                    <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                            fill="#3056D3" />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Stuard Ferrel
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    Digital Marketer
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                fill="" />
                                            <path
                                                d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                fill="" />
                                            <path
                                                d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div
                            class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-03.png"
                                    alt="team image" class="h-[120px] w-[120px] rounded-full" />
                                <span
                                    class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                                <span
                                    class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                                    <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                            fill="#3056D3" />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Eva Hudson
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    Creative Designer
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                fill="" />
                                            <path
                                                d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                fill="" />
                                            <path
                                                d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div
                            class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-04.png"
                                    alt="team image" class="h-[120px] w-[120px] rounded-full" />
                                <span
                                    class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                                <span
                                    class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                                    <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                            fill="#3056D3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                            fill="#3056D3" />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Jackie Sanders
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    SEO Expert
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                fill="" />
                                            <path
                                                d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                fill="" />
                                            <path
                                                d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- ====== Contact Start ====== -->
        <!-- <section id="contact" class="relative py-20 md:py-[120px]">
            <div class="absolute left-0 top-0 -z-[1] h-full w-full dark:bg-dark"></div>
            <div class="absolute left-0 top-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] dark:bg-dark-700 lg:h-[45%] xl:h-1/2">
            </div>
            <div class="container px-4">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                        <div class="ud-contact-content-wrapper">
                            <div class="ud-contact-title mb-12 lg:mb-[150px]">
                                <span class="block mb-6 text-base font-medium text-dark dark:text-white">
                                    CONTACT US
                                </span>
                                <h2
                                    class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark dark:text-white">
                                    Let's talk about your problem.
                                </h2>
                            </div>
                            <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                                <div class="mb-8 flex w-[330px] max-w-full">
                                    <div class="mr-6 text-[32px] text-primary">
                                        <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                            <path
                                                d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                                            <path
                                                d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white">
                                            Our Location
                                        </h5>
                                        <p class="text-base text-body-color dark:text-dark-6">
                                            401 Broadway, 24th Floor, Orchard Cloud View, London
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex w-[330px] max-w-full">
                                    <div class="mr-6 text-[32px] text-primary">
                                        <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                            <path
                                                d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white">
                                            How Can We Help?
                                        </h5>
                                        <p class="text-base text-body-color dark:text-dark-6">
                                            info@yourdomain.com
                                        </p>
                                        <p class="mt-1 text-base text-body-color dark:text-dark-6">
                                            contact@yourdomain.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                        <div class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]"
                            data-wow-delay=".2s
              ">
                            <h3
                                class="mb-8 text-2xl font-semibold text-dark dark:text-white md:text-[28px] md:leading-[1.42]">
                                Send us a Message
                            </h3>
                            <form>
                                <div class="mb-[22px]">
                                    <label for="fullName"
                                        class="block mb-4 text-sm text-body-color dark:text-dark-6">Full Name*</label>
                                    <input type="text" name="fullName" placeholder="Adam Gelius"
                                        class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                                </div>
                                <div class="mb-[22px]">
                                    <label for="email"
                                        class="block mb-4 text-sm text-body-color dark:text-dark-6">Email*</label>
                                    <input type="email" name="email" placeholder="example@yourmail.com"
                                        class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                                </div>
                                <div class="mb-[22px]">
                                    <label for="phone"
                                        class="block mb-4 text-sm text-body-color dark:text-dark-6">Phone*</label>
                                    <input type="text" name="phone" placeholder="+885 1254 5211 552"
                                        class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                                </div>
                                <div class="mb-[30px]">
                                    <label for="message"
                                        class="block mb-4 text-sm text-body-color dark:text-dark-6">Message*</label>
                                    <textarea name="message" rows="1" placeholder="type your message here"
                                        class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"></textarea>
                                </div>
                                <div class="mb-0">
                                    <button type="submit"
                                        class="inline-flex items-center justify-center px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out rounded-md bg-primary hover:bg-blue-dark">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- ====== Contact End ====== -->
        <!-- ====== Brands Section Start -->
        <!-- <section class="pb-20 dark:bg-dark">
            <div class="container px-4">
                <div class="flex flex-wrap items-center justify-center gap-8 -mx-4 xl:gap-11">
                    <a href="https://graygrids.com/">
                        <img src="assets/images/brands/graygrids.svg" alt="graygrids" class="dark:hidden" />
                        <img src="/assets/images/brands/graygrids-white.svg" alt="graygrids"
                            class="hidden dark:block" />
                    </a>
                    <a href="https://lineicons.com/">
                        <img src="/assets/images/brands/lineicons.svg" alt="lineicons" class="dark:hidden" />
                        <img src="/assets/images/brands/lineicons-white.svg" alt="graygrids"
                            class="hidden dark:block" />
                    </a>
                    <a href="https://uideck.com/">
                        <img src="/assets/images/brands/uideck.svg" alt="uideck" class="dark:hidden" />
                        <img src="/assets/images/brands/uideck-white.svg" alt="graygrids" class="hidden dark:block" />
                    </a>
                    <a href="https://ayroui.com/">
                        <img src="/assets/images/brands/ayroui.svg" alt="ayroui" class="dark:hidden" />
                        <img src="/assets/images/brands/ayroui-white.svg" alt="graygrids" class="hidden dark:block" />
                    </a>
                    <a href="https://tailgrids.com/">
                        <img src="/assets/images/brands/tailgrids.svg" alt="tailgrids" class="dark:hidden" />
                        <img src="/assets/images/brands/tailgrids-white.svg" alt="graygrids"
                            class="hidden dark:block" />
                    </a>
                </div>
            </div>
        </section> -->
        <!-- ====== Brands Section End -->

    </Layout>

    <!-- <div
        class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div v-if="canLogin" class="p-6 sm:fixed sm:top-0 sm:right-0 text-end">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="font-semibold text-gray-600 ms-4 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link
                >
            </template>
</div>

<div class="p-6 mx-auto max-w-7xl lg:p-8">
    <div class="flex justify-center">
        <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="w-auto h-16 bg-gray-100 dark:bg-gray-900">
            <path
                d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                fill="#FF2D20" />
        </svg>
    </div>

    <div class="mt-16">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:gap-8">
            <a href="https://laravel.com/docs"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                    <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                        Laravel has wonderful documentation covering every aspect of the framework. Whether you
                        are a newcomer or have prior experience with Laravel, we recommend reading our
                        documentation from beginning to end.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="self-center w-6 h-6 mx-6 shrink-0 stroke-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>

            <a href="https://laracasts.com"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round"
                                d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                    <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                        development. Check them out, see for yourself, and massively level up your development
                        skills in the process.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="self-center w-6 h-6 mx-6 shrink-0 stroke-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>

            <a href="https://laravel-news.com"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                    <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                        Laravel News is a community driven portal and newsletter aggregating all of the latest
                        and most important news in the Laravel ecosystem, including new package releases and
                        tutorials.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="self-center w-6 h-6 mx-6 shrink-0 stroke-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>

            <div
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                    <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                        Laravel's robust library of first-party tools and libraries, such as
                        <a href="https://forge.laravel.com"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                        <a href="https://vapor.laravel.com"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                        <a href="https://nova.laravel.com"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                        and
                        <a href="https://envoyer.io"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                        help you take your projects to the next level. Pair them with powerful open source
                        libraries like
                        <a href="https://laravel.com/docs/billing"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                        <a href="https://laravel.com/docs/dusk"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                        <a href="https://laravel.com/docs/broadcasting"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                        <a href="https://laravel.com/docs/horizon"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                        <a href="https://laravel.com/docs/sanctum"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                        <a href="https://laravel.com/docs/telescope"
                            class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                        and more.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center px-6 mt-16 sm:items-center sm:justify-between">
        <div class="text-sm text-center sm:text-start">&nbsp;</div>

        <div class="text-sm text-center text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
            Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
        </div>
    </div>
</div>
</div> -->




</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
