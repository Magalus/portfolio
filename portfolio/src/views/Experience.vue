<template>
    <div id="formation" class="formation" :class="{darkModeFormation : this.darkMode}">
        <div class="experienceLinks">
            <span class="experienceLink" :class="{isClick : this.view == 'Professional'}" @click="this.view = 'Professional'">
                Expériences
            </span>
            <span class="experienceLink" :class="{isClick : this.view == 'Formation'}" @click="this.view = 'Formation'">
                Formations
            </span>
            <span class="experienceLink" :class="{isClick : this.view == 'Skill'}" @click="this.view = 'Skill'">
                Compétences
            </span>
        </div>
        <transition name="fade" mode="out-in">
            <component :is="this.view"></component>
        </transition>

    </div>
</template>

<script>

import Professional from '@/components/experience/Professional.vue'
import Formation from '@/components/experience/Formation.vue'
import Skill from '@/components/experience/Skill.vue'

export default {
    props: {
        darkMode: Boolean,
    },
    components: {
      Professional,
      Formation,
      Skill
    },
    data() {
        return {
            view: "Professional"
        }
    }
}

</script>

<style lang="scss" scoped>

.darkModeFormation {
    color: #ddd !important;
    background-color: #1D1B19 !important;
}

.formation {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    color: black;
    background-color: #F3F3F3;
    padding-left: 300px;

    .experienceLinks {
        margin-top: 60px;

        .experienceLink {
            position: relative;
            font-size: 32px;
            font-weight: 300;
            letter-spacing: 1px;
            color: #ddd;

            &:hover {
                cursor: pointer;
            }

            &:first-child, &:nth-child(2) {
                
                &::after {
                    content: '';
                    width: 40px;
                    height: 2px;
                    background-color: rgba(255,255,255,.2);
                    position: absolute;
                    float: right;
                    top: 50%;
                    margin: 0 5px;
                    margin-top: 2px;
                }
            }

            &:nth-child(2), &:nth-child(3) {
                margin-left: 60px;
            }
        }

        .isClick {
            color: #987750;
        }
    }

    .fade-enter-active,
    .fade-leave-active {
    transition: opacity 0.3s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
    opacity: 0;
    }
}



</style>