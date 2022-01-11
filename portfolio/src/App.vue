<template>
    <div class="content" :class="{darkModeContent : this.darkMode}">
        <div class="colorMode" @click="this.darkMode = !this.darkMode">
            <div class="box" :class="{darkModeBox : this.darkMode}" @mouseover="this.isOverMoon = true" @mouseleave="this.isOverMoon = false">
                <img v-if="this.darkMode" src="./assets/logo/sun_white.png" alt="">
                <img v-if="!this.darkMode & !isOverMoon" src="./assets/logo/moon_black.png" alt="">
                <img v-if="!this.darkMode & isOverMoon" src="./assets/logo/moon_white.png" alt="">
            </div>
        </div>
        <Navbar :darkMode="this.darkMode"/>
        <router-view :darkMode="this.darkMode"/>
        <router-view name="experience" :darkMode="this.darkMode"/>
        <router-view name="portfolio" :darkMode="this.darkMode"/>
        <router-view name="contact" :darkMode="this.darkMode"/>
    </div>
</template>

<script>

import Navbar from '@/components/navbar/Navbar.vue'

export default {
    name: 'App',
    components: {
      Navbar,
    },
    data() {
        return {
            darkMode: true,
            isOverMoon: false,
        }
    },
}
</script>

<style lang="scss">

* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: Jost,Arial,Helvetica,sans-serif;
}

#app {
    min-height: 100vh;

    .darkModeContent {
        background-color: #111111 !important;
    }

    .content {
        background-color: white;
    }

    .colorMode {
        position: fixed;
        z-index: 1;
        right: 50px;
        top: 20px;

        .darkModeBox {
            background-color: #2B2A2A !important;

            &:hover {
                background-color: #FEB401 !important;
            }
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background-color: #DFDFDE;
            border-radius: 50%;
            margin: 15px 0px;

            &:hover {
                cursor: pointer;
                background-color: black;
            }

            img {
                width: 20px;
                height: 20px;
            }
        }
    }
}

// .fade-enter-active,
// .fade-leave-active {
//   transition: opacity 1s ease;
// }

// .fade-enter-from,
// .fade-leave-to {
//   opacity: 0;
// }

</style>