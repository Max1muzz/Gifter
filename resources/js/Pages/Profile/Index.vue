<template>
    <Head title="Profile" />
    <NavBar />
    <div class="container-fluid">
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 btn1 blocks text-white text-center">
            <div class="row align-items-center blocks">
                <div class="col-8">
                    <h1>Hi {{$page.props.auth.user.name}}</h1>
                </div>
                <div class="col">
                    <Link :href="route('logout')" method="post" as="button" class="btn">Logout</Link>
                </div>
            </div>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 mt-3">
            <div class="row align-items-end">
                <div class="col-6 text-end animate__animated animate__fadeInLeftBig">
                    <Link>
                        <h2 class="text-dark">Selections |</h2>
                    </Link>
                </div>
                <div class="col-6 animate__animated animate__fadeInRightBig">
                    <Link :href="route('profile.gifts')" >
                        <h2 class="text-black-50">⋙Gifts</h2>
                    </Link>
                </div>
            </div>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 mt-3">
            <div class="row">
                <div class="col"><p>Name</p></div>
                <div class="col"><p>Date</p></div>
                <div class="col-2"><p>View</p></div>
                <div class="col-2"><p>Delete</p></div>
            </div>
            <div class="row" v-for="(selection, key) in selections">
                <hr/>
                <div class="col">
                    <h4 class="mt-2">
                        {{key}}. {{ selection.name }}
                    </h4>
                </div>
                <div class="col">
                    <h6 class="mt-3">
                        {{ selection.date }}
                    </h6>
                </div>
                <div class="col-2">
                    <Link :href="route('profile.selection', selection.id)" class="btn btn-success">
                        ✔
                    </Link>
                </div>
                <div class="col-2">
                    <form @submit.prevent="deleteSelection(selection.id)">
                        <input type="submit" class="btn btn-danger" value="✖">
                    </form>
                </div>
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
    props: ['selections'],
    methods: {
        deleteSelection(id) {
            this.$inertia.delete(`selection/${id}`)
        }
    },
    setup(){

    }
}

</script>

<style scoped>

</style>
