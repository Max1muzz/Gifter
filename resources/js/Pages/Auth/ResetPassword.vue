<script setup>
import NavBar from "@/Components/NavBar.vue";
import {Head, useForm} from '@inertiajs/inertia-vue3';
//import {computed} from "vue";

const props = defineProps({
    email: String,
    token: String,
    //status: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
   // form.post(route('password.update'));
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
//const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <Head title="Reset Password"/>
    <NavBar/>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto mb-2">
                <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                <h1>Enter a new password.</h1>
                <form @submit.prevent="submit">
                    <input v-model="form.email" autocomplete="username" type="email" class="form-control mt-3"
                           placeholder="Email">
                    <p class="text-danger text-small mt-1">{{ form.errors.email }}</p>

                    <input v-model="form.password" autocomplete="current-password" type="password"
                           class="form-control mt-3" placeholder="Password">
                    <p class="text-danger text-small mt-1">{{ form.errors.password }}</p>

                    <input v-model="form.password_confirmation" autocomplete="new-password" type="password"
                           class="form-control mt-3" placeholder="Confirm Password">
                    <p class="text-danger text-small mt-1">{{ form.errors.password_confirmation }}</p>
                    <input type="submit" class="col-7 col-sm-4 btn btn-outline-primary mt-4" value="Reset">
                </form>
            </div>
        </div>
    </div>
</template>
