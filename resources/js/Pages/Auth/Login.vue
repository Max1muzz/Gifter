<script setup>
import NavBar from "@/Components/NavBar.vue";
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: true
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Login"/>
    <NavBar/>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto mb-2">
                <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                <h1>You need to log in, I'll wait a bit!</h1>
                <form @submit.prevent="submit">
                    <input v-model="form.email" autocomplete="username" type="email" class="form-control mt-3"
                           placeholder="Email">
                    <p class="text-danger text-small mt-1">{{ form.errors.email }}</p>
                    <input v-model="form.password" autocomplete="current-password" type="password"
                           class="form-control mt-3" placeholder="Password">
                    <p class="text-danger text-small mt-1">{{ form.errors.password }}</p>
                    <input type="submit" class="col-7 col-sm-4 btn btn-outline-secondary mt-4" value="Login">
                </form>
                <div class="mt-3">
                    <Link :href="route('register')" class="btn-link">Register</Link>
                </div>
                <div class="mt-3">
                    <Link :href="route('password.request')" class="btn-link">Forgot password?</Link>
                </div>
            </div>
        </div>
    </div>
</template>
