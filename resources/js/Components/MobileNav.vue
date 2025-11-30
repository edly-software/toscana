<script setup lang="ts">
import { ref } from 'vue';
import Button from './ui/button/Button.vue';
import {
    Drawer,
    DrawerContent,
    DrawerHeader,
    DrawerTitle,
    DrawerTrigger,
    DrawerClose,
} from '@/Components/ui/drawer';

const isOpen = ref(false);

const closeDrawer = () => {
    isOpen.value = false;
};
</script>

<template>
    <div class="fixed top-0 left-0 right-0 z-50 md:hidden">
        <!-- Mobile Header -->
        <div class="flex items-center justify-between px-5 py-4 bg-warmblack/95 backdrop-blur-md border-b border-stone-800/50">
            <a href="/">
                <img src="/toscana/logo.png" alt="Toscana Logo" class="w-14 h-10 opacity-90" />
            </a>
            
            <Drawer v-model:open="isOpen">
                <DrawerTrigger as-child>
                    <button class="p-2 text-stone-300 hover:text-gold-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </DrawerTrigger>
                
                <DrawerContent class="bg-warmblack border-stone-800">
                    <DrawerHeader class="text-center pb-2">
                        <div class="flex justify-center mb-4">
                            <img src="/toscana/logo.png" alt="Toscana Logo" class="w-16 h-11 opacity-80" />
                        </div>
                        <DrawerTitle class="text-xl font-extralight text-white tracking-wide">
                            Ristorante Toscana
                        </DrawerTitle>
                        <p class="text-stone-500 text-xs tracking-[0.2em] uppercase mt-1">Memmingen</p>
                    </DrawerHeader>
                    
                    <nav class="px-6 py-8 space-y-1">
                        <a 
                            href="menu.pdf" 
                            @click="closeDrawer"
                            class="flex items-center justify-between py-4 px-4 text-stone-300 hover:text-gold-400 hover:bg-stone-800/50 rounded-lg transition-all duration-300"
                        >
                            <span class="text-sm tracking-[0.1em] uppercase font-light">Speisekarte</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                        </a>
                        
                        <a 
                            href="#about" 
                            @click="closeDrawer"
                            class="flex items-center justify-between py-4 px-4 text-stone-300 hover:text-gold-400 hover:bg-stone-800/50 rounded-lg transition-all duration-300"
                        >
                            <span class="text-sm tracking-[0.1em] uppercase font-light">Uber Uns</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                        
                        <a 
                            href="#opening-hours" 
                            @click="closeDrawer"
                            class="flex items-center justify-between py-4 px-4 text-stone-300 hover:text-gold-400 hover:bg-stone-800/50 rounded-lg transition-all duration-300"
                        >
                            <span class="text-sm tracking-[0.1em] uppercase font-light">Offnungszeiten</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                        
                        <a 
                            href="#location" 
                            @click="closeDrawer"
                            class="flex items-center justify-between py-4 px-4 text-stone-300 hover:text-gold-400 hover:bg-stone-800/50 rounded-lg transition-all duration-300"
                        >
                            <span class="text-sm tracking-[0.1em] uppercase font-light">Standort</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </nav>
                    
                    <!-- Call to Action -->
                    <div class="px-6 pb-8">
                        <div class="p-6 bg-stone-900/50 rounded-lg border border-stone-800/50 text-center">
                            <p class="text-stone-400 text-sm font-light mb-4">Reservierung</p>
                            <a href="tel:+4983319744234" class="group inline-block">
                                <span class="text-xl font-light text-gold-400 group-hover:text-gold-300 transition-colors">
                                    +49 8331 9744234
                                </span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Footer Links -->
                    <div class="px-6 pb-8 pt-4 border-t border-stone-800/50">
                        <div class="flex justify-center gap-8">
                            <a href="datenschutz" class="text-stone-500 hover:text-stone-400 text-xs font-light transition-colors">
                                Datenschutz
                            </a>
                            <a href="impressum" class="text-stone-500 hover:text-stone-400 text-xs font-light transition-colors">
                                Impressum
                            </a>
                        </div>
                    </div>
                </DrawerContent>
            </Drawer>
        </div>
    </div>
</template>
