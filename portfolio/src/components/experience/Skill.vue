<template>
    <div class="Skill">
        <div>
            <span>Html</span>
            <span>CSS</span>
            <span>Javascript - VueJS - NuxtJS</span>
            <span>Php / Laravel</span>
            <span>Python / scikit-learn / tensorflow</span>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.Skill {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;

    div {
        display: flex;
        flex-direction: column;

        span {
            font-size: 22px;
            font-weight: 300;
        }
    }

}

</style>