<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps<{
    menuPath: string;
}>();

</script>

<template>
    <div class="flex justify-between">
        <div class="flex gap-2 py-5 justify-center items-center">
            <img src="toscana/logo.png" alt="logo" class="w-24 h-16" />
            <p class="text-xl text-center justify-center">Toscana Memmingen</p>
        </div>

        <div class="flex gap-5 justify-center items-center me-5 text-sm">
            <a :href="menuPath"
                class="hover:underline transition-all delay-150 ease-in-out hover:-translate-y-1 hover:duration-150">
            Speisekarte
            </a>

            <Link href="#about"
                class="hover:underline transition-all delay-150 ease-in-out hover:-translate-y-1 hover:duration-150">
            Über Uns
            </Link>

            <Link href="#location"
                class="hover:underline transition-all delay-150 ease-in-out hover:-translate-y-1 hover:duration-150">
            Standort
            </Link>

            <p class="flex gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                +49 1727211908
            </p>
        </div>
    </div>
</template>
