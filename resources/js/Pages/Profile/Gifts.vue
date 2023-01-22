<template>
    <Head title="Profile" />
    <NavBar />
    <div class="container-fluid">
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 btn1 blocks text-white text-center">
            <div class="row align-items-center blocks">
                <div class="col-8">
                    <h1>Hi {{$page.props.auth.user.name}}</h1>
                </div>
                <div class="col">
                    <Link :href="route('logout')" method="post" as="button" class="btn">Logout</Link>
                </div>
            </div>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 mt-3">
            <div class="row align-items-end">
                <div class="col-6 text-end animate__animated animate__fadeInLeftBig">
                    <Link :href="route('profile.index')">
                        <h2 class="text-black-50">Selections⋘</h2>
                    </Link>
                </div>
                <div class="col-6 animate__animated animate__fadeInRightBig">
                    <Link href="">
                        <h2 class="text-dark">| Gifts</h2>
                    </Link>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-start">
                <div v-for="(gift, key) in gifts"
                     class="col-12 col-sm-6 col-lg-4 col-xl-3 animate__animated animate__flipInX">
                    <Link :href="route('gift.show', gift.id)" class="card blocks" :class="gift.btn">
                        <img :src="gift.img" class="cardsImg card-img-top p-2" :alt="gift.title">
                        <div class="card-body">
                            <h4 class="card-title">{{key}}. {{ gift.title }}</h4>
                            <h5 class="card-text">{{ gift.price }}$</h5>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
        <div class="mt-3"></div>
    </div>

</template>

<script>
import {Link, Head} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
export default {
    name: "Gifts",
    components: {
        Link, NavBar, Head
    },
    props: ['gifts'],
    setup(){
    }
}

</script>

<style scoped>

</style>

