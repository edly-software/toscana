<script setup lang="ts">
import Navigation from "@/Components/Navigation.vue";
import MobileNav from "@/Components/MobileNav.vue";
import Button from "@/Components/ui/button/Button.vue";
import { Head, Link } from "@inertiajs/vue3";
import AboutUsCarousel from "@/Components/AboutUsCarousel.vue";
import { ref, onMounted, onUnmounted } from "vue";
import { Soup, Pizza, CakeSlice } from "lucide-vue-next";

defineProps<{
    canAccessAdmin: string;
    year: string;
    menuPath: string;
    pasta: any;
    pizza: any;
}>();

// Scroll reveal functionality
const observedElements = ref<Element[]>([]);
let observer: IntersectionObserver | null = null;

// Parallax effect for hero
const heroOffset = ref(0);
const isNavScrolled = ref(false);
const isMobile = ref(false);

const handleScroll = () => {
    // Only apply parallax on desktop for better mobile performance
    if (!isMobile.value) {
        heroOffset.value = window.scrollY * 0.4;
    }
    isNavScrolled.value = window.scrollY > 50;
};

const checkMobile = () => {
    isMobile.value = window.innerWidth < 768;
    // Reset parallax offset on mobile
    if (isMobile.value) {
        heroOffset.value = 0;
    }
};

onMounted(() => {
    // Check for mobile device
    checkMobile();
    window.addEventListener("resize", checkMobile);
    
    // Intersection Observer for scroll reveal
    observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.1, rootMargin: "0px 0px -50px 0px" }
    );

    // Observe all reveal elements
    document.querySelectorAll(".reveal").forEach((el) => {
        observer?.observe(el);
        observedElements.value.push(el);
    });

    // Add scroll listener for parallax
    window.addEventListener("scroll", handleScroll, { passive: true });
});

onUnmounted(() => {
    observer?.disconnect();
    window.removeEventListener("scroll", handleScroll);
    window.removeEventListener("resize", checkMobile);
});
</script>

