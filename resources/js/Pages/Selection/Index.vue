<template>
    <NavBar />
    <h1>Selection</h1>
    <Link :href="route('home.index')" class="btn btn-outline-primary">HOME</Link>
    <Link :href="route('top.index')" class="btn btn-outline-primary">Top10</Link>
    <Link :href="route('profile.index')" class="btn btn-outline-primary">Profile</Link>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
export default {
    name: "Index",
    components: {
        Link, NavBar
    }
}
</script>

<style scoped>

</style>
