<template>
    <div id="contact" class="contact" :class="{darkModeContact : this.darkMode}">
        <h2>Contact</h2>
        <form @submit.prevent="onSubmit()">
            <div class="firstLine">
                <input type="text" v-model="this.form.name" placeholder="Nom *" ref="mail" required>
                <input type="text" v-model="this.form.number" placeholder="Numéro" required>
            </div>
            <input type="email" v-model="this.form.mail" placeholder="Mail *" required>
            <textarea placeholder="Message... *" v-model="this.form.message" rows="4" required></textarea>
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
                number: "",
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
    color: #ddd !important;
    background-color: #1D1B19 !important;
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
    padding-left: 300px;

    h2 {
        font-size: 33px;
        font-weight: 400;
        letter-spacing: 1px;
        margin-bottom: 40px;
        max-width: 700px;
        width: 80%;
        position: relative;

        &::after {
            content: '';
            position: absolute;
            bottom: -15px;
            height: 2px;
            background-color: rgba(255,255,255,.2);
            width: 200px;
            left: 0;
        }
    }

    form {
        display: flex;
        flex-direction: column;
        max-width: 700px;
        width: 80%;

        .firstLine {
            display: flex;
            justify-content: space-between;

            input {
                width: 48%;
            }
        }

        input {
            color: #ddd;
            background-color: #343A40;
            border: none;
            margin: 13px 0px;
            padding: 5px 5px 5px 20px;
            font-size: 20px;
            height: 50px;

            &:focus {
                outline: none;
            }

            &::placeholder {
                color: #AAB1B8;
            }
        }

        textarea {
            color: #ddd;
            background-color: #343A40;
            border: none;
            margin: 12px 0px;
            padding: 5px 5px 5px 20px;
            font-size: 20px;

            &:focus {
                outline: none;
            }

            &::placeholder {
                color: #AAB1B8
            }
        }

        button {
            background-color: #987750;
            color: #ddd;
            border: none;
            margin: 10px auto;
            border-radius: 20px;
            font-size: 20px;
            height: 40px;
            width: 140px;
            transition: all ease 0.35s;

            &:hover {
                cursor: pointer;
                background-color: #6C5538;
            }
        }
    }
}

</style>