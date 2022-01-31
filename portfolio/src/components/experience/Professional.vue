<template>
    <div class="Professional">
        <div>
            <span class="company">Thinkdeep AI ( 2020 - 2021 )</span>
            <span class="post">Machine Learning Engineer</span>
            <span class="resume">Développement et amélioration de différents algorithmes de détection de défauts et d'objets (Tensorflow, Scikit-Learn).</span>
        </div>
        <div>
            <span class="company">La Compagnie Fiduciaire ( 2019 - 2020 )</span>
            <span class="post">Développeur Web / Big Data</span>
            <span class="resume">Amélioration et maintenance d'un algorithme de sugestion d'association entre des comptes et des opérations bancaires.</span>
        </div>
        <div>
            <span class="company">Orange ( 2018 - 2019 )</span>
            <span class="post">Développeur Web</span>
            <span class="resume">Développement d'un portail Web en JEE dédié aux experts énergie nationaux.</span>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.Professional {
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
        margin: 10px 0px;
        padding: 15px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;

        .company {
            font-size: 20px;
            font-weight: 300;

            @media screen and (max-width: 1160px) {
                font-size: 18px;
            }

            @media screen and (max-width: 720px) {
                font-size: 16px;
            }
        }

        .post {
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