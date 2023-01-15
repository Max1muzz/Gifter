<script setup>
import NavBar from "@/Components/NavBar.vue";

import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register"/>
    <NavBar/>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto mb-2">
                <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                <h1>You need to register, I'll wait a bit!</h1>
                <form @submit.prevent="submit">

                    <input v-model="form.name" type="text" class="form-control mt-3" placeholder="Name">
                    <p class="text-danger text-small mt-1">{{ form.errors.name }}</p>

                    <input v-model="form.email" autocomplete="username" type="email" class="form-control mt-3"
                           placeholder="Email">
                    <p class="text-danger text-small mt-1">{{ form.errors.email }}</p>

                    <input v-model="form.password" autocomplete="current-password" type="password"
                           class="form-control mt-3" placeholder="Password">
                    <p class="text-danger text-small mt-1">{{ form.errors.password }}</p>

                    <input v-model="form.password_confirmation" autocomplete="new-password" type="password"
                           class="form-control mt-3" placeholder="Confirm Password">
                    <p class="text-danger text-small mt-1">{{ form.errors.password_confirmation }}</p>

                    <input type="submit" class="col-7 col-sm-4 btn btn-outline-secondary mt-4" value="Register">

                </form>
                <div class="mt-3">
                    <Link :href="route('login')" class="btn-link">Login</Link>
                </div>
            </div>
        </div>
    </div>

</template>
