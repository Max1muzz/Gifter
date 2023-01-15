<template>
    <Head title="Random"/>
    <NavBar/>
    <div class="container-fluid">
        <h1 v-if="product" class="text-center mt-3">
            Your gift for {{name}}
        </h1>
        <h1 v-if="!product" class="text-center mt-3">
            Oopsie! No gift for {{name}}
        </h1>
        <div v-if="!product" class="col-5 col-sm-4 col-lg-3 col-xl-2 mx-auto mt-2">
            <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
        </div>
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
        <div v-if="product" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__bounceInLeft">
            <Link :href="route('home.index')" class="row align-items-center blocks">
                <div class="col-8">
                    VIEW OTHER GIFT
                </div>
                <div class="col">
                </div>
            </Link>
        </div>
        <div v-if="!profile" class="container col-11 col-md-8 col-lg-6 col-xl-4 btn3 blocks text-center mb-3 animate__animated animate__bounceInRight">
            <Link :href="route('selection.restart')" class="row align-items-center blocks">
                <div class="col-8">
                    START A NEW SELECTION
                </div>
                <div class="col">
                </div>
            </Link>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container text-center mt-3 mb-3">
            <Link v-if="!profile" :href="route('selection.finish')" class="btn btn-outline-dark">Exit selection</Link>
            <Link v-if="profile" :href="route('profile.index')" class="btn btn-outline-dark">Exit selection</Link>
        </div>
    </div>
</template>

<script>
import {Link, Head} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
export default {
    name: "Show",
    components: {
        Link, NavBar, Head
    },
    props: [
        'product',
        'name',
        'profile'
    ],
    setup() {
        const img = '/';
        return {img}
    }
}
</script>

<style scoped>

</style>
