<template>
    <Head title="Selection" />
    <NavBar />
    <div class="container-fluid">
        <div class="row">
            <form @submit.prevent="createSelection()" enctype="multipart/form-data">
                <div class="container col-11 col-md-8 col-lg-6 col-xl-4 mt-4 text-center">
                    <h2>Let's start with the selection!</h2>
                    <div class="row">
                        <div class="col-5 col-sm-4 mx-auto">
                            <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
                        </div>
                    </div>
                    <h4 class="mt-3">Write the name of the person you want to give a gift to:</h4>
                    <input v-model="name" class="form-control form-control-lg mt-3" type="text"
                           placeholder="Name of gift recipient">
                </div>
                <p v-if="errorName" class="text-danger container col-11 col-md-8 col-lg-6 col-xl-4">{{errorName}}</p>
                <p v-if="$page.props.errors.name" class="text-danger container col-11 col-md-8 col-lg-6 col-xl-4">{{$page.props.errors.name}}</p>

                <div>
                    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 blocks text-center animate__animated animate__fadeInLeftBig">
                        <input class="container-fluid btn1 blocks" type="submit" value="NEXT >>">
                    </div>
                </div>
            </form>
        </div>
        <div class="container text-center mt-5 mb-3">
            <Link :href="route('home.index')" class="btn btn-outline-dark">Finish selection</Link>
        </div>
    </div>
</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/NavBar.vue";

export default {
    name: "Create",
    components: {
        NavBar, Head, Link
    },
    methods: {
        createSelection() {
            if (this.name === '') {
                this.errorName = 'No way without a name!';
            } else {
                this.errorName = '';
                this.$inertia.post('/selection', {
                    name: this.name,
                })
            }
        }
    },
    data() {
        return {
            name: '',
            errorName: '',
        }
    }
}
</script>

<style scoped>

</style>
