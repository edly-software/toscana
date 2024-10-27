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
    { src: "/toscana/second.jpg", alt: "Second" },
    { src: "/toscana/first.jpg", alt: "First Pic " },
    { src: "/toscana/third.jpg", alt: "Third" },
    { src: "/toscana/fourth.jpg", alt: "Last" },
];

for (let i = 1; i <= 50; i++) {
    images.push({
        src: `/toscana/${i}.jpg`,
        alt: `${i}`,
    });
}
</script>

<template>
    <Carousel class="relative w-full max-w-md">
        <CarouselContent>
            <CarouselItem v-for="image in images" :key="image.src">
                <div class="p-0.5">
                    <Card>
                        <CardContent
                            class="flex aspect-square items-center justify-center p-6"
                        >
                            <img
                                :src="image.src"
                                :alt="image.alt"
                                class="content-fill"
                            />
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
