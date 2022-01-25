<template>
    <div id="formation" class="formation">
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
        <component :is="this.view" class="actualView"></component>
    </div>
</template>

<script>

import Professional from '@/components/experience/Professional.vue'
import Formation from '@/components/experience/Formation.vue'
import Skill from '@/components/experience/Skill.vue'

export default {
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

.formation {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    color: #ddd;
    background-color: #1D1B19;
    padding-left: 300px;

    @media screen and (max-width: 1024px) {
        padding-left: 0px;
    }

    .experienceLinks {
        margin-top: 70px;

        .experienceLink {
            position: relative;
            font-size: 32px;
            font-weight: 300;
            letter-spacing: 1px;
            color: #ddd;

            @media screen and (max-width: 720px) {
                font-size: 24px;
            }

            @media screen and (max-width: 590px) {
                font-size: 20px;
            }

            @media screen and (max-width: 480px) {
                    font-size: 16px;
                }

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

                    @media screen and (max-width: 720px) {
                        width: 30px;
                        margin-top: 2px;
                    }

                    @media screen and (max-width: 590px) {
                        width: 20px;
                        margin-top: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        width: 10px;
                        margin-top: 0px;
                    }
                }
            }

            &:nth-child(2), &:nth-child(3) {
                margin-left: 60px;

                @media screen and (max-width: 720px) {
                    margin-left: 50px;
                }

                @media screen and (max-width: 590px) {
                    margin-left: 40px;
                }

                @media screen and (max-width: 480px) {
                    margin-left: 30px;
                }
            }
        }

        .isClick {
            color: #987750;
        }
    }

    .actualView {
        animation: Translate 1s ease;
        width: 90%;

        @keyframes Translate {
            0% {
                transform: rotateY(20deg) rotateZ(-3deg);
                opacity: 0;
            }
            100% {
                transform: rotateY(0) rotateZ(0);
                opacity: 1;
            }
        }
    }
}



</style>