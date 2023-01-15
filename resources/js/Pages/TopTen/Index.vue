<template>
    <Head title="Top10"/>
    <NavBar/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto">
                <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
            </div>
            <h1 class="text-center mt-3">My "TOP 10" most popular gifts</h1>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-start">
            <div v-for="(product, key) in products"
                 class="col-12 col-sm-6 col-lg-4 col-xl-3 animate__animated animate__flipInX">
                <Link :href="route('gift.show', product.id)" class="card blocks" :class="product.btn">
                    <img :src="product.img" class="cardsImg card-img-top p-2" :alt="product.title">
                    <div class="card-body">
                        <h4 class="card-title">{{key}}. {{ product.title }}</h4>
                        <h5 class="card-text">{{ product.price }}$</h5>
                    </div>
                </Link>
            </div>
        </div>
    </div>
    <div class="mt-3"></div>
</template>

<script>
import {Link, Head} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";

export default {
    name: "Index",
    components: {
        Link, NavBar, Head
    },
    props: ['products'],
    setup() {
        // localStorage.setItem('lastURL', history.state.url);
    }

}
</script>

<style scoped>

</style>
