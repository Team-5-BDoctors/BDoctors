<template>
    <div>
        <!-- Dottore -->
        <div class="colored-section">
            <div class="container">
                <div class="row align-items-center py-3">

                    <!-- col dati dottore -->
                    <div class="col-12 col-lg-6 flex">
                        <div class="img-cover">
                            <img :src="'/storage/'+doctor.image" class="doctor-photo w-100 h-100" alt="..." />
                        </div>
                        <div class="py-3">
                            <h1>{{doctor.name}} {{doctor.surname}}</h1>
                            <span class="spec" v-for="specialization in doctor.specializations"
                                :key="specialization.id">
                                {{specialization.name}}
                            </span>
                        </div>
                        <p class="pb-2"><span class="doctor-info">Email: </span>{{doctor.email}}</p>
                        <p class="pb-2"><span class="doctor-info">Telefono: </span>{{doctor.phone}}</p>
                        <p class="pb-2"><span class="doctor-info">Indirizzo: </span>{{doctor.address}}</p>
                        <p class="pb-3">
                            <span>Prestazioni offerte:</span>
                            <br />
                            {{doctor.services}}
                        </p>
                    </div>

                    <!-- col messaggi -->
                    <div class="col-12 col-lg-6">
                        <div class="contact py-3">
                            <div class="text-center">
                                <h3>Contatta il dottore</h3>
                                <br />
                                <div class="divider"></div>
                            </div>
                            <div>
                                <form class="form-msg needs-validation" action=""
                                    @submit.prevent="onFormMessageSubmit()">
                                    <div class="form-group py-2">
                                        <label for="name">Inserisci il tuo nome:*</label>
                                        <input type="name" class="form-control" id="name" placeholder="Nome" name="name"
                                            v-model="name" required />
                                        <div class="invalid-feedback">
                                            Inserisci un Nome
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="surname">Inserisci il tuo cognome:*</label>
                                        <input type="surname" class="form-control" id="surname" placeholder="Cognome"
                                            name="surname" v-model="surname" required />
                                        <div class="invalid-feedback">
                                            Inserisci un Cognome
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="email">Inserisci la tua mail:*</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            name="email" v-model="email" required />
                                        <div class="invalid-feedback">
                                            Inserisci la tua Email
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="title">Inserisci il titolo del messaggio:*</label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Inserisci titolo messaggio" name="title" v-model="title"
                                            required />
                                        <div class="invalid-feedback">
                                            Inserisci titolo messaggio
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="content">Inserisci il tuo messaggio con la richiesta:*</label>
                                        <textarea class="form-control pb-5" id="content" rows="3" name="content"
                                            v-model="content" required>
                                </textarea>
                                        <div class="invalid-feedback">
                                            Inserisci contenuto messaggio
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="text-center btn btn-primary">Invia</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recensioni -->
        <div class="container-blue">
            <div class="container py-5">
                <h2 class="text-center py-2">Recensioni</h2>
                <div>
                    <div class="my-row">
                        <div class="col-12 col-lg-4" v-for="review, i in doctor.reviews.slice(doctor.reviews.length - 3, doctor.reviews.lenght)" :key="i">
                            <div class="my-card h-100 p-5">
                                <div class="d-flex gap-4 pb-4">
                                    <div>
                                        <h4>{{ review.name }}</h4>
                                        <span class="subtitle">{{ review.title }}</span>
                                    </div>
                                </div>
                                <p class="p-style">
                                    {{review.content}}
                                </p>
                                <div class="rating-bar py-2 px-4 d-flex">
                                    <h5 class="me-2">rated {{review.rating}}/5</h5>
                                    <div class="rating-stars me-1"  v-for="stars in review.rating" :key="stars.id">
                                        <i class="fa-solid fa-star gold-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5">
                    <h3 class="text-center">La tua recensione</h3>
                    <form class="form-msg" action="" @submit.prevent="onFormReviewSubmit()">
                        <div class="form-group p-2">
                            <label for="reviewName">Inserisci il tuo nome:*</label>
                            <input type="text" class="form-control white-bg" id="reviewName" name="name"
                                placeholder="Nome" v-model="reviewName" required />
                        </div>
                        <div class="form-group p-2">
                            <label for="reviewTitle">Titolo recensione:*</label>
                            <input type="text" class="form-control white-bg" id="reviewTitle" name="title"
                                placeholder="Titolo" v-model="reviewTitle" required />
                        </div>
                        <div class="form-group p-2">
                            <label for="reviewContent">Dai il tuo parere:</label>
                            <textarea class="form-control white-bg" id="reviewContent" name="content"
                                v-model="reviewContent" rows="3"></textarea>
                        </div>
                        <div class="form-group p-2">
                            <div>Valutazione complessiva:*</div>
                            <div class="rate">
                                <input type="radio" id="star5" name="rating" value="5" v-model="reviewRating" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rating" value="4" v-model="reviewRating" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rating" value="3" v-model="reviewRating" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rating" value="2" v-model="reviewRating" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rating" value="1" v-model="reviewRating" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="text-center py-2">
                            <button type="submit" class="btn btn-primary text-center">
                                Invia recensione
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { RouterLink } from 'vue-router';
export default {
    data() {
        return {
            name: "",
            surname: "",
            email: "",
            title: "",
            content: "",
            doctor: {},
            reviewName: "",
            reviewTitle: "",
            reviewRating: null,
            reviewContent: "",
        };
    },
    name: "DoctorShow",
    props: {

    },
    mounted() {
        window.addEventListener("scroll", this.scrollFunction);
        this.getDoctorData()

    },
    methods: {
        scrollFunction() {
            var elements = document.getElementsByClassName("my-card");
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                var rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight) {
                    element.classList.add("appear");
                }
            }
        },
        onFormMessageSubmit() {
            axios.post("/api/contacts", {
                name: this.name,
                surname: this.surname,
                email: this.email,
                title: this.title,
                content: this.content,
                user_id: this.doctor.id
            })

            this.$router.push('/doctor/send-message')
        },
        onFormReviewSubmit() {
            axios.post("/api/reviews", {
                name: this.reviewName,
                title: this.reviewTitle,
                rating: this.reviewRating,
                content: this.reviewContent,
                user_id: this.doctor.id
            })
            this.$router.push('/doctor/send-message')

        },
        getDoctorData() {
            axios.get("/api/doctor/" + this.$route.params.doctor_slug)
                .then((resp) => {
                    this.doctor = resp.data;

                })
        }
    },
};
</script>

