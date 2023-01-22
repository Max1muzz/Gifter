<template>
    <Head title="Info" />
    <NavBar />
    <div class="container-fluid">
        <h1 class="text-center mt-3">
            OUR CONTACTS
        </h1>
        <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto">
            <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 mt-3">
            <div class="row">
                <div class="col-6"><p>Name</p></div>
                <div class="col-5"><p>Link</p></div>
                <hr/>
            </div>
            <div class="row">
                <div class="col-6"><p>1. Facebook</p></div>
                <div class="col-6"><Link href="https://www.youtube.com" class="link-primary">Group of Facebook</Link></div>
                <hr/>
            </div>
        </div>
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
