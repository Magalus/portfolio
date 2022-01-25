<template>
    <div id="home" class="home">
        <div class="presentationContainer">
            <div class="presentation">
                <h2>INTRODUCTION</h2>
                <vue-writer 
                    class="title" 
                    :array="['MAEL VIDAMENT', 'DÉVELOPPEUR WEB', 'FREELANCE']" 
                    :start="500"
                    :eraseSpeed="50" 
                    :typeSpeed="100"
                />
                <span>
                    Je suis blabla blabla blabla à Bordeaux, 
                    spécialisé dans le VueJS, NuxtJS et Laravel 
                    et qui blabla blabla blabla sur des projets 
                    blabla blabla blabla.
                </span>
            </div>
        </div>
    </div>
</template>

<script>

import VueWriter from 'vue-writer'

export default {
    components: {VueWriter}
}

</script>

<style lang="scss" scoped>

.home {

    display: flex;
    color: #ddd;
    width: 100%;
    min-height: 100vh;
    background-color: #1D1B19;
    padding-left: 300px;

    @media screen and (max-width: 1024px) {
        padding-left: 0px;
    }

    .presentationContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;

        .presentation {
            display: flex;
            flex-direction: column;
            width: 80%;
            max-width: 700px;

            .is-typed {
                font-size: 48px;
                font-weight: 400;
                color: white;
                position: relative;

                @media screen and (max-width: 620px) {
                    font-size: 36px;
                }

                @media screen and (max-width: 420px) {
                    font-size: 32px;
                }

                @media screen and (max-width: 380px) {
                    font-size: 25px;
                }

                span {
                    background-color: red !important;
                }

                &::after{
                    content: "";
                    position: absolute;
                    background-color: #987750;
                    height: 100%;
                    border-left: 1px solid white;
                    margin-left: -5px;
                }
            }

            .is-typed span.cursor {
                display: inline-block;
                width: 3px;
                background-color: white;
                animation: blink 1s infinite;
            }

            h2 {
                font-size: 21px;
                font-weight: 500;
                letter-spacing: 1px;
                color: #987750;
                margin-bottom: 40px;

                @media screen and (max-width: 620px) {
                        font-size: 18px;
                }

                @media screen and (max-width: 420px) {
                    font-size: 17px;
                }

                @media screen and (max-width: 380px) {
                    font-size: 15px;
                }
            }

            span {
                font-size: 30px;
                color: #888;
                text-align: justify;
                margin-top: 15px;

                @media screen and (max-width: 620px) {
                        font-size: 24px;
                }

                @media screen and (max-width: 420px) {
                    font-size: 22px;
                }

                @media screen and (max-width: 380px) {
                    font-size: 18px;
                }
            }
        }
    }
}

</style>