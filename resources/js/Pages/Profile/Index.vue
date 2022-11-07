<template>
    <NavBar />
    <h1>Profile</h1>
    <Link :href="route('home.index')" class="btn btn-outline-primary">Home</Link>
    <Link :href="route('top.index')" class="btn btn-outline-primary">Top10</Link>
    <Link :href="route('logout')" method="post" as="button" class="btn btn-outline-danger">Logout</Link>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
export default {
    name: "Index",
    components: {
        Link, NavBar
    },
    setup(){

    }
}

</script>

<style scoped>

</style>
