<template>
    <div class="Professional">
        <div>
            <span class="company">Thinkdeep AI ( 2020 - 2021 )</span>
            <span class="post">Machine Learning Engineer</span>
            <span class="resume">Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        </div>
        <div>
            <span class="company">La Compagnie Fiduciaire ( 2019 - 2020 )</span>
            <span class="post">Développeur Big Data</span>
            <span class="resume">Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        </div>
        <div>
            <span class="company">Orange ( 2018 - 2019 )</span>
            <span class="post">Développeur Web</span>
            <span class="resume">Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.Professional {
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
        height: 200px;
        margin: 10px 0px;
        padding: 0px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;

        .company {
            font-size: 20px;
            font-weight: 300;
        }

        .post {
            font-size: 25px;
            font-weight: 400;
        }

        .resume {
            font-size: 18px;
            font-weight: 400;
            color: #888;
        }
    }
}

</style>