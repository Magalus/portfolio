<template> 
    <nav class="navbar">
        <div class="headNavbar">
            <div class="avatar"></div>
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
    </nav>
</template>


<script>

export default {
    props: {
        darkMode: Boolean,
    },
    data() {
        return {
            isOverLinkedin: false,
            isOverGit: false,
            isOverCV: false
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

        .router-link-active {
            color:  #987750;
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

</style>