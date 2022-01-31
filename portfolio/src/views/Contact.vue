<template>
    <div id="contact" class="contact">
        <h2>Contact</h2>
        <form @submit.prevent="onSubmit()">
            <div class="firstLine">
                <input type="text" v-model="this.form.name" placeholder="Nom  *" ref="name" required>
                <input type="text" v-model="this.form.number" placeholder="Numéro">
            </div>
            <input type="email" v-model="this.form.mail" placeholder="Mail *" required>
             <input type="text" v-model="this.form.subject" placeholder="Sujet">
            <textarea placeholder="Message... *" v-model="this.form.message" rows="4" required></textarea>
            <button type="submit">Envoyer</button>
            <div class="success" v-if="this.confirmation == 'success'">Message envoyé</div>
            <div class="fail" v-if="this.confirmation == 'fail'">Echec de l'envoi</div>
        </form>
    </div>
</template>


<script>

import axios from 'axios';

export default {
    data() {
        return {
            form: {
                name: "",
                number: "",
                mail: "",
                subject: "",
                message: ""
            },
            confirmation: '',
        }
    },
    methods: {
        onSubmit() {
            axios
            .post('mail.php', this.form)
            .then(response => {
                this.confirmation = 'success';
                this.resetForm()
                return response;
            })
            .catch(error => {
                this.confirmation = 'fail';
                return error;
            });
        },
        resetForm() {
            this.form.name = ""
            this.form.number = ""
            this.form.mail = ""
            this.form.subject = ""
            this.form.message = ""
        }
    },
    mounted() {
        this.$refs.name.focus()
    }
}
</script>


<style lang="scss" scoped>

.contact {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    color: #ddd;
    background-color: #1D1B19;
    padding-left: 300px;

    @media screen and (max-width: 1024px) {
        padding-left: 0px;
    }

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
            background-color: #6C5538;
            color: #ddd;
            border: none;
            margin: 15px auto;
            border-radius: 20px;
            font-size: 20px;
            height: 40px;
            width: 140px;
            transition: all ease 0.35s;

            &:hover {
                cursor: pointer;
                background-color: #987750;
            }
        }

        .success {
            margin-top: 15px;
            margin-bottom: 20px;
            padding: 10px 0px 10px 15px;
            background-color:#d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .fail {
            margin-top: 15px;
            margin-bottom: 20px;
            padding: 10px 0px 10px 15px;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    }
}

</style>