<template>
    <div class="Skill">
        <div>
            <div class="language">
                <span>HTML5</span>
                <span class="percent htmlPercent">95%</span>
                <div class="bar htmlBar"></div>
            </div>
            <div class="language">
                <span>CSS3</span>
                <span class="percent cssPercent">90%</span>
                <div class="bar cssBar"></div>
            </div>
        </div>
        <div>
            <div class="language">
                <span>Javascript</span>
                <span class="percent javascriptPercent">70%</span>
                <div class="bar javascriptBar"></div>
            </div>
            <div class="language">
                <span>VueJS & NuxtJS</span>
                <span class="percent vuenuxtPercent">75%</span>
                <div class="bar vuenuxtBar"></div>
            </div>
        </div>
        <div>
             <div class="language">
                <span>PHP</span>
                <span class="percent phpPercent">60%</span>
                <div class="bar phpBar"></div>
            </div>
            <div class="language">
                <span>Laravel</span>
                <span class="percent laravelPercent">50%</span>
                <div class="bar laravelBar"></div>
            </div>
        </div>
        <div>
            <div class="language">
                <span>Python</span>
                <span class="percent pythonPercent">80%</span>
                <div class="bar pythonBar"></div>
            </div>
            <div class="language">
                <span>Scikit-learn & Tensorflow</span>
                <span class="percent scikitPercent">75%</span>
                <div class="bar scikitBar"></div>
            </div>
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
        justify-content: space-evenly;
        width: 100%;
        margin: 10px 0px;

        .language {
            width: 45%;
            max-width: 650px;
            display: flex;
            flex-direction: column;
            position: relative;

            .percent {
                position: absolute;
                background-color: #292725;
                color: #987750;
                padding: 0 8px;
                line-height: 24px;
                font-size: 14px;
                font-weight: 400;
                bottom: 20px;
                opacity: 0;
                transform: translateX(-50%);
            }

            @keyframes PercentBarAppear {
                0% {
                    left: 0;
                }
                10%{
                    opacity: 0.2;
                }
                50%{
                    opacity: 1;
                }
                100% {
                    opacity: 1;
                    left: var(--percentEnd)
                }
            }
            
            .htmlPercent {
                --percentEnd: 95%;
                animation: 2s forwards 0s 1 PercentBarAppear;
            }

            .cssPercent {
                --percentEnd: 90%;
                animation: 2s forwards 0s 1 PercentBarAppear;
            }

            .javascriptPercent {
                --percentEnd: 70%;
                animation: 2s forwards 0.5s 1 PercentBarAppear;
            }

            .vuenuxtPercent {
                --percentEnd: 75%;
                animation: 2s forwards 0.5s 1 PercentBarAppear;
            }

            .phpPercent {
                --percentEnd: 60%;
                animation: 2s forwards 1s 1 PercentBarAppear;
            }

            .laravelPercent {
                --percentEnd: 50%;
                animation: 2s forwards 1s 1 PercentBarAppear;
            }

            .pythonPercent {
                --percentEnd: 80%;
                animation: 2s forwards 1.5s 1 PercentBarAppear;
            }

            .scikitPercent {
                --percentEnd: 75%;
                animation: 2s forwards 1.5s 1 PercentBarAppear;
            }
                            


            .bar {
                height: 2px;
                background-color: rgba(255,255,255,.2);
                position: relative;

                &::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 100%;
                    height: 100%;
                    background-color: #987750;
                    


                }
            }

            @keyframes progressBarAppear {
                0% {
                    width: 0px;
                }

                100% {
                    width: var(--widthEnd);
                }
            }

            .htmlBar {
                &::before {
                    --widthEnd: 95%;
                    animation: 2s forwards 0s 1 progressBarAppear;
                }
            }

            .cssBar {
                &::before {
                    --widthEnd: 90%;
                    animation: 2s forwards 0s 1 progressBarAppear;
                }
            }

            .javascriptBar {
                &::before {
                    --widthEnd: 70%;
                    animation: 2s forwards 0.5s 1 progressBarAppear;
                }
            }

            .vuenuxtBar {
                &::before {
                    --widthEnd: 75%;
                    animation: 2s forwards 0.5s 1 progressBarAppear;
                }
            }

            .phpBar {
                &::before {
                    --widthEnd: 60%;
                    animation: 2s forwards 1s 1 progressBarAppear;
                }
            }

            .laravelBar {
                &::before {
                    --widthEnd: 50%;
                    animation: 2s forwards 1s 1 progressBarAppear;
                }
            }

            .pythonBar {
                &::before {
                    --widthEnd: 80%;
                    animation: 2s forwards 1.5s 1 progressBarAppear;
                }
            }

            .scikitBar {
                &::before {
                    --widthEnd: 75%;
                    animation: 2s forwards 1.5s 1 progressBarAppear;
                }
            }
        }

        span {
            font-size: 20px;
            font-weight: 300;
        }
    }

}

</style>