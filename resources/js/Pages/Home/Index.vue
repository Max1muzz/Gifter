<template>
    <Head title="Home"/>
    <NavBar/>
    <div class="container-fluid">
        <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto">
            <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
        </div>
        <h4 class="text-center mt-3">
            You need to answer a few questions and I will offer you gift options. Shall we begin?
        </h4>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn1 blocks text-center animate__animated animate__bounceInLeft">
        <Link :href="route('selection.index')" class="row align-items-center blocks">
            <div class="col-8">
                TO BEGIN
            </div>
            <div class="col">
            </div>
        </Link>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__bounceInRight">
        <Link :href="route('random.index')" class="row align-items-center blocks">
            <div class="col-8">
                RANDOM GIFTS
            </div>
            <div class="col">
            </div>
        </Link>
    </div>
    <div v-if="ifAuth" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn3 blocks text-center animate__animated animate__bounceInLeft">
        <Link :href="route('register')" class="row align-items-center blocks">
            <div class="col-8">
                REGISTER
            </div>
            <div class="col">
            </div>
        </Link>
    </div>
    <div class="container-fluid">
        <h6 class="text-center mt-4" v-if="ifAuth">
            Don't forget to register if you want to keep your rebound history.
        </h6>
    </div>
<!--    <Link :href="route('start')" class="btn btn-outline-primary">Start</Link>-->
</template>

<script>
import {Link, Head} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";

export default {
    name: "Index",
    components: {
        Link, NavBar, Head
    },
    props: [
        'ifAuth'
    ],
    setup() {
        // const lastUrl = localStorage.getItem('lastURL');
        //
        // console.log(lastUrl)
        // console.log(history.state.url)
        // console.log()
    }
}
</script>
