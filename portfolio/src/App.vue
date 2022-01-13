<template>
    <div class="content">
        <Navbar/>
        <router-view v-slot="{ Component }">
            <transition name="fade" mode="out-in">
                <component :is="Component" />
            </transition>
        </router-view>
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

    .content {
        background-color: #1D1B19;
    }
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.35s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

</style>