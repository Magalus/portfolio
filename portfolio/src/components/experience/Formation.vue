<template>
    <div class="Formation">
        <div>
            <span class="school">Ynov ( 2019 - 2021 )</span>
            <span class="study">Mastère Expert en Intelligence Artificielle</span>
            <span class="resume">Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        </div>
        <div>
            <span class="school">IUT Bordeaux ( 2018 - 2019 )</span>
            <span class="study">Licence Professionnelle Développement Web</span>
            <span class="resume">Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        </div>
        <div>
            <span class="school">Webforce 3 ( 2018 )</span>
            <span class="study">Certificat Professionel Développeur Web</span>
            <span class="resume">Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.Formation {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;

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
        }

        .study {
            font-size: 25px;
            font-weight: 400;
            margin: 10px 0px;
        }

        .resume {
            font-size: 18px;
            font-weight: 400;
            color: #888;
        }
    }
}

</style>
