<template>
    <NavBar />
    <h1>Top10</h1>
    <Link :href="route('home.index')" class="btn btn-outline-primary">Home</Link>
    <Link :href="route('selection.index')" class="btn btn-outline-primary">Selection</Link>
    <Link :href="route('profile.index')" class="btn btn-outline-primary">Profile</Link>
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
        // localStorage.setItem('lastURL', history.state.url);
    }

}
</script>

<style scoped>

</style>
