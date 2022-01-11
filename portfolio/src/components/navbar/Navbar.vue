<template> 
    <nav class="navbar">
        <div class="headNavbar">
            <div class="avatar"></div>
            <h3>Maël Vidament</h3>
        </div>
        <div class="routes">
            <a class="nav-links" href="#home" active-link="test">
                <div class="box" :class="{darkModeBox : this.darkMode}" @mouseover="this.isOverHome = true" @mouseleave="this.isOverHome = false">
                    <img v-if="this.darkMode & !this.isOverHome" src="../../assets/logo/home_black.png" alt="">
                    <img v-if="this.darkMode & this.isOverHome" src="../../assets/logo/home_white.png" alt="">
                    <img v-if="!this.darkMode" src="../../assets/logo/home_black.png" alt="">
                </div>
            </a> 
            <a class="nav-links" href="#formation">
                <div class="box" :class="{darkModeBox : this.darkMode}" @mouseover="this.isOverFormation = true" @mouseleave="this.isOverFormation = false">
                    <img v-if="this.darkMode & !this.isOverFormation" src="../../assets/logo/about_black.png" alt="">
                    <img v-if="this.darkMode & this.isOverFormation" src="../../assets/logo/about_white.png" alt="">
                    <img v-if="!this.darkMode" src="../../assets/logo/about_black.png" alt="">
                </div>
            </a>
            <a class="nav-links" href="#portfolio">
                <div class="box" :class="{darkModeBox : this.darkMode}" @mouseover="this.isOverPortfolio = true" @mouseleave="this.isOverPortfolio = false">
                    <img v-if="this.darkMode & !this.isOverPortfolio" src="../../assets/logo/portfolio_black.png" alt="">
                    <img v-if="this.darkMode & this.isOverPortfolio" src="../../assets/logo/portfolio_white.png" alt="">
                    <img v-if="!this.darkMode" src="../../assets/logo/portfolio_black.png" alt="">
                </div>
            </a> 
            <a class="nav-links" href="#contact">
                <div class="box" :class="{darkModeBox : this.darkMode}" @mouseover="this.isOverContact = true" @mouseleave="this.isOverContact = false">
                    <img v-if="this.darkMode & !this.isOverContact" src="../../assets/logo/contact_black.png" alt="">
                    <img v-if="this.darkMode & this.isOverContact" src="../../assets/logo/contact_white.png" alt="">
                    <img v-if="!this.darkMode" src="../../assets/logo/contact_black.png" alt="">
                </div>
            </a>
        </div>
        <div class="links">
            <div>
                <a href="https://www.linkedin.com/in/mael-vidament/" target="_blank">Linkedin</a> -
                <a href="https://github.com/Magalus" target="_blank">Github</a> -
                <a href="#" target="_blank">CV</a>
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
            isOverHome: false,
            isOverFormation: false,
            isOverPortfolio: false,
            isOverContact: false
        }
    },
}

</script>


<style lang="scss" scoped>

.navbar {
    position: fixed;
    height: 100vh;
    width: 20%;
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
            background-color: white;
            background-size: cover;
            background-position: center;
            background-position-y: inherit;
            border-radius: 50%;
        }

        h3 {
            color: white;
            margin-top: 10px;
            font-size: 22px;
            font-weight: 400;
        }
    }

    .routes {
        
        .darkModeBox {
            background-color: white !important;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background-color: #DFDFDE;
            border-radius: 50%;
            margin: 20px 0px;

            &:hover {
                background-color: #987750 !important;
            }

            img {
                width: 20px;
                height: 20px;
            }
        }

        .router-link-active {
            
            .box {
                background-color: white !important;
            }
        }
    }

    .links {
        display: flex;
        align-items: flex-end;
        color: white;
        margin-bottom: 20px;

        a {
            color: white;
            text-decoration: none;

            &:hover {
                color: #987750 !important;
            }
        }
    }
    
}

</style>