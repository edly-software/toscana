<script setup lang="ts">
import Navigation from "@/Components/Navigation.vue";
import Button from "@/Components/ui/button/Button.vue";
import { Head, Link } from "@inertiajs/vue3";
import { GlobeIcon } from "@radix-icons/vue";
import HotDrinks from "@/Components/menu/HotDrinks.vue";
import NormalDrinks from "@/Components/menu/NormalDrinks.vue";
import AboutUsCarousel from "@/Components/AboutUsCarousel.vue";
import Pasta from "@/Components/menu/Pasta.vue";
import Pizza from "@/Components/menu/Pizza.vue";

import {
    Tooltip,
    TooltipContent,
    TooltipProvider,
    TooltipTrigger,
} from "@/Components/ui/tooltip";

defineProps<{
    canAccessAdmin: string;
    year: string;
    menuPath: string;
    pasta: any;
    pizza: any;
}>();
</script>
<template>
    <Head title="Welcome" />
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="hidden md:inline md:col-span-2 mb-10">
            <Navigation />
        </div>

        <div class="relative flex justify-center max-h-screen">
            <div class="absolute h-full md:h-auto bg-slate-800 opacity-50 inset-0 md:hidden"></div>
            <img src="/toscana/third.jpg" alt="Toscana Picture" class="object-fill md:object-scale-down" />
        </div>
        <div class="flex gap-2 py-5 justify-center items-center md:hidden">
            <img src="toscana/logo.png" alt="logo" class="w-24 h-16" />
        </div>
        <div
            class="absolute top-5 right-5 left-5 bottom-5 flex flex-col justify-center text-white px-10 md:relative max-h-screen">
            <div class="text-white md:text-slate-900 p-5 rounded-md md:h-1/2 flex flex-col justify-center items-center">
                <p class="text-5xl md:text-7xl font-bold">Toscana Memmingen</p>
                <p class="mt-5 text-xl hidden md:inline-block text-justify leading-relaxed whitespace-pre-wrap">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Officia voluptatum assumenda, quaerat, quibusdam vel saepe
                    itaque reprehenderit animi laborum, dolor nobis! Ad
                    architecto repudiandae sunt neque quaerat quibusdam
                    blanditiis quia incidunt ullam eligendi iste a non iure
                    totam, ipsam doloribus. Perferendis, tempora cum molestiae
                    voluptatibus iusto minima corporis nulla pariatur.
                </p>
                <p class="mt-5 text-xl inline-block md:hidden">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Perferendis, tempora cum molestiae voluptatibus iusto minima
                    corporis nulla pariatur.
                </p>

                <div class="flex flex-col md:flex-row md:gap-5 text-sm">
                    <Button class="mt-10 flex justify-center items-center gap-5">
                        <GlobeIcon />
                        <p>Bewerten Sie Uns</p>
                    </Button>
                    <Button variant="secondary" class="mt-5 md:mt-10 flex justify-center items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>

                        <p>Unsere Speisekarte</p>
                    </Button>
                </div>
            </div>
        </div>

        <span class="line my-5 col-span-1 md:col-span-2"></span>

        <h1 class="flex gap-2.5 justify-center items-center my-10 mx-5 text-3xl md:col-span-2 font-bold">
            <span id="menu"> Speisekarte </span>

            <div>
                <TooltipProvider>
                    <Tooltip>
                        <TooltipTrigger as-child>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>
                        </TooltipTrigger>
                        <TooltipContent>
                            <p>
                                Diese Speisekarte beinhaltet nicht all unserer
                                Produkte! Für mehr Produkte besuchen Sie die
                                Online Speisekarte
                            </p>
                        </TooltipContent>
                    </Tooltip>
                </TooltipProvider>
            </div>
        </h1>
        <div class="md:border border-slate-900 rounded-lg md:ms-10 md:p-5">
            <HotDrinks />
        </div>
        <div class="md:border border-slate-900 rounded-lg md:me-10 md:p-5">
            <NormalDrinks />
        </div>
        <div class="md:border border-slate-900 rounded-lg md:ms-10 md:p-5">
            <Pasta :pasta="pasta" />
        </div>
        <div class="md:border border-slate-900 rounded-lg md:me-10 md:p-5">
            <Pizza :pizzas="pizza" />
        </div>

        <div class="flex justify-center items-center md:col-span-2 my-10">
            <a :href="menuPath">
                <Button class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                    </svg>

                    <p>Mehr gerichte in der Online Speisekarte</p>
                </Button>
            </a>
        </div>

        <span class="line my-5 col-span-1 md:col-span-2"></span>

        <div class="px-5 md:px-24 grid grid-cols-1 md:grid-cols-2 md:col-span-2 mt-5 gap-5">
            <div class="flex flex-col gap-5">
                <p id="about" class="text-center text-2xl font-bold">
                    Über Uns
                </p>
                <div class="flex justify-center items-center">
                    <p
                        class="block text-wrap w-96 md:w-full text:sm md:text-xl p-6 rounded-lg text-justify leading-relaxed whitespace-pre-wrap">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Excepturi voluptatem ullam eum sed. Aperiam, quam ut
                        esse perferendis non molestiae labore debitis inventore
                        aut iure unde, voluptatibus laudantium expedita sed
                        distinctio. Nostrum quo veniam recusandae natus odio
                        repudiandae, repellat, suscipit eaque similique earum
                        pariatur iusto. Ut esse quaerat numquam aut illo
                        repellat eos inventore. Velit eveniet in omnis facilis
                        tempore iusto, aspernatur dolorem molestias incidunt
                        doloribus neque, impedit quibusdam veniam ipsum unde
                        voluptate numquam inventore necessitatibus ducimus ullam
                        vitae! Voluptates assumenda reprehenderit voluptatum
                        consequatur deserunt ex, aspernatur officia quidem a
                        consectetur tenetur sapiente quia fugiat modi ratione
                        suscipit culpa corrupti reiciendis omnis beatae ut. Ut
                        culpa quo deleniti maxime dicta sunt illum accusantium,
                        saepe numquam officia ab repellat id nihil quasi dolor,
                        porro magnam earum? Adipisci earum dolores eveniet
                        obcaecati voluptatibus vero autem sequi modi fugit
                        praesentium facere laborum aliquid, odit possimus
                        consectetur veniam expedita laboriosam id labore!
                        Laboriosam, modi.
                    </p>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <AboutUsCarousel />
            </div>
        </div>

        <span class="line my-5 col-span-1 md:col-span-2"></span>

        <div class="px-10 flex flex-col justify-center items-center">
            <iframe
                src="https://www.openstreetmap.org/export/embed.html?bbox=10.181861221790315%2C47.981805387916175%2C10.185557305812837%2C47.98331887193618&amp;layer=mapnik"
                class="rounded-lg w-full h-[300px] mx-5"></iframe><br /><Button><a
                    href="https://www.openstreetmap.org/#map=19/47.982589/10.183583">Ansicht vergrößern</a></Button>
        </div>

        <div class="px-5 flex flex-col justify-center items-center gap-5 text-center">
            <p id="location" class="text-center text-2xl font-bold">
                Wo Sie uns Finden
            </p>
            <p
                class="block text-wrap w-96 md:w-full text:sm md:text-xl p-6 rounded-lg text-justify leading-relaxed whitespace-pre-wrap">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut eos
                fugiat, nostrum corporis aspernatur quibusdam sint rem suscipit
                voluptates impedit libero omnis optio itaque perspiciatis
                excepturi? Hic recusandae aut error praesentium eligendi
                deserunt repudiandae excepturi ut nam, quaerat officia eaque?
            </p>
        </div>
    </div>

    <footer class="bg-white rounded-lg shadow mt-16">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ year }}
                <a href="/" class="hover:underline">Toscana Memmingen</a>.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <Link href="#" class="hover:underline me-4 md:me-6">Datenschutz</Link>
                </li>
                <li>
                    <Link href="#" class="hover:underline me-4 md:me-6">Impressum</Link>
                </li>
                <li>
                    <Link href="#" class="hover:underline">Kontakt aufnehmen</Link>
                </li>
            </ul>
        </div>
    </footer>
</template>

<style>
@media only screen and (min-width: 600px) {
    html {
        padding: 5rem;
    }
}

.line {
    height: 8px;
    padding: 0 5px;
    background: url("/toscana/dotted.png") repeat-x;
    background-clip: border-box;
    background-clip: content-box;
}
</style>
