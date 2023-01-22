<template>
    <Head :title="product.title"/>
    <NavBar/>
    <div class="container-fluid">
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 mt-3">
            <div class="row align-items-center">
                <div class="card" >
                    <div class="card-body">
                        <h4 class="card-title">{{product.title}}</h4>
                    </div>
                    <img :src="product.img" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">${{product.price}}</h5>
                        <p class="card-text">{{product.content}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="product.link_shopi" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn1 blocks text-center animate__animated animate__bounceInLeft">
            <Link :href="product.link_shopi" class="row align-items-center blocks">
                <div class="col-8">
                    BUY FROM US FOR ${{product.price}}
                </div>
                <div class="col">
                </div>
            </Link>
        </div>
        <div v-if="product.link_amazon" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__bounceInRight">
            <Link :href="product.link_amazon" class="row align-items-center blocks">
                <div class="col-8">
                    BUY ON AMAZON
                </div>
                <div class="col">
                </div>
            </Link>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 mb-3 btn3 blocks text-center animate__animated animate__bounceInLeft">
            <Link :href="pathback" class="row align-items-center blocks">
                <div class="col-8">
                    ⋘ BACK
                </div>
                <div class="col">
                </div>
            </Link>
        </div>
    </div>

</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";

export default {
    name: "Show",
    components: {
        Link, NavBar, Head
    },
    props: [
        'product',
        'pathback'
    ],
}
</script>

<style scoped>

</style>
