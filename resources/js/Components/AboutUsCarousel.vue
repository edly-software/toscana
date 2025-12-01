<script setup lang="ts">
import { Card, CardContent } from "@/Components/ui/card";
import {
    Carousel,
    CarouselContent,
    CarouselItem,
    CarouselNext,
    CarouselPrevious,
} from "@/Components/ui/carousel";

let images = [
    { src: "/toscana/first.jpg", alt: "Restaurant Interior" },
    { src: "/toscana/third.jpg", alt: "Dining Experience" },
    { src: "/toscana/fourth.jpg", alt: "Culinary Delights" },
];

const dontLoad = [
    5, 7, 8, 10, 12, 13, 16, 17, 19, 23, 25, 26, 27, 28, 29, 33,
    34, 42, 43, 44, 45, 46, 47, 48, 49, 50
];
for (let i = 1; i <= 50; i++) {
    const shouldNotInclude = dontLoad.includes(i);
    if (!shouldNotInclude) {
        images.push({
            src: `/toscana/${i}.jpg`,
            alt: `Gallery Image ${i}`,
        });
    }
}
</script>

<template>
    <Carousel class="relative w-full max-w-4xl group">
        <CarouselContent>
            <CarouselItem v-for="image in images" :key="image.src">
                <div class="p-1">
                    <Card class="border-0 bg-transparent shadow-none overflow-hidden rounded-lg">
                        <CardContent class="flex aspect-[4/3] min-h-[280px] sm:min-h-[350px] md:min-h-[450px] lg:min-h-[600px] items-center justify-center p-0 relative">
                            <!-- Image -->
                            <img 
                                :src="image.src" 
                                :alt="image.alt" 
                                class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-[1.02]" 
                            />
                            <!-- Subtle overlay gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent rounded-lg pointer-events-none"></div>
                        </CardContent>
                    </Card>
                </div>
            </CarouselItem>
        </CarouselContent>
        
        <!-- Elegant navigation arrows -->
        <CarouselPrevious 
            class="left-4 bg-white/10 backdrop-blur-sm border-white/20 text-white hover:bg-white/20 hover:border-white/30 transition-all duration-300 opacity-100 md:opacity-0 md:group-hover:opacity-100"
        />
        <CarouselNext 
            class="right-4 bg-white/10 backdrop-blur-sm border-white/20 text-white hover:bg-white/20 hover:border-white/30 transition-all duration-300 opacity-100 md:opacity-0 md:group-hover:opacity-100"
        />
    </Carousel>
</template>
