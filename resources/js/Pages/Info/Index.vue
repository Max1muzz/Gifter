<template>
    <NavBar />
<h1>Info</h1>
    <Link :href="route('home.index')" class="btn btn-outline-primary">Home</Link>
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
