<template>
    <div id="contact" class="contact" :class="{darkModeContact : this.darkMode}">
        <h2>Contact</h2>
        <form @submit.prevent="onSubmit()">
            <input type="text" v-model="this.form.name" placeholder="Nom*" ref="mail" required>
            <input type="email" v-model="this.form.mail" placeholder="Mail*" required>
            <textarea placeholder="Message...*" v-model="this.form.message" rows="3" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</template>


<script>
export default {
    props: {
        darkMode: Boolean,
    },
    data() {
        return {
            form: {
                name: "",
                mail: "",
                message: ""
            }
        }
    },
    methods: {
        onSubmit() {
            console.log(this.form)
            this.form.name = ""
            this.form.mail = ""
            this.form.message = ""
        }
    },
    mounted() {
        this.$refs.mail.focus()
    }
}
</script>


<style lang="scss" scoped>

.darkModeContact {
    color: white !important;
    background-color: #1D1B19 !important;
    border-top: 1px solid rgba(255,255,255,.2) !important;
}

.contact {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    color: black;
    background-color: #F3F3F3;
    padding-left: 20%;
    border-top: 1px solid rgba(0,0,0,.2);

    h2 {
        margin-bottom: 20px;
        font-size: 30px;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 500px;

        input {
            margin: 10px 0px;
            padding: 5px;

            &:focus {
                outline: none;
            }

            &::placeholder {
                font-size: 17px;
            }
        }

        textarea {
            margin: 10px 0px;
            padding: 5px;

            &:focus {
                outline: none;
            }

            &::placeholder {
                font-size: 17px;
            }
        }

        button {
            margin: 10px 0px;
            font-size: 17px;

            &:hover {
                cursor: pointer;
            }
        }
    }
}

</style>