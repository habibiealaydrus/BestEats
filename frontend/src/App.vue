<script setup>
import { RouterLink, RouterView } from "vue-router";
import Navigation from "@/components/Navigation.vue";
</script>

<template>
    <div class="bg-gray-400 w-12/12 flex md:flex-col h-12/12">
        <img
            src="./assets/img/mainlogo.png"
            class="mt-3 ml-14 sm:ml-32 md:ml-56 lg:ml-56 w-36 sm:w-36 md:w-64"
            alt="logo"
        />
        <Navigation />
    </div>
    <div class="bg-gray-400 w-full">
        <RouterView />
    </div>
</template>
