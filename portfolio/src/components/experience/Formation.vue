<template>
    <div class="Formation">
        <div>
            <span class="school">Ynov ( 2019 - 2021 )</span>
            <span class="study">Mastère Expert en Intelligence Artificielle</span>
            <span class="resume">Apprentissage des différents concepts de l'intelligence artificielle ( Machine learning, Deep Learning, Reinforcement learning, NLP )</span>
        </div>
        <div>
            <span class="school">IUT Bordeaux ( 2018 - 2019 )</span>
            <span class="study">Licence Professionnelle Développement Web</span>
            <span class="resume">Approfondissement des compétences en développement frontend, backend et mobile ( VueJS, Ruby, Laravel etc. ).</span>
        </div>
        <div>
            <span class="school">Webforce 3 ( 2018 )</span>
            <span class="study">Certificat Professionel Développeur Web</span>
            <span class="resume">Découverte des bases du développement Web à travers différents projets pratiques ( HTML, CSS, Javascript, PHP, Laravel )</span>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.Formation {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin-top: 70px;

    div {
        background-color: #181715;
        max-width: 900px;
        width: 80%;
        min-height: 200px;
        padding: 15px 30px;
        margin: 10px 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;

        .school {
            font-size: 20px;
            font-weight: 300;

            @media screen and (max-width: 1160px) {
                font-size: 18px;
            }

            @media screen and (max-width: 720px) {
                font-size: 16px;
            }
        }

        .study {
            font-size: 25px;
            font-weight: 400;
            margin: 10px 0px;

            @media screen and (max-width: 1160px) {
                font-size: 23px;
            }

            @media screen and (max-width: 720px) {
                font-size: 21px;
            }
        }

        .resume {
            font-size: 18px;
            font-weight: 400;
            color: #888;

            @media screen and (max-width: 1160px) {
                font-size: 16px;
            }

            @media screen and (max-width: 720px) {
                font-size: 14px;
            }
        }
    }
}

</style>
