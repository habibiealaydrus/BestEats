<template>
    <nav class="flex justify-between items-center mx-auto pb-3 z-0">
        <div
            class="bg-white nav-links md:static absolute md:min-h-[10vh] min-h-[40vh] left-0 top-[-200%] md:w-auto w-full flex items-center"
            ref="navLinks"
        >
            <ul
                class="h-16 rounded-l-lg rounded-r-lg flex md:flex-row flex-col md:items-center w-full shadow-lg"
            >
                <li class="hover:bg-gray-500 w-full py-4 px-14 rounded-l-lg">
                    <RouterLink
                        to="/"
                        class="py-2 text-black hover:text-white text-2xl uppercase"
                        >Home
                    </RouterLink>
                </li>
                <li
                    class="jakarta flex flex-col px-10 hover:bg-gray-500 w-full py-4 px-14 z-40"
                >
                    <a
                        class="text-black text-2xl uppercase hover:text-white cursor-pointer z-40"
                        @click="toogleYearJakarta"
                    >
                        Jakarta
                    </a>
                    <div class="hidden years flex flex-col z-40">
                        <hr class="text-black" />

                        <a
                            class="text-black text-2xl uppercase text-center hover:text-white z-40"
                        >
                            2018
                        </a>
                        <hr class="text-black" />
                        <a
                            class="text-black text-2xl uppercase text-center hover:text-white z-40"
                        >
                            2019
                        </a>
                    </div>
                </li>
                <li
                    id="baliRegion"
                    class="flex flex-col px-10 hover:bg-gray-500 w-full py-4 px-14"
                >
                    <a
                        id="baliRegion"
                        class="text-black text-2xl uppercase cursor-pointer hover:text-white"
                        @click="toggleYearBali"
                        >Bali
                    </a>
                    <ul id="subYear" class="hidden">
                        <li
                            v-for="year in yearsAwardAll"
                            class="text-black text-2xl uppercase text-center hover:text-white"
                        >
                            <hr class="text-black" />
                            {{ year.year }}
                        </li>
                    </ul>
                </li>
                <li class="hover:bg-gray-500 w-full py-5 px-14">
                    <RouterLink
                        to="/about"
                        class="py-2 text-black hover:text-white text-2xl uppercase cursor-pointer"
                        >About
                    </RouterLink>
                </li>
                <li class="hover:bg-gray-500 w-full py-5 px-14 rounded-r-lg">
                    <a
                        href=""
                        class="py-2 text-black hover:text-white text-2xl uppercase"
                        >Register</a
                    >
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6 md:hidden">
            <button
                class="border border-slate-600 rounded-md hover:bg-gray-500 text-xl px-2 py-2 text-black hover:text-black"
            >
                <ion-icon
                    class="text-4xl cursor-pointer"
                    ref="buttonMenu"
                    name="menu-outline"
                    @click="buttonToggleMenu"
                ></ion-icon>
            </button>
        </div>
    </nav>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const buttonMenu = ref(null);
const navLinks = ref("");

const screensize = () => {
    const getscreen = window.outerWidth;
    return getscreen;
};

const changingscreen = () => {
    window.addEventListener("resize", function () {
        let w = window.outerWidth;
    });
};

const toogleYearJakarta = () => {
    const years = document.querySelector(".years");
    const jakartaRegion = document.querySelector(".jakarta");
    years.classList.toggle("hidden");
    jakartaRegion.classList.toggle("mt-16");
};

const buttonToggleMenu = () => {
    const statusButton = true;
    const navLinks = document.querySelector(".nav-links");
    (buttonMenu.value.name =
        buttonMenu.value.name === "menu-outline" ? "close" : "menu-outline"),
        navLinks.classList.toggle("top-[0%]");
    console.log(navLinks.classList);
    return;
};

const yearsAwardAll = ref([]);
const urlYear = "http://127.0.0.1:8000/api/allaward";

const baliYearAward = async () => {
    const response = await axios.get(urlYear);
    yearsAwardAll.value = response.data.data;
};

const toggleYearBali = () => {
    const tahun = document.getElementById("baliRegion");
    const urutanTahunBali = document.getElementById("subYear");
    urutanTahunBali.classList.toggle("hidden");
    tahun.classList.toggle("mt-16");
};

onMounted(() => {
    const screen = screensize();

    if (screen < 517) {
        const hideWideMenu = true;
    }
}, baliYearAward());
changingscreen();
</script>

<style lang="scss" scoped></style>
