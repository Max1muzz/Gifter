<template>
    <Head title="Random"/>
    <NavBar/>
    <div class="container-fluid">
        <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto">
            <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
        </div>
        <h4 class="text-center mt-3">
            How much money do you want to spend?
        </h4>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn1 blocks text-center animate__animated animate__bounceInLeft">
        <Link :href="route('random.result', '50')" class="row align-items-center blocks">
            <div class="col-8">
                UP TO 50$
            </div>
            <div class="col">
            </div>
        </Link>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__bounceInRight">
        <Link :href="route('random.result', '300')" class="row align-items-center blocks">
            <div class="col-8">
                UP TO 300$
            </div>
            <div class="col">
            </div>
        </Link>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn3 blocks text-center animate__animated animate__bounceInLeft">
        <Link :href="route('random.result', '1000')" class="row align-items-center blocks">
            <div class="col-8">
                UP TO 1000$
            </div>
            <div class="col">
            </div>
        </Link>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn4 blocks text-center animate__animated animate__bounceInRight">
        <Link :href="route('random.result', 'unlimited')" class="row align-items-center blocks mb-2">
            <div class="col-8">
                MORE THAN 1000$
            </div>
            <div class="col">
            </div>
        </Link>
    </div>
</template>

<script>
import {Link, Head} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
export default {
    name: "Index",
    components: {
        Link, NavBar, Head
    },
}
</script>

<style scoped>

</style>
