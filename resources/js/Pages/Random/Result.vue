<template>
    <Head title="Random"/>
    <NavBar/>
    <div class="container-fluid">
        <h1 class="text-center mt-3">
            Random gift
        </h1>
        <div v-if="product" class="row justify-content-center">
            <div class="col-11 col-md-8 col-lg-6 col-xl-4 animate__animated animate__flipInX">
                <Link :href="route('gift.show', product.id)" class="card btn1 blocks">
                    <img :src="img + product.img" class="cardsImg card-img-top p-2" :alt="product.title">
                    <div class="card-body">
                        <h4 class="card-title">{{ product.title }}</h4>
                        <p class="card-text">{{ product.price }}$</p>
                    </div>
                </Link>
            </div>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__bounceInLeft">
            <Link :href="route('random.result', price)" class="row align-items-center blocks">
                <div class="col-8">
                    VIEW OTHER GIFT
                </div>
                <div class="col">
                </div>
            </Link>
        </div>
        <div
            class="container col-11 col-md-8 col-lg-6 col-xl-4 btn3 blocks text-center mb-3 animate__animated animate__bounceInRight">
            <Link :href="route('random.index')" class="row align-items-center blocks">
                <div class="col-8">
                    CHANGE PRICE RANGE
                </div>
                <div class="col">
                </div>
            </Link>
        </div>
    </div>
</template>

<script>
import {Link, Head} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";

export default {
    name: "Result",
    components: {
        Link, NavBar, Head
    },
    props: [
        'product',
        'price'
    ],
    setup() {
        const img = '/';
        return {img}
    }
}
</script>

<style scoped>

</style>
