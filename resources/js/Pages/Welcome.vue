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
        <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
            <div class="container">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4">
                        <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                            <h1
                                class="mb-6 text-3xl font-bold mt-12 leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
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
    </Layout>
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
