<template> 
    <nav>
        <div class="navbar">
            <div class="headNavbar">
                <div class="avatar" ></div>
                <h3>Maël Vidament</h3>
            </div>
            <div class="routes">
                <router-link to="/">
                    Accueil
                </router-link>
                <router-link to="/experience">
                    À propos
                </router-link>
                <router-link to="/portfolio">
                    Portfolio
                </router-link>
                <router-link to="/contact">
                    Contact
                </router-link>
            </div>
            <div class="links">
                <div>
                    <a href="https://www.linkedin.com/in/mael-vidament/" 
                    target="_blank" 
                    @mouseover="this.isOverLinkedin = true" 
                    @mouseleave="this.isOverLinkedin = false"
                    >
                        <img v-if="!this.isOverLinkedin" class="logo" src="../../assets/logo/linkedin.png" alt="">
                        <img v-else class="logo" src="../../assets/logo/linkedin_hover.png" alt="">
                    </a>
                    <a class="github"
                    href="https://github.com/Magalus" 
                    target="_blank"
                    @mouseover="this.isOverGit = true" 
                    @mouseleave="this.isOverGit = false"
                    >
                        <img v-if="!this.isOverGit" class="logo" src="../../assets/logo/github.png" alt="">
                        <img v-else class="logo" src="../../assets/logo/github_hover.png" alt="">
                    </a>
                    <a href="../../assets/pdf/cv.pdf" download="cv_mael_vidament.pdf">
                        <span>CV</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="button-responsive" @click="this.isResponsiveNav = !this.isResponsiveNav">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <div class="nav-responsive" :style="this.isResponsiveNav ? 'width: 280px;' : 'width: 0px;' ">
            <div class="close" @click="this.isResponsiveNav = !this.isResponsiveNav"></div>
            <router-link 
                class="nav-links-responsive" 
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/">
                Accueil
            </router-link>
            <router-link 
                class="nav-links-responsive" 
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/experience">
                À propos
            </router-link> 
            <router-link 
                class="nav-links-responsive" 
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/portfolio">
                Portfolio
            </router-link> 
            <router-link 
                class="nav-links-responsive" 
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/contact">
                Contact
            </router-link> 
        </div>
    </nav>
</template>


<script>

export default {
    data() {
        return {
            isOverLinkedin: false,
            isOverGit: false,
            isOverCV: false,
            isResponsiveNav: false,
        }
    },
}

</script>


<style lang="scss" scoped>

.navbar {
    position: fixed;
    height: 100vh;
    width: 300px;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    background-color: #141312;
    border-right: 1px solid rgba(255,255,255,.2);

    @media screen and (max-width: 1024px) {
        display: none;
    }

    .headNavbar {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
        
        .avatar {
            width: 170px;
            height: 170px;
            background-image: url('../../assets/img/avatar.png');
            background-color: #ddd;
            background-size: cover;
            background-position: center;
            background-position-y: inherit;
            border-radius: 50%;
        }

        h3 {
            color: #ddd;
            margin-top: 10px;
            font-size: 22px;
            font-weight: 500;
        }
    }

    .routes {
        display: flex;
        flex-direction: column;
        width: 100%;

        a {
            text-decoration: none;
            color: #ddd;
            font-size: 22px;
            font-weight: 300;
            margin: 1px 5px;
            padding: 5px 0px;
            text-align: center;
            position: relative;

            &:hover {
                color: #ddd;
            }

            &::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 100%;
                height: 100%;
                width: 0px;
                background: rgba(236, 148, 47, 0.2);
                transition: all 0.4s ease-out;
            }

            &:hover::before {
                width: 100%;
            }

        }
    }

    .links {
        display: flex;
        align-items: flex-end;
        justify-content: center;
        margin-bottom: 20px;

        .logo {
            width: 16px;
            height: 16px;
        }

        .github {
            margin: 0px 20px 0px 22px;
        }
        
        a {
            text-decoration: none;
            color: #AAB1B8;
            font-weight: 700;
            font-size: 16px;

            &:hover {
               color:  #987750 
            }
        }
    }
}

.nav-responsive {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: fixed;
    top: 0;
    left: 0;
    width: 320px;
    height: 100%;
    z-index: 99;
    background-color: #141312;
    box-shadow: 0 0 10px rgb(0 0 0 / 20%);
    overflow-y: auto;
    overflow-x: hidden;
    padding: 60px 0 40px 0;
    transition: ease-in-out 0.5s;
    

    .close {
        position: absolute;
        right: 15px;
        top: 17px;
        width: 32px;
        height: 32px;
        opacity: 0.6;

        &:hover {
            opacity: 1;
            cursor: pointer;
        }

        &:after, &::before {
            position: absolute;
            left: 15px;
            top: 5px;
            content: ' ';
            height: 20px;
            width: 2px;
            background-color: white;
        }

        &:after {
            transform: rotate(45deg);
        }
        
        &:before {
            transform: rotate(-45deg);
        }
    }

    .nav-links-responsive {
        color: #ddd;
        text-align: center;
        font-size: 22px;
        font-weight: 300;
        text-decoration: none;
        width: 100%;
        cursor: pointer;
        padding: 10px 15px;
        white-space: nowrap;
        overflow: hidden;
        transition: all ease 0.35s;

        &:nth-child(2) {
            padding-top: 20px;
        }


        &:hover {
            color:#d18f7f;
        }
    }

    .selectedResponsive {
        color:#d18f7f;
    }

    @media screen and (min-width: 1024px) {
        width: 0px !important;
    }
}

.button-responsive {
    position: absolute;
    top: 10px;
    right: 18px;
    width: 35px;
    height: 35px;
    cursor: pointer;
    display: none;
    z-index: 1;

    span {
        width: 22px;
        height: 2px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0px;
        margin: auto;
        background: #fff;

        &:first-child {
            top: -12px;
        }

        &:last-child {
            top: 13px;
        }
    }

    @media screen and (max-width: 1024px) {
        display: inline;
    }
}

.router-link-active {
    color:  #987750 !important;
}

</style>