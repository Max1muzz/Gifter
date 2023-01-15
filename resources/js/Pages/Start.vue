<template>
    <NavBar/>
    <div class="container-fluid mt-5">
        <h1 class="text-center">
            Hi! My name is Gifter.
        </h1>
        <h4 class="text-center mt-3">
            Do you want to surprise your loved ones with a cool, creative gift?
        </h4>
        <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto mt-5 mb-5">
            <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
        </div>
        <h4 class="text-center mt-3">
            I'm a PRO at this.
        </h4>
        <div class="container text-center mt-3">
            <Link :href="route('home.index')" class="btn btn-outline-dark">GET STARTED</Link>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
export default {
    name: "Start",
    components: {
        Link, NavBar
    },
}
</script>

<style scoped>

</style>
