<script setup>
import NavBar from "@/Components/NavBar.vue";
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head title="Forgot Password"/>
    <NavBar/>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto mb-2">
                <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
            </div>
        </div>
        <div v-if="!status" class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset
                link that will allow you to choose a new one.
            </div>
        </div>
        <div v-if="status" class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                {{ status }}
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                <form @submit.prevent="submit">
                    <input v-model="form.email" autocomplete="username" type="email" class="form-control mt-3"
                           placeholder="Email">
                    <p class="text-danger text-small mt-1">{{ form.errors.email }}</p>
                    <input type="submit" class="col-7 col-sm-4 btn btn-outline-primary mt-4" value="Send">
                </form>
                <div class="mt-3">
                    <Link :href="route('login')" class="btn-link">Login</Link>
                </div>
            </div>
        </div>
    </div>
</template>
