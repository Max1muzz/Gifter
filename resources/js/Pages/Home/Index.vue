<template>
    <NavBar />
    <h1>Home</h1>
    <Link :href="route('top.index')" class="btn btn-outline-primary">Top10</Link>
    <Link :href="route('selection.index')" class="btn btn-outline-primary">Selection</Link>
    <Link :href="route('profile.index')" class="btn btn-outline-primary">Profile</Link>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";
import { Inertia } from '@inertiajs/inertia';

export default {
    name: "Index",
    components: {
        Link, NavBar
    },
    setup(){
        // const lastUrl = localStorage.getItem('lastURL');
        //
        // console.log(lastUrl)
        // console.log(history.state.url)
        // console.log()
    }
}
</script>
