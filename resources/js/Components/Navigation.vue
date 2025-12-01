<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps<{
    menuPath: string;
    isScrolled?: boolean;
}>();
</script>

<template>
    <nav class="flex justify-between items-center py-5">
        <!-- Logo & Brand -->
        <Link href="/" class="flex items-center gap-4 group">
            <img 
                src="/toscana/logo.png" 
                alt="Toscana Logo" 
                class="w-16 h-11 transition-all duration-500 group-hover:opacity-80"
                :class="isScrolled ? 'opacity-100' : 'opacity-90'"
            />
            <div class="hidden lg:block">
                <p 
                    class="text-lg font-extralight tracking-[0.1em] transition-colors duration-500"
                    :class="isScrolled ? 'text-white' : 'text-white'"
                >
                    Ristorante Toscana
                </p>
                <p 
                    class="text-[10px] tracking-[0.3em] uppercase transition-colors duration-500"
                    :class="isScrolled ? 'text-stone-400' : 'text-stone-400'"
                >
                    Memmingen
                </p>
            </div>
        </Link>

        <!-- Navigation Links -->
        <div class="flex items-center gap-10">
            <a
                href="menu.pdf"
                class="relative text-sm font-light tracking-[0.1em] uppercase transition-all duration-500 group"
                :class="isScrolled ? 'text-stone-300 hover:text-gold-400' : 'text-stone-300 hover:text-gold-400'"
            >
                <span class="relative z-10">Speisekarte</span>
                <span class="absolute bottom-0 left-0 w-0 h-px bg-gradient-to-r from-gold-400 to-gold-300 group-hover:w-full transition-all duration-500"></span>
            </a>

            <a
                href="#about"
                class="relative text-sm font-light tracking-[0.1em] uppercase transition-all duration-500 group"
                :class="isScrolled ? 'text-stone-300 hover:text-gold-400' : 'text-stone-300 hover:text-gold-400'"
            >
                <span class="relative z-10">Über Uns</span>
                <span class="absolute bottom-0 left-0 w-0 h-px bg-gradient-to-r from-gold-400 to-gold-300 group-hover:w-full transition-all duration-500"></span>
            </a>

            <a
                href="#opening-hours"
                class="relative text-sm font-light tracking-[0.1em] uppercase transition-all duration-500 group"
                :class="isScrolled ? 'text-stone-300 hover:text-gold-400' : 'text-stone-300 hover:text-gold-400'"
            >
                <span class="relative z-10">Öffnungszeiten</span>
                <span class="absolute bottom-0 left-0 w-0 h-px bg-gradient-to-r from-gold-400 to-gold-300 group-hover:w-full transition-all duration-500"></span>
            </a>

            <a
                href="#location"
                class="relative text-sm font-light tracking-[0.1em] uppercase transition-all duration-500 group"
                :class="isScrolled ? 'text-stone-300 hover:text-gold-400' : 'text-stone-300 hover:text-gold-400'"
            >
                <span class="relative z-10">Standort</span>
                <span class="absolute bottom-0 left-0 w-0 h-px bg-gradient-to-r from-gold-400 to-gold-300 group-hover:w-full transition-all duration-500"></span>
            </a>

            <!-- Divider -->
            <span class="w-px h-6 bg-stone-600/50"></span>

            <!-- Phone -->
            <a 
                href="tel:+4983319744234" 
                class="flex items-center gap-2.5 text-gold-400 hover:text-gold-300 font-light text-sm tracking-wide transition-all duration-300 group"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4 transition-transform duration-300 group-hover:rotate-12"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"
                    />
                </svg>
                <span>08331 9744234</span>
            </a>
        </div>
    </nav>
</template>
