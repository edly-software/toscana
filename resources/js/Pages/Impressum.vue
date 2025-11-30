<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";

defineProps<{
    year: number;
}>();
</script>

<template>
    <Head title="Impressum" />
    
    <!-- Header -->
    <div class="hidden md:flex justify-between mb-10">
        <Link href="/" class="flex gap-2 py-5 justify-center items-center hover:opacity-80 transition-opacity">
            <img src="/toscana/logo.png" alt="logo" class="w-24 h-16" />
            <p class="text-xl text-center justify-center">Toscana Memmingen</p>
        </Link>

        <div class="flex gap-5 justify-center items-center me-5 text-sm">
            <Link
                href="/"
                class="hover:underline transition-all delay-150 ease-in-out hover:-translate-y-1 hover:duration-150"
            >
                Startseite
            </Link>
            <Link
                href="/datenschutz"
                class="hover:underline transition-all delay-150 ease-in-out hover:-translate-y-1 hover:duration-150"
            >
                Datenschutz
            </Link>
            <p class="flex gap-1">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"
                    />
                </svg>
                08331 9744234
            </p>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="flex md:hidden justify-between items-center px-4 py-4 mb-6">
        <Link href="/" class="flex gap-2 items-center">
            <img src="/toscana/logo.png" alt="logo" class="w-16 h-10" />
        </Link>
        <Link href="/" class="text-sm text-gray-600 hover:underline">
            Zurück zur Startseite
        </Link>
    </div>

    <!-- Content -->
    <div class="max-w-4xl mx-auto px-6 md:px-8">
        <!-- Page Title -->
        <div class="mb-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Impressum</h1>
            <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full"></div>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
            <!-- Section: Angaben gemäß § 5 TMG -->
            <div class="p-8 border-b border-gray-100">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <span class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                    </span>
                    Angaben gemäß § 5 TMG
                </h2>
                <div class="ml-10 text-gray-600 leading-relaxed">
                    <p class="font-semibold text-gray-800">Aflah Zaag</p>
                    <p>Hirschgasse 7</p>
                    <p>87700 Memmingen</p>
                    <p class="mt-3">
                        <span class="font-medium text-gray-700">Telefon:</span> 
                        <a href="tel:083319744234" class="text-orange-600 hover:underline">08331 9744234</a>
                    </p>
                    <p>
                        <span class="font-medium text-gray-700">E-Mail:</span> 
                        <a href="mailto:ristorante.toscana.memmingen@gmail.com" class="text-orange-600 hover:underline">ristorante.toscana.memmingen@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Section: Vertreten durch -->
            <div class="p-8 bg-gray-50 border-b border-gray-100">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <span class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </span>
                    Vertreten durch
                </h2>
                <div class="ml-10 text-gray-600">
                    <p class="font-semibold text-gray-800">Aflah Zaag</p>
                </div>
            </div>

            <!-- Section: Verantwortlich für den Inhalt -->
            <div class="p-8 bg-gray-50">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <span class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                    </span>
                    Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV
                </h2>
                <div class="ml-10 text-gray-600 leading-relaxed">
                    <p class="font-semibold text-gray-800">Aflah Zaag</p>
                    <p>Hirschgasse 7</p>
                    <p>87700 Memmingen</p>
                </div>
            </div>
        </div>

        <!-- Back to Home Link -->
        <div class="mt-10 text-center">
            <Link 
                href="/" 
                class="inline-flex items-center gap-2 text-gray-600 hover:text-orange-600 transition-colors"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Zurück zur Startseite
            </Link>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white rounded-lg shadow mt-16">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">© {{ year }}
                <a href="/" class="hover:underline">Toscana Memmingen</a>.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
                <li>
                    <Link href="/datenschutz" class="hover:underline me-4 md:me-6">Datenschutz</Link>
                </li>
                <li>
                    <Link href="/impressum" class="hover:underline me-4 md:me-6">Impressum</Link>
                </li>
                <li>
                    <Link href="/" class="hover:underline">Kontakt aufnehmen</Link>
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

html {
    scroll-behavior: smooth;
}
</style>
