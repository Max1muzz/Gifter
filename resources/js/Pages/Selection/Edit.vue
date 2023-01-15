<template>
<Head title="Selection" />
<NavBar />
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 col-sm-4 col-lg-3 col-xl-2 mx-auto mt-2">
                <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
            </div>
        </div>
        <h4 class="container col-11 col-md-8 col-lg-6 col-xl-4 text-center animate__animated animate__pulse mt-2">
            <span v-if="page.id == 1">{{ name }}</span>
            {{ page.head }}
            <span v-if="page.id == 2">{{ name }}</span>
        </h4>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn1 blocks text-center animate__animated"
        :class="page.id % 2 ? 'animate__fadeInLeftBig' : 'animate__fadeInRightBig'">
        <form @submit.prevent="update(page.link_1)">
        <div class="row align-items-center blocks">
            <input type="submit" class="col-8" :value="page.button_1">
        </div>
        </form>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated"
        :class="page.id % 2 ? 'animate__fadeInRightBig' : 'animate__fadeInLeftBig'">
        <form @submit.prevent="update(page.link_2)">
        <div class="row align-items-center blocks">
            <input type="submit" class="col-8" :value="page.button_2">
        </div>
        </form>
    </div>
    <div v-if="page.button_3 !== null" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn3 blocks text-center animate__animated"
        :class="page.id % 2 ? 'animate__fadeInLeftBig' : 'animate__fadeInRightBig'">
        <form @submit.prevent="update(page.link_3)">
        <div class="row align-items-center blocks">
            <input type="submit" class="col-8" :value="page.button_3">
        </div>
        </form>
    </div>
    <div v-if="page.button_4 !== null" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn4 blocks text-center animate__animated"
        :class="page.id % 2 ? 'animate__fadeInRightBig' : 'animate__fadeInLeftBig'">
        <form @submit.prevent="update(page.link_4)">
        <div class="row align-items-center blocks">
            <input type="submit" class="col-8" :value="page.button_4">
        </div>
        </form>
    </div>
    <div v-if="page.button_5 !== null" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn5 blocks text-center animate__animated"
        :class="page.id % 2 ? 'animate__fadeInLeftBig' : 'animate__fadeInRightBig'">
        <form @submit.prevent="update(page.link_5)">
        <div class="row align-items-center blocks">
            <input type="submit" class="col-8" :value="page.button_5">
        </div>
        </form>
    </div>
    <div v-if="page.button_6 !== null" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn6 blocks text-center animate__animated"
        :class="page.id % 2 ? 'animate__fadeInRightBig' : 'animate__fadeInLeftBig'">
        <form @submit.prevent="update(page.link_6)">
        <div class="row align-items-center blocks">
            <input type="submit" class="col-8" :value="page.button_6">
        </div>
        </form>
    </div>
    <div class="container-fluid">
        <div class="container text-center mt-3 mb-3">
            <Link :href="route('selection.finish')" class="btn btn-outline-dark">Finish selection</Link>
        </div>
    </div>
</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
export default {
    name: "Edit",
    components: {
        Link, NavBar, Head
    },
    props:['page', 'name'],
    methods: {
        update(param){
            this.$inertia.patch(`selection`, {param: param})
        }
    },
}
</script>

<style scoped>

</style>
