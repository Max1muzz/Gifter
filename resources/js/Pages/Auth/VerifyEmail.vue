<script setup>
import {computed} from 'vue';
import NavBar from "@/Components/NavBar.vue";
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

const props = defineProps({
    status: String,
});

const form = useForm();

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <Head title="Email Verification"/>
    <NavBar/>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto mb-2">
                <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Gifter" min-width="100" min-height="100">
            </div>
        </div>
        <div v-if="!verificationLinkSent" class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the
                link we just emailed to you? If you didn't receive the email, we will gladly send you another.
            </div>
        </div>
        <div v-if="verificationLinkSent" class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                A new verification link has been sent to the email address you provided during registration.
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-3 text-center">
                <form @submit.prevent="submit">
                    <input type="submit" class="col btn btn-outline-primary mt-4"
                           value="Resend Verification Email">
                </form>
                <div class="mt-3">
                    <Link :href="route('logout')" method="post" as="button" class="btn btn-outline-danger">Log Out
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
