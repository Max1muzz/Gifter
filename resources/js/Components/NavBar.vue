<template>
    <nav v-if="animate" class="navbar navbar-light fixed-top animate__animated"
         :class="animate" style="background-color: #D9D9D9;">
        <div class="container-fluid">
            <div class="col col-sm-2 col-xl-1 navbar-nav">
                <Link :href="route('home.index')"
                      class="nav-link mx-auto"
                      :class="{active: isActive[0]}">
                    <img :src="isActive[0] ? '/icons/gin1.svg' : '/icons/gin.svg'"
                         alt="Gifter" width="40" height="40">
                </Link>
            </div>
            <div v-for="(section, key) in sections" class="col col-sm-2 col-md-1 navbar-nav">
                <Link :href="route(section.url)" class="nav-link mini" :class="{active: isActive[key]}">
                    <img :src="isActive[key] ? section.img_1 : section.img_2"
                         class="rounded mx-auto d-block" alt="{{ section.title }}" width="30" height="30">
                    <p class="text-center text-small">{{ section.title }}</p>
<!--                    <p v-if="!isActive[key]" class="text-center text-small">{{ section.title }}</p>-->
                </Link>
                <Link :href="route(section.url)" class="nav-link maxi"
                      :class="{active: isActive[key]}">
                    {{ section.title }}
                </Link>
            </div>
        </div>
    </nav>
    <div class="open" :class="{close: animate===0||animate==='animate__slideOutUp'}">
        <br>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "NavBar",
    components: {
        Link
    },
    setup() {
        //--  URLs where Navbar is closed  --//
        const closeUrls = ['/tor', '/', '/selection'];
        const sections = {
            1: {title: 'TOP 10', url: 'top.index', img_1: '/icons/top-star1.svg', img_2: '/icons/top-star.svg'},
            2: {title: 'Selection', url: 'selection.index', img_1: '/icons/gifts1.svg', img_2: '/icons/gifts.svg'},
            3: {title: 'Profile', url: 'profile.index', img_1: '/icons/person1.svg', img_2: '/icons/person.svg'},
            4: {title: 'Info', url: 'info.index', img_1: '/icons/about_us1.svg', img_2: '/icons/about_us.svg'}
        };
        //let path = history.state.url ?? '/';
        let path = document.location.pathname ?? '/';
        //console.log(document.location.pathname);
        let isActive = checkActive();
        let animate = checkAnimate();

        function checkActive() {
            const pathShort = path.substr(0, 4);
            if (pathShort === '/hom') return [1];
            else if (pathShort === '/top') return [0, 1];
            else if (pathShort === '/sel') return [0, 0, 1];
            else if (pathShort === '/pro') return [0, 0, 0, 1];
            else if (pathShort === '/inf') return [0, 0, 0, 0, 1];
            else return [0];
        }

        function checkAnimate() {
            const pathBack = localStorage.getItem('lastURL') ?? null;
            localStorage.setItem('lastURL', path);
            const isPath = checkPath(path);
            const isPathBack = checkPath(pathBack);

            function checkPath(uri) {
                return closeUrls.every(function (closeUrl) {
                    if (closeUrl === uri) return 0;
                    return 1;
                })
            }

            if (!isPath && !isPathBack) return 0;
            else if (isPath && isPathBack) return 1;
            else if (!isPath && isPathBack) return 'animate__slideOutUp';
            else if (isPath && !isPathBack) return 'animate__slideInDown';
        }

        return {animate, isActive, sections}
    }
}
</script>

<style scoped>
.open {
    height: 100px;
}

.close {
    height: 30px;
}
</style>
