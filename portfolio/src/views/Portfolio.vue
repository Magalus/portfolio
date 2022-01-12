<template>
    <div id="portfolio" class="portfolio" :class="{darkModePortfolio : this.darkMode}">
        <h2>Portfolio</h2>
        <div class="projects">
            <div class="project">
                <div class="projectImg" :style="{backgroundImage: 'url(' + require('../assets/img/mariage.png') + ')'}"></div>
                <span>Mariage</span>
                <span>VueJS</span>
            </div>
            <div class="project">
                <div class="projectImg" :style="{backgroundImage: 'url(' + require('../assets/img/facebooklite.png') + ')'}"></div>
                <span>Facebook Lite</span>
                <span>NuxtJS - Laravel</span>
            </div>
            <div class="project">
                <div class="projectImg" :style="{backgroundImage: 'url(' + require('../assets/img/construction.jpg') + ')'}"></div>
                <span>Quiz</span>
                <span>VueJS</span>
            </div>
            <div class="project">
                <div class="projectImg" :style="{backgroundImage: 'url(' + require('../assets/img/construction.jpg') + ')'}"></div>
                <span>Météo</span>
                <span>VueJS</span>
            </div>
            <div class="project">
                <div class="projectImg" :style="{backgroundImage: 'url(' + require('../assets/img/detectiondechet.png') + ')'}"></div>
                <span>Détection de déchet</span>
                <span>Python - Tenserflow</span>
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

.darkModePortfolio {
    color: #ddd !important;
    background-color: #1D1B19 !important;
}

.portfolio {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    color: black;
    background-color: #F3F3F3;
    padding-left: 300px;

    h2 {
        font-size: 33px;
        font-weight: 400;
        letter-spacing: 1px;
        margin-bottom: 50px;
    }

    .projects {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;

        .project {
            display: flex;
            flex-direction: column;
            width: 400px;
            height: 300px;
            margin: 20px 30px;

            .projectImg {
                width: 100%;
                height: 100%;
                border: 1px solid #C9C9C9;
                background-size: cover;
                background-position: center;

                &:hover {
                    cursor: pointer;
                }
            }

            span {                
                &:first-of-type {
                    font-size: 18px;
                    font-weight: bold;
                    margin-top: 10px;
                    margin-bottom: 3px;
                }

                &:last-of-type {
                    font-size: 16px;
                }
            }
        }
    }
}

</style>