<script setup lang="ts">
import { HamburgerMenuIcon } from '@radix-icons/vue';
import Button from './ui/button/Button.vue';

import {
  Drawer,
  DrawerClose,
  DrawerContent,
  DrawerDescription,
  DrawerFooter,
  DrawerHeader,
  DrawerTitle,
  DrawerTrigger,
} from '@/Components/ui/drawer'
</script>


<template>
  <div class="fixed top-2 right-5 left-5 md:hidden">
    <img src="https://placehold.co/64x64" alt="Logo" class="w-12 h-12" />
    <Drawer>
      <DrawerTrigger>
        <HamburgerMenuIcon class="size-6" />
      </DrawerTrigger>
      <DrawerContent>
        <DrawerHeader>
          <DrawerTitle>Are you absolutely sure?</DrawerTitle>
          <DrawerDescription>This action cannot be undone.</DrawerDescription>
        </DrawerHeader>
        <DrawerFooter>
          <Button>Submit</Button>
          <DrawerClose>
            <Button variant="outline">
              Cancel
            </Button>
          </DrawerClose>
        </DrawerFooter>
      </DrawerContent>
    </Drawer>
  </div>
</template>