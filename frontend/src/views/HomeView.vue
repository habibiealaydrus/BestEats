<script setup>
import Home from "../components/Home.vue";
import Footer from "@/components/Footer.vue";
import Sponsors from "@/components/Sponsors.vue";
import Navigation from "@/components/Navigation.vue";
</script>

<template>
    <main>
        <Home />
        <Sponsors />
        <div class="flex items-center">
            <Navigation />
        </div>
        <Footer />
    </main>
</template>
