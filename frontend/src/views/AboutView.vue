<script setup>
import Footer from "@/components/Footer.vue";
import Sponsors from "@/components/Sponsors.vue";
import Navigation from "@/components/Navigation.vue";
</script>
<template>
    <div class="flex flex-col items-center pt-16">
        <h3 class="text-2xl text-white bg-gray-400 z-10 px-4 font-bold">
            ABOUT BEST EATS
        </h3>
        <hr class="w-10/12 -my-4 px-12 py-5 z-0 text-bold h-2 rounded" />
        <h1 class="text-3xl font-bold">BEST EATS</h1>
        <h2 class="text-xl font-bold">by Foodies</h2>
        <h2 class="text-large py-2 font-semibold">
            The Inaugural Jakarta's Best Eats's Awards and Guide
        </h2>
        <div class="mx-16 flex flex-row">
            <div class="w-6/12 p-2 text-justify text-wrap">
                IN THE LAST 10 YEARS, a remarkable food scene has emerged in
                Jakarta. The palates of diners have been sharpened, while
                restaurateurs have created venues and menus that rival those
                other hotspots on the map of international cuisine and foodie
                culture. Globally, ethical and impartial awards have shaped the
                taste of diners and inspired chefs and restaurateurs. After our
                successful maiden awards last year, Jakarta’s Best Eats is back
                for 2019. It’s now time for the culinary creations, excellent
                service and superior dining experiences available in Jakarta to
                get a similar treatment. It’s time to shine a spotlight on the
                restaurants of Jakarta that will be visible throughout the
                nation,the region–and beyond.
            </div>
            <div class="w-6/12 p-2 text-justify text-balance">
                FoodieS Magazine, Indonesia’s leading English-language
                publication on food and beverage, has teamed up with Aqua
                Reflections, Indonesia’s finest artisanal water, to present the
                inaugural Jakarta’s Best Eats Awards and Guide. The Awards will
                acknowledge the Top 40 restaurants in Jakarta divided into three
                categories: Fine Dining, Upmarket Venues and Casual Dining. We
                commit to an awards process that is ethical, fair and driven by
                experts. Jakarta’s Best Eats Awards wants to recognize those who
                have excelled in the local restaurant scene–and introduce those
                culinary stars to an audience in Jakarta, in Indonesia and
                beyond.
            </div>
        </div>
        <div class="mx-16">
            <img src="../assets/img/about/siomay.jpg" alt="" />
        </div>
        <div class="mx-16 flex flex-row">
            <div class="w-6/12 p-2 text-justify text-balance">
                <strong>How Does the Jakarta’s Best Eats Awards Work?</strong>
                <br />
                Chefs and restaurateurs as well as the general public were
                invited to nominate their restaurants to FoodieS through
                www.foodies.id/ jakartasbesteats. This process was free and
                without charge. FoodieS, Aqua Reflections and jury members also
                nominated establishments. To ensure level competition based on a
                restaurant’s market segment, the awards covered three
                categories: Fine Dining, Upmarket Venues and Casual Dining.
                Restaurants only competed in the category that they belong in.
                After the nomination stage, the jury then developed a short list
                of restaurants. All restaurants in the three categories were
                judged using the same criteria: <br />• 50 percent for cuisine,
                based on taste, creativity and execution <br />
                • 20 percent for quality of service <br />
                • 20 for the drinks menu or wine list <br />
                • 10 percent for venue’s interior design and character.
            </div>
            <div class="w-6/12 p-2 text-justify">
                This weighting drove the jury’s final decisions. A Fine Dining
                restaurant is defined as one that emphasizes perfection in
                taste, presentation, creativity, service and tablescape. An
                Upmarket Venue may be large or small and focused on smart
                dining, without a fine-dining level of service or interior.
                Casual Dining includes mall or stand-alone venues, or might be
                smaller establishments with a faster and livelier atmosphere.
                Jury members based their decisions on the above criteria. Each
                member could only vote for a restaurant if they had eaten at the
                restaurant in the last 12 months. All past visits to the
                restaurants were made without identifying themselves as part of
                the jury. Further, the award organizers, sponsors, shortlisted
                restaurants and jury members kept the restaurant selection and
                deliberation process confidential before the awards night. They
                also certified that they had not been offered nor had they
                received any incentives as part of the judging process.
            </div>
        </div>
        <div class="mx-36">
            <img src="../assets/img/about/alto3.jpg" alt="" />
        </div>
        <Sponsors />
        <div class="flex items-center">
            <Navigation />
        </div>
    </div>
</template>

<style>
@media (min-width: 1024px) {
    .about {
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
}
</style>
