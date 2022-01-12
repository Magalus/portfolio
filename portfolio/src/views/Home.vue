<template>
    <div id="home" class="home" :class="{darkModeHome : this.darkMode}">
        <div class="presentationContainer">
            <div class="presentation">
                <h2>INTRODUCTION</h2>
                <h1>DÉVELOPPEUR WEB</h1>
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

export default {
    props: {
        darkMode: Boolean,
    }
}

</script>


<style lang="scss" scoped>

.darkModeHome {
    color: #ddd !important;
    background-color: #1D1B19 !important;
}

.home {

    display: flex;
    color: black;
    width: 100%;
    min-height: 100vh;
    background-color: #F3F3F3;
    padding-left: 300px;

    .presentationContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;

        .presentation {
            display: flex;
            flex-direction: column;
            width: 50%;

            h1 {
              font-size: 48px;
              font-weight: 400;
              margin: 30px 0px 40px 0px;
              position: relative;

                &::after {
                    content: '';
                    position: absolute;
                    bottom: -5px;
                    height: 2px;
                    background-color: rgba(255,255,255,.2);
                    width: 150px;
                    left: 0;
                }
            }

            h2 {
              font-size: 21px;
              font-weight: 500;
              letter-spacing: 1px;
              color: #987750;
            }

            span {
                font-size: 30px;
                color: #888;
                text-align: justify;
            }
        }
    }
}

</style>