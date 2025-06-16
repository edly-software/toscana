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
    { src: "/toscana/first.jpg", alt: "First Pic " },
    { src: "/toscana/third.jpg", alt: "Third" },
    { src: "/toscana/fourth.jpg", alt: "Last" },
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
            alt: `${i}`,
        });
    }
}
</script>

<template>
    <Carousel class="relative w-full max-w-md">
        <CarouselContent>
            <CarouselItem v-for="image in images" :key="image.src">
                <div class="p-0.5">
                    <Card>
                        <CardContent class="flex aspect-square items-center justify-center p-6">
                            <img :src="image.src" :alt="image.alt" class="content-fill" />
                        </CardContent>
                    </Card>
                </div>
            </CarouselItem>
        </CarouselContent>
        <CarouselPrevious />
        <CarouselNext />
    </Carousel>
</template>
>