<template>
    <Head title="Ristorante Toscana | Authentische Italienische Küche in Memmingen" />
    
    <div class="min-h-screen bg-ivory">
        <!-- Mobile Navigation -->
        <MobileNav />
        
        <!-- Desktop Navigation -->
        <header 
            class="hidden md:block fixed top-0 left-0 right-0 z-50 transition-all duration-500"
            :class="isNavScrolled 
                ? 'bg-warmblack/95 backdrop-blur-md shadow-elegant' 
                : 'bg-transparent'"
        >
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <Navigation :menuPath="menuPath" :isScrolled="isNavScrolled" />
            </div>
        </header>

        <!-- Hero Section - Cinematic & Immersive -->
        <section class="relative h-screen flex items-center overflow-hidden">
            <!-- Parallax Background -->
            <div 
                class="absolute inset-0 scale-110"
                :style="{ transform: `translateY(${heroOffset}px) scale(1.1)` }"
            >
                <img 
                    src="/toscana/third.jpg" 
                    alt="Ristorante Toscana" 
                    class="w-full h-full object-cover"
                />
            </div>
            
            <!-- Sophisticated Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-warmblack/70 via-warmblack/50 to-warmblack/80"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-warmblack/60 via-transparent to-transparent"></div>
            
            <!-- Subtle Grain Texture -->
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=\'0 0 256 256\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noise\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.85\' numOctaves=\'4\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noise)\'/%3E%3C/svg%3E');"></div>
            
            <!-- Mobile Logo -->
            <div class="absolute top-20 left-1/2 -translate-x-1/2 md:hidden z-10">
                <img 
                    src="/toscana/logo.png" 
                    alt="Toscana Logo" 
                    class="w-16 h-12 sm:w-20 sm:h-14 opacity-90 drop-shadow-lg" 
                />
            </div>

            <!-- Hero Content -->
            <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-8">
                <div class="max-w-3xl">
                    <!-- Decorative Element -->
                    <div class="hero-text-reveal flex items-center gap-4 mb-8">
                        <span class="block w-16 h-px bg-gradient-to-r from-gold-500 to-gold-300"></span>
                        <span class="text-gold-400 text-xs tracking-[0.3em] uppercase font-light">Authentische Italienische Küche</span>
                    </div>
                    
                    <!-- Main Title with Staggered Animation -->
                    <div class="overflow-hidden mb-2">
                        <span class="hero-text-reveal delay-1 block text-gold-400/80 text-xl md:text-2xl font-light tracking-[0.15em] uppercase">
                            Ristorante
                        </span>
                    </div>
                    
                    <div class="overflow-hidden mb-6">
                        <h1 class="hero-text-reveal delay-2 text-6xl sm:text-7xl md:text-8xl lg:text-9xl font-extralight text-white tracking-tight leading-[0.9]">
                            Toscana
                        </h1>
                    </div>
                    
                    <div class="overflow-hidden mb-10">
                        <p class="hero-text-reveal delay-3 text-2xl md:text-3xl text-stone-300/90 font-extralight tracking-wide">
                            Memmingen
                        </p>
                    </div>
                    
                    <!-- Elegant Tagline -->
                    <div class="hero-text-reveal delay-4 max-w-xl mb-12">
                        <p class="text-lg md:text-xl text-stone-400 font-light leading-relaxed tracking-wide">
                            Italienisches Flair im Herzen von Memmingen. Erleben Sie authentische Küche, 
                            frisch zubereitet mit Liebe und Leidenschaft.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="hero-text-reveal delay-5 flex flex-col sm:flex-row gap-4">
                        <a href="menu.pdf" class="group">
                            <Button 
                                class="relative overflow-hidden bg-gold-500 hover:bg-gold-400 text-warmblack border-0 px-6 sm:px-10 py-4 sm:py-7 text-sm tracking-[0.15em] uppercase font-medium transition-all duration-500 shadow-gold hover:shadow-gold-lg"
                            >
                                <span class="relative z-10 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:-translate-y-0.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>
                                    Speisekarte
                                </span>
                            </Button>
                        </a>
                        <a href="tel:+4983319744234" class="group">
                            <Button 
                                variant="outline" 
                                class="border-stone-500/50 text-white hover:border-gold-500/50 hover:text-gold-400 bg-transparent hover:bg-gold-500/5 px-6 sm:px-10 py-4 sm:py-7 text-sm tracking-[0.15em] uppercase font-light transition-all duration-500"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:rotate-12">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                Reservieren
                            </Button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-12 left-1/2 -translate-x-1/2 hidden md:flex flex-col items-center gap-3 text-stone-500">
                <span class="text-[10px] tracking-[0.3em] uppercase font-light">Entdecken</span>
                <div class="w-px h-12 bg-gradient-to-b from-gold-500/50 to-transparent animate-float"></div>
            </div>

            <!-- Decorative Corner Elements -->
            <div class="absolute top-8 left-8 w-20 h-20 border-l border-t border-gold-500/20 hidden lg:block"></div>
            <div class="absolute bottom-8 right-8 w-20 h-20 border-r border-b border-gold-500/20 hidden lg:block"></div>
        </section>

        <!-- Elegant Divider -->
        <div class="py-16 bg-ivory flex items-center justify-center">
            <div class="flex items-center gap-6">
                <span class="block w-24 h-px bg-gradient-to-r from-transparent via-gold-500/40 to-gold-500/40"></span>
                <svg class="w-6 h-6 text-gold-500/60" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L14.09 8.26L21 9.27L16 14.14L17.18 21.02L12 17.77L6.82 21.02L8 14.14L3 9.27L9.91 8.26L12 2Z"/>
                </svg>
                <span class="block w-24 h-px bg-gradient-to-l from-transparent via-gold-500/40 to-gold-500/40"></span>
            </div>
        </div>

        <!-- Menu Section -->
        <section id="menu" class="py-24 md:py-32 bg-ivory">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
                <div class="reveal">
                    <span class="text-gold-600 text-xs tracking-[0.3em] uppercase font-medium">Kulinarische Vielfalt</span>
                    <h2 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extralight text-charcoal-900 tracking-tight">
                        Unsere Speisekarte
                    </h2>
                    <div class="mt-4 w-16 h-px bg-gold-500/50 mx-auto"></div>
                </div>
                
                <p class="reveal stagger-1 mt-8 text-lg text-charcoal-600 max-w-2xl mx-auto font-light leading-relaxed">
                    Entdecken Sie unsere Auswahl an authentischen italienischen Gerichten, 
                    von handgemachter Pasta bis zur traditionellen Pinsa.
                </p>
                
                <!-- Featured Items Preview -->
                <div class="reveal stagger-2 mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group p-8 bg-white rounded-lg shadow-sm hover:shadow-elegant transition-all duration-500 card-lift">
                        <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gold-50 flex items-center justify-center group-hover:bg-gold-100 transition-colors duration-300">
                            <Soup class="w-8 h-8 text-gold-600" :stroke-width="1.5" />
                        </div>
                        <h3 class="text-xl font-light text-charcoal-800 mb-3">Pasta Fresca</h3>
                        <p class="text-charcoal-500 text-sm leading-relaxed">Täglich frisch zubereitete Pasta nach traditionellen Rezepten</p>
                    </div>
                    
                    <div class="group p-8 bg-white rounded-lg shadow-sm hover:shadow-elegant transition-all duration-500 card-lift">
                        <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gold-50 flex items-center justify-center group-hover:bg-gold-100 transition-colors duration-300">
                            <Pizza class="w-8 h-8 text-gold-600" :stroke-width="1.5" />
                        </div>
                        <h3 class="text-xl font-light text-charcoal-800 mb-3">Pinsa Romana</h3>
                        <p class="text-charcoal-500 text-sm leading-relaxed">Die leichte Alternative zur Pizza - knusprig und unwiderstehlich</p>
                    </div>
                    
                    <div class="group p-8 bg-white rounded-lg shadow-sm hover:shadow-elegant transition-all duration-500 card-lift">
                        <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-gold-50 flex items-center justify-center group-hover:bg-gold-100 transition-colors duration-300">
                            <CakeSlice class="w-8 h-8 text-gold-600" :stroke-width="1.5" />
                        </div>
                        <h3 class="text-xl font-light text-charcoal-800 mb-3">Dolci</h3>
                        <p class="text-charcoal-500 text-sm leading-relaxed">Hausgemachte Desserts für einen süßen Abschluss</p>
                    </div>
                </div>
                
                <div class="reveal stagger-3 mt-16">
                    <a href="menu.pdf" class="group inline-block">
                        <Button class="bg-charcoal-900 hover:bg-charcoal-800 text-white px-12 py-7 text-sm tracking-[0.15em] uppercase font-light transition-all duration-500 shadow-sm hover:shadow-elegant">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:translate-y-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                            Vollständige Speisekarte
                        </Button>
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section with Storytelling Feel -->
        <section id="about" class="py-24 md:py-32 bg-charcoal-900 text-white relative overflow-hidden">
            <!-- Background Accent -->
            <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-gold-500/5 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-1/2 h-1/2 bg-gradient-to-tr from-gold-500/3 to-transparent"></div>
            
            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <!-- Text Content -->
                    <div class="order-2 lg:order-1">
                        <div class="reveal">
                            <span class="text-gold-400 text-xs tracking-[0.3em] uppercase font-medium">Willkommen</span>
                            <h2 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extralight tracking-tight">
                                Über Uns
                            </h2>
                            <div class="mt-4 w-16 h-px bg-gold-500/50"></div>
                        </div>
                        
                        <div class="reveal stagger-1 mt-10 space-y-6 text-stone-300 font-light leading-relaxed text-lg">
                            <p>
                                Im Ristorante Toscana öffnet sich die Tür und sofort fühlt man sich, als wäre man in Italien.
                                Ein Ort, an dem Menschen zusammenkommen - Familien, Freunde, Paare - um das Leben und
                                gutes Essen zu genießen.
                            </p>
                            <p>
                                Die lebhafte Stimmung, das Lachen der Gäste und der köstliche Duft frisch zubereiteter Gerichte 
                                schaffen eine unverwechselbare italienische Lebensfreude.
                            </p>
                        </div>

                        <!-- Pinsa Highlight -->
                        <div class="reveal stagger-2 mt-12 p-8 bg-white/5 backdrop-blur-sm border border-gold-500/20 rounded-lg">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-gold-500/20 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-gold-400" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2L14.09 8.26L21 9.27L16 14.14L17.18 21.02L12 17.77L6.82 21.02L8 14.14L3 9.27L9.91 8.26L12 2Z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-light text-gold-400 mb-2">Unsere Spezialitat: Die Pinsa</h3>
                                    <p class="text-stone-400 font-light leading-relaxed">
                                        Eine ganz besondere Spezialität des Hauses ist die Pinsa, der geschmackvolle Vorläufer der Pizza.
                                        Der spezielle Brotteig ist eine harmonische Mischung aus Knusprigkeit und fluffiger Leichtigkeit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel -->
                    <div class="order-1 lg:order-2 reveal">
                        <div class="relative">
                            <!-- Decorative frame -->
                            <div class="absolute -inset-4 border border-gold-500/20 rounded-lg -z-10"></div>
                            <AboutUsCarousel />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Opening Hours Section -->
        <section id="opening-hours" class="py-24 md:py-32 bg-champagne relative">
            <!-- Subtle pattern -->
            <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(circle at 1px 1px, #c9a954 1px, transparent 0); background-size: 40px 40px;"></div>
            
            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
                    <!-- Hours -->
                    <div>
                        <div class="reveal">
                            <span class="text-gold-600 text-xs tracking-[0.3em] uppercase font-medium">Besuchen Sie uns</span>
                            <h2 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extralight text-charcoal-900 tracking-tight">
                                Öffnungszeiten
                            </h2>
                            <div class="mt-4 w-16 h-px bg-gold-500/50"></div>
                        </div>
                        
                        <div class="reveal stagger-1 mt-12 space-y-0">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-5 border-b border-charcoal-200/50 group hover:bg-white/50 px-4 -mx-4 transition-colors duration-300 gap-1 sm:gap-0">
                                <span class="text-charcoal-800 font-light">Montag</span>
                                <span class="text-charcoal-600 font-light text-sm sm:text-base">17:30 - 23:00</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-5 border-b border-charcoal-200/50 group hover:bg-white/50 px-4 -mx-4 transition-colors duration-300 gap-1 sm:gap-0">
                                <span class="text-charcoal-800 font-light">Dienstag</span>
                                <span class="text-charcoal-600 font-light text-sm sm:text-base">11:30 - 14:00, 17:30 - 23:00</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-5 border-b border-charcoal-200/50 group hover:bg-white/50 px-4 -mx-4 transition-colors duration-300 gap-1 sm:gap-0">
                                <span class="text-charcoal-800 font-light">Mittwoch</span>
                                <span class="text-charcoal-600 font-light text-sm sm:text-base">11:30 - 14:00, 17:30 - 23:00</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-5 border-b border-charcoal-200/50 group hover:bg-white/50 px-4 -mx-4 transition-colors duration-300 gap-1 sm:gap-0">
                                <span class="text-charcoal-800 font-light">Donnerstag</span>
                                <span class="text-charcoal-600 font-light text-sm sm:text-base">11:30 - 14:00, 17:30 - 23:00</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-5 border-b border-charcoal-200/50 group hover:bg-white/50 px-4 -mx-4 transition-colors duration-300 gap-1 sm:gap-0">
                                <span class="text-charcoal-800 font-light">Freitag</span>
                                <span class="text-charcoal-600 font-light text-sm sm:text-base">17:30 - 23:00</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-5 border-b border-charcoal-200/50 group hover:bg-white/50 px-4 -mx-4 transition-colors duration-300 gap-1 sm:gap-0">
                                <span class="text-charcoal-800 font-light">Samstag</span>
                                <span class="text-charcoal-600 font-light text-sm sm:text-base">11:30 - 14:00, 17:30 - 23:00</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-5 border-b border-charcoal-200/50 group hover:bg-white/50 px-4 -mx-4 transition-colors duration-300 gap-1 sm:gap-0">
                                <span class="text-charcoal-800 font-light">Sonntag</span>
                                <span class="text-charcoal-600 font-light text-sm sm:text-base">11:30 - 14:00, 17:30 - 23:00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Reservation Card -->
                    <div class="flex items-center justify-center">
                        <div class="reveal w-full max-w-md bg-charcoal-900 p-12 rounded-lg text-center relative overflow-hidden shadow-elegant-lg">
                            <!-- Decorative background -->
                            <div class="absolute inset-0 opacity-10">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-radial from-gold-500/50 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-radial from-gold-500/30 to-transparent"></div>
                            </div>
                            
                            <div class="relative z-10">
                                <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gold-500/10 flex items-center justify-center border border-gold-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-10 h-10 text-gold-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                </div>
                                
                                <h3 class="text-2xl font-extralight text-white mb-4 tracking-wide">Reservierung</h3>
                                <p class="text-stone-400 font-light mb-8 leading-relaxed">
                                    Für Reservierungen rufen Sie uns gerne an oder besuchen Sie uns direkt.
                                </p>
                                
                                <a href="tel:+4983319744234" class="group inline-block">
                                    <span class="text-3xl font-light text-gold-400 hover:text-gold-300 transition-colors duration-300 tracking-wide">
                                        +49 8331 9744234
                                    </span>
                                </a>
                                
                                <div class="mt-8 pt-8 border-t border-stone-700/50">
                                    <p class="text-stone-500 text-sm font-light italic tracking-wide">
                                        Buon Appetito!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section id="location" class="py-24 md:py-32 bg-ivory">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <!-- Map -->
                    <div class="order-2 lg:order-1 reveal">
                        <div class="relative">
                            <!-- Decorative frame -->
                            <div class="absolute -inset-4 bg-gradient-to-br from-gold-100/50 to-transparent rounded-lg -z-10"></div>
                            <div class="rounded-lg overflow-hidden shadow-elegant border border-stone-200">
                                <iframe
                                    src="https://www.openstreetmap.org/export/embed.html?bbox=10.181861221790315%2C47.981805387916175%2C10.185557305812837%2C47.98331887193618&amp;layer=mapnik"
                                    class="w-full h-[300px] sm:h-[350px] md:h-[450px]"
                                    title="Standort Ristorante Toscana"
                                ></iframe>
                            </div>
                        </div>
                        <div class="mt-6 text-center">
                            <a 
                                href="https://www.openstreetmap.org/#map=19/47.982589/10.183583" 
                                target="_blank" 
                                rel="noopener"
                                class="inline-flex items-center gap-2 text-gold-600 hover:text-gold-700 text-sm font-light tracking-wide transition-colors group"
                            >
                                Größere Karte anzeigen
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Location Info -->
                    <div class="order-1 lg:order-2">
                        <div class="reveal">
                            <span class="text-gold-600 text-xs tracking-[0.3em] uppercase font-medium">Anfahrt</span>
                            <h2 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extralight text-charcoal-900 tracking-tight">
                                Wo Sie uns finden
                            </h2>
                            <div class="mt-4 w-16 h-px bg-gold-500/50"></div>
                        </div>
                        
                        <div class="reveal stagger-1 mt-10 space-y-6 text-charcoal-600 font-light leading-relaxed text-lg">
                            <p>
                                Besuchen Sie uns im Herzen von Memmingen. Sie finden das Ristorante Toscana 
                                direkt am idyllischen Schrannenplatz und der malerischen Memminger Ach.
                            </p>
                            <p>
                                Unsere Lage verbindet italienisches Flair mit dem Charme der Altstadt 
                                und lädt zum Genießen und Verweilen ein.
                            </p>
                        </div>

                        <!-- Address Card -->
                        <div class="reveal stagger-2 mt-12 p-8 bg-white rounded-lg shadow-sm border border-stone-100 card-lift">
                            <div class="flex items-start gap-5">
                                <div class="w-14 h-14 rounded-full bg-gold-50 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-gold-600">
                                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-light text-charcoal-800 text-lg mb-2">Adresse</h3>
                                    <p class="text-charcoal-600 font-light leading-relaxed">
                                        Hirschgasse 7<br />
                                        87700 Memmingen<br />
                                        Deutschland
                                    </p>
                                </div>
                            </div>
                        </div>

                        <p class="reveal stagger-3 mt-10 text-charcoal-500 text-xl font-extralight italic">
                            Wir freuen uns auf Ihren Besuch!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-warmblack py-16 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-gold-500/30 to-transparent"></div>
            
            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
                <div class="flex flex-col items-center text-center mb-12">
                    <img src="/toscana/logo.png" alt="Toscana Logo" class="w-24 h-16 opacity-80 mb-6" />
                    <h3 class="text-2xl font-extralight text-white tracking-wide">Ristorante Toscana</h3>
                    <p class="text-stone-500 text-sm mt-2 tracking-widest uppercase">Memmingen</p>
                </div>
                
                <div class="flex flex-col md:flex-row justify-between items-center gap-8 pt-8 border-t border-stone-800/50">
                    <span class="text-stone-500 text-sm font-light">
                        {{ year }} Ristorante Toscana. Alle Rechte vorbehalten.
                    </span>
                    
                    <nav class="flex flex-wrap items-center justify-center md:justify-start gap-4 md:gap-8">
                        <a href="datenschutz" class="py-2 text-stone-500 hover:text-gold-400 text-sm font-light transition-colors duration-300">
                            Datenschutz
                        </a>
                        <a href="impressum" class="py-2 text-stone-500 hover:text-gold-400 text-sm font-light transition-colors duration-300">
                            Impressum
                        </a>
                        <a href="tel:+4983319744234" class="py-2 text-stone-500 hover:text-gold-400 text-sm font-light transition-colors duration-300">
                            Kontakt
                        </a>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>
/* Hero text reveal animation */
.hero-text-reveal {
    animation: heroReveal 1s cubic-bezier(0.25, 0.1, 0.25, 1) forwards;
    opacity: 0;
}
.hero-text-reveal.delay-1 { animation-delay: 0.2s; }
.hero-text-reveal.delay-2 { animation-delay: 0.4s; }
.hero-text-reveal.delay-3 { animation-delay: 0.6s; }
.hero-text-reveal.delay-4 { animation-delay: 0.8s; }
.hero-text-reveal.delay-5 { animation-delay: 1s; }

@keyframes heroReveal {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Scroll reveal */
.reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s cubic-bezier(0.25, 0.1, 0.25, 1), transform 0.8s cubic-bezier(0.25, 0.1, 0.25, 1);
}
.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}
.stagger-1 { transition-delay: 0.15s; }
.stagger-2 { transition-delay: 0.3s; }
.stagger-3 { transition-delay: 0.45s; }

/* Card lift effect */
.card-lift {
    transition: transform 0.4s cubic-bezier(0.25, 0.1, 0.25, 1), box-shadow 0.4s cubic-bezier(0.25, 0.1, 0.25, 1);
}
.card-lift:hover {
    transform: translateY(-4px);
}
</style>
