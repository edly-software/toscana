<script lang="ts" setup>
let drinks = [
    {
        name: "Wasser",
        price: "6,20 €",
    },
    {
        name: "Coca Cola",
        price: "3,30 €",
    },
    {
        name: "Cola Mix",
        price: "3,30 €",
    },
    {
        name: "Zitronenlimonade ",
        price: "3,30 €",
    },
    {
        name: "Orangenlimonade ",
        price: "3,30 €",
    },
    {
        name: "Johannisbeerschole",
        price: "3,50 €",
    },
    {
        name: "Maracujaschorle",
        price: "3,50 €",
    },
    {
        name: "Apfelschorle trüb ",
        price: "3,50 €",
    },
    {
        name: "Orangenschorle ",
        price: "3,50 €",
    },
];
</script>

<template>
    <h1
        class="px-24 mt-5 text-xl md:text-2xl text-slate-900 mb-2.5 flex gap-2 w-full"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            class="bi bi-cup-straw size-6"
            viewBox="0 0 16 16"
        >
            <path
                d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82q0 .069-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87s-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A1 1 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278M9.768 4.607A14 14 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.3 3.3 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a6 6 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69s2.081-.441 2.438-.69c.042-.029.09-.094.102-.215l.852-8.03a6 6 0 0 1-.435.127 9 9 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006zM11.354 5a3 3 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222"
            />
        </svg>
        <span> Alkoholfreie Getränke </span>
    </h1>
    <div
        class="px-10 md:px-24 flex justify-between p-2.5"
        v-for="drink in drinks"
    >
        <p>{{ drink.name }}</p>
        <p>{{ drink.price }}</p>
    </div>
</template>