<style scoped lang="scss">
.my-card {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.5s ease-in-out;
    background-color: #ffffff;
    border: 1px solid #E9F6FF;

    &.appear {
        opacity: 1;
        transform: translateY(0px);
    }
}

h1 {
    font-size: 60px;
    font-weight: 500;
}

h2 {
    font-size: 45px;
    font-weight: 500;
}

span {
    font-size: 20px;
    font-weight: 500;
}

.spec {
    font-weight: 500;
    font-size: 30px;
    color: #4056ff;
}

p {
    font-weight: 200;
}

.img-cover {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    overflow: hidden;
}


.doctor-photo {
    object-fit: cover;
    object-position: top;
}

.doctor-info {
    font-size: 15px;
    font-weight: 500;
}

.btn-primary {
    background-color: #4056ff;
    border-color: #4056ff;
    font-weight: 500;
}

.colored-section {
    background-color: #e9f6ff;
}

.container-blue {
    background-color: #e9f6ff;
    padding-top: 20px;
    padding-bottom: 6rem;
}

.form-control {
    background-color: #e9f6ff;
}

.white-bg {
    background-color: white;
}

.white-space {
    background-color: #ffffff;
    padding: 80px 0;
}


.contact {
    margin-right: auto;
    margin-left: auto;
    border-style: solid;
    border-width: 1px;
    border-color: #d8eeff;
    border-radius: 10px;
    background-color: #fff;
}

.divider {
    width: 80px;
    height: 2px;
    margin-top: 10px;
    margin-bottom: 40px;
    border-color: transparent;
    background-color: #2ea4ff;
    margin: auto;
}

.form-msg {
    margin-left: auto;
    margin-right: auto;
    width: 70%;
}

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
    background-color: white;
    border-style: solid;
    border-width: 2px;
    border-color: #d7d7d7a8;
    border-radius: 10px;
    margin: 0 auto;
}

.rate:not(:checked)>input {
    display: none;
}

.rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ccc;
}

.rate:not(:checked)>label:before {
    content: '★ ';
}

.rate>input:checked~label {
    color: #ffc700;
}

.rate:not(:checked)>label:hover,
.rate:not(:checked)>label:hover~label {
    color: #deb217;
}

.rate>input:checked+label:hover,
.rate>input:checked+label:hover~label,
.rate>input:checked~label:hover,
.rate>input:checked~label:hover~label,
.rate>label:hover~input:checked~label {
    color: #c59b08;
}

.flex {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-left: 50px;
}

.my-row {
    display: flex;
    border: 1px solid #e9f6ff;
    border-radius: 5px;
    justify-content: center;
}

.my-card.middle {
    border-left: 1px solid #e9f6ff;
    border-right: 1px solid #e9f6ff;
}

.card-img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-fit: contain;
    background-color: #eefcff;
    border-color: #2ea4ff;
}

.subtitle {
    color: #2ea4ff;
}

.p-style {
    height: 120px;
    color: #8c92c2;
    overflow: hidden;
}

.rating-bar {
    background-color: #e9f6ff;
    border-radius: 10px;
}

.gold-star {
    color: gold;
}

@media screen and (max-width: 991px) {
    .my-row {
        display: block;
    }
}
</style>
