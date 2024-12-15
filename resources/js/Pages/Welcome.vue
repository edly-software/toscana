<script setup lang="ts">
import Navigation from "@/Components/Navigation.vue";
import Button from "@/Components/ui/button/Button.vue";
import { Head, Link } from "@inertiajs/vue3";
import { GlobeIcon } from "@radix-icons/vue";
import AboutUsCarousel from "@/Components/AboutUsCarousel.vue";

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
            <Navigation :menuPath="menuPath"/>
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
                    Italienisches Flair im Herzen von Memmingen – erleben Sie authentische Küche, frisch zubereitet mit
                    Liebe und Leidenschaft. Unsere Terrasse grenzt direkt an die idyllische Memminger Ach und bietet Ihnen
                    ein unvergleichliches Genusserlebnis in einzigartiger Atmosphäre.
                </p>
                <p class="mt-5 text-xl inline-block md:hidden">
                    Italienisches Flair im Herzen von Memmingen – erleben Sie authentische Küche, frisch zubereitet mit
                    Liebe und Leidenschaft. Unsere Terrasse grenzt direkt an die idyllische Memminger Ach und bietet Ihnen
                    ein unvergleichliches Genusserlebnis in einzigartiger Atmosphäre.
                </p>

                <div class="flex flex-col md:flex-row md:gap-5 text-sm">
                    <Button class="mt-10 flex justify-center items-center gap-5">
                        <GlobeIcon />
                        <p>Bewerten Sie Uns</p>
                    </Button>
                    <a :href="menuPath">
                        <Button variant="secondary" class="mt-5 md:mt-10 flex justify-center items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>

                            <p>Unsere Speisekarte</p>
                        </Button>
                    </a>
                </div>
            </div>
        </div>

        <h1 class="flex gap-2.5 justify-center items-center my-10 mx-5 text-3xl md:col-span-2 font-bold">
            <span id="menu"> Speisekarte </span>
        </h1>
        <div class="flex justify-center items-center md:col-span-2">
            <a :href="menuPath">
                <Button class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                    </svg>

                    <p>Unsere Online Speisekarte</p>
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
                        Im Ristorante Toscana öffnet sich die Tür und sofort fühlt man sich, als wäre man in Italien. Ein
                        Ort, an dem Menschen zusammenkommen – Familien, Freunde, Paare, Jung und Alt –, um das Leben und
                        gutes Essen zu genießen. Die lebhafte Stimmung, das Lachen der Gäste und der köstliche Duft
                        frisch
                        zubereiteter Gerichte schaffen eine unverwechselbare italienische Lebensfreude. Hier darf man
                        ganz
                        man selbst sein, entspannt genießen und sich wie zu Hause fühlen.
                        <br />
                        <br />
                        Denn frisch gekocht schmeckt es doch am allerbesten! Im Toscana erwartet Sie täglich eine
                        Auswahl an
                        frischen und saisonalen Speisen, die mit Leidenschaft und Sorgfalt zubereitet werden. Unsere
                        Speisekarte ist ein liebevoll zusammengestelltes Meisterwerk, das Gaumen und Auge gleichermaßen
                        erfreut. Von herzhaften Klassikern bis zu überraschenden Kreationen – jedes Gericht spiegelt die
                        Hingabe unserer Küche wider.

                        <br />
                        <br />
                        Eine ganz besondere Spezialität des Hauses ist die Pinsa, der geschmackvolle Vorläufer der
                        Pizza.
                        Auf den ersten Blick ähnelt sie einer Pizza, doch der Unterschied liegt im Detail: Der spezielle
                        Brotteig ist eine harmonische Mischung aus Knusprigkeit und fluffiger Leichtigkeit. Belegt mit
                        frischen Zutaten Ihrer Wahl, wird die Pinsa zu einem einzigartigen Genusserlebnis, das Sie so
                        schnell nicht vergessen werden.
                        <br />
                        <br />
                        Tauchen Sie ein in das authentische Ambiente des Ristorante Toscana und lassen Sie sich von
                        unserer
                        Leidenschaft für die italienische Küche verzaubern. Hier wird jede Mahlzeit zu einem Fest für
                        die
                        Sinne – wir freuen uns auf Ihren Besuch!
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
                Besuchen Sie uns im Herzen von Memmingen! Sie finden das Ristorante Toscana in der Hirschgasse 7, 87700
                Memmingen – direkt am idyllischen Schrannenplatz und der malerischen Memminger Ach. Unsere Lage verbindet
                italienisches Flair mit dem Charme der Altstadt und lädt zum Genießen und Verweilen ein. Wir freuen uns auf
                Sie!
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
                    <a href="datenschutz" class="hover:underline me-4 md:me-6">Datenschutz</a>
                </li>
                <li>
                    <a href="impressum" class="hover:underline me-4 md:me-6">Impressum</a>
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
html{
    scroll-behavior: smooth;
}
</style>
