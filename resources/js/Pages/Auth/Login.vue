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
    remember: false
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
                    <input type="submit" class="col-7 col-sm-4 btn btn-outline-primary mt-4" value="Login">
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


    <!--        <form @submit.prevent="submit">-->
    <!--            <div>-->
    <!--                <InputLabel for="email" value="Email" />-->
    <!--                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />-->
    <!--                <InputError class="mt-2" :message="form.errors.email" />-->
    <!--            </div>-->

    <!--            <div class="mt-4">-->
    <!--                <InputLabel for="password" value="Password" />-->
    <!--                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />-->
    <!--                <InputError class="mt-2" :message="form.errors.password" />-->
    <!--            </div>-->

    <!--            <div class="block mt-4">-->
    <!--                <label class="flex items-center">-->
    <!--                    <Checkbox name="remember" v-model:checked="form.remember" />-->
    <!--                    <span class="ml-2 text-sm text-gray-600">Remember me</span>-->
    <!--                </label>-->
    <!--            </div>-->

    <!--            <div class="flex items-center justify-end mt-4">-->
    <!--                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">-->
    <!--                    Forgot your password?-->
    <!--                </Link>-->

    <!--                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">-->
    <!--                    Log in-->
    <!--                </PrimaryButton>-->
    <!--            </div>-->
    <!--        </form>-->
</template>
