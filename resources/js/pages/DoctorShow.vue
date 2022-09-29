<template>
    <div>
        <!-- Dottore -->
        <div class="container-fluid">
            <div class="container d-flex justify-content-between align-items-center h-100">
                <div class="left-jumbo">
                    <h1 class="pb-3">{{doctor.name}} {{doctor.surname}}</h1>
                    <!--  <span v-for="specialization in doctor.specializations" :key="specialization.id">
                        {{specialization.name}}
                    </span>-->

                    <p class="pb-3">{{doctor.email}}</p>
                    <p class="pb-3">{{doctor.phone}}</p>
                    <p class="pb-3">{{doctor.addres}}</p>
                    <p class="pb-3">
                        <span>Prestazioni offerte:</span>
                        <br />
                        {{doctor.services}}
                    </p>
                </div>
                <div class="h-75 right-jumbo">
                    <img class="h-100 floating-elements" src="/images/615dd47b94487f5cd8df6c49_icons8-banned-129.png"
                        alt="" />
                    <img :src="'/storage/'+doctor.image" class="h-100 doctor-jumbo" alt="..." />
                </div>
                <img class="h-100 right-bg-jumbo" src="/images/jumbo_right_bg.jpg" alt="" />
            </div>
        </div>

        <!-- Messaggi -->
        <div class="container-white">
            <div class="container">
                <div class="contact">
                    <div class="text-center">
                        <h2>Invia un messaggio al dottore</h2>
                        <br />
                        <div class="divider"></div>
                    </div>

                    <div>
                        <form class="form-msg needs-validation" action="" @submit.prevent="onFormMessageSubmit()">
                            <div class="form-group p-2">
                                <label for="name">Inserisci il tuo nome:</label>
                                <input type="name" class="form-control" id="name" placeholder="Nome" name="name"
                                    v-model="name" required/>
                                <div class="invalid-feedback">
                                    Inserisci un Nome
                                </div>    
                            </div>
                            <div class="form-group p-2">
                                <label for="surname">Inserisci il tuo cognome:</label>
                                <input type="surname" class="form-control" id="surname" placeholder="Cognome"
                                    name="surname" v-model="surname" required/>
                                <div class="invalid-feedback">
                                    Inserisci un Cognome
                                </div>     
                            </div>
                            <div class="form-group p-2">
                                <label for="email">Inserisci la tua mail:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                    v-model="email" required/>
                                <div class="invalid-feedback">
                                    Inserisci la tua Email
                                </div>     
                            </div>
                            <div class="form-group p-2">
                                <label for="title">Inserisci titolo messagio:</label>
                                <input type="text" class="form-control" id="title"
                                    placeholder="Inserisci titolo messaggio" name="title" v-model="title" required/>
                                <div class="invalid-feedback">
                                    Inserisci titolo messaggio
                                </div>    
                            </div>
                            <div class="form-group p-2">
                                <label for="content">Inserisci il tuo messaggio con la richiesta:</label>
                                <textarea class="form-control pb-5" id="content" rows="3" name="content"
                                    v-model="content" required>
                                </textarea>
                                <div class="invalid-feedback">
                                    Inserisci contenuto messaggio
                                </div>
                            </div>
                            <div class="text-center py-2"> 
                                <button type="submit" class="text-center btn btn-primary">Invia</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recensioni -->
        <div class="container-blue">
            <div class="container py-5 my-5">
                <h2 class="text-center">Recensioni</h2>
                <div>
                    <div class="my-row">
                        <div class="col">
                            <div class="my-card p-5">
                                <div class="d-flex gap-4 pb-4">
                                    <img class="card-img" src="/images/jumbo_doctor.png" alt="" />
                                    <div>
                                        <h4>Name Surname</h4>
                                        <span class="subtitle">Happy Patient</span>
                                    </div>
                                </div>
                                <p class="p-style">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quia nam autem distinctio,
                                    dolorum a laboriosam et tempora optio,
                                    tenetur porro debitis reiciendis vero facere
                                    quod. Molestiae, nostrum! Saepe, minus iure!
                                </p>
                                <div class="rating-bar py-2 px-4 d-flex justify-content-between">
                                    <h5>rated 4.3/5</h5>
                                    <div class="rating-stars">
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="my-card middle p-5">
                                <div class="d-flex gap-4 pb-4">
                                    <img class="card-img" src="/images/jumbo_doctor.png" alt="" />
                                    <div>
                                        <h4>Name Surname</h4>
                                        <span class="subtitle">Happy Patient</span>
                                    </div>
                                </div>
                                <p class="p-style">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quia nam autem distinctio,
                                    dolorum a laboriosam et tempora optio.
                                </p>
                                <div class="rating-bar py-2 px-4 d-flex justify-content-between">
                                    <h5>rated 4.5/5</h5>
                                    <div class="rating-stars">
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="my-card p-5">
                                <div class="d-flex gap-4 pb-4">
                                    <img class="card-img" src="/images/jumbo_doctor.png" alt="" />
                                    <div>
                                        <h4>Name Surname</h4>
                                        <span class="subtitle">Happy Patient</span>
                                    </div>
                                </div>
                                <p class="p-style">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quia nam autem distinctio,
                                    dolorum a laboriosam et tempora optio,
                                    tenetur porro debitis reiciendis vero facere
                                    quod. Molestiae, nostrum! Saepe, minus iure!
                                </p>
                                <div class="rating-bar py-2 px-4 d-flex justify-content-between">
                                    <h5>rated 4.7/5</h5>
                                    <div class="rating-stars">
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
                                        <i class="fa-solid fa-star gold-star"></i>
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
                            <label for="reviewName">Inserisci il tuo nome:</label>
                            <input type="text" class="form-control" id="reviewName" name="name" placeholder="Nome"
                                v-model="reviewName" required />
                        </div>
                        <div class="form-group py-2">
                            <div>Valutazione complessiva</div>
                            <div class="rate mb-4">
                                <input type="radio" id="star5" name="rating" value="5" v-model="reviewRating"/>
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rating" value="4" v-model="reviewRating"/>
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rating" value="3" v-model="reviewRating"/>
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rating" value="2" v-model="reviewRating"/>
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rating" value="1" v-model="reviewRating"/>
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group p-2 w-100 mt-2">
                            <label for="reviewTitle">Titolo recensione:</label>
                            <input type="title" class="form-control" name="title" id="reviewTitle" placeholder="Titolo"
                                v-model="reviewTitle" required />
                        </div>
                        <div class="form-group py-2">
                            <label for="reviewContent">Dai il tuo parere:</label>
                            <textarea class="form-control" id="reviewContent" name="content" v-model="reviewContent"
                                rows="3"></textarea>
                        </div>
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

@keyframes rotating {
    from {
        -webkit-transform: translateX(20%) translateY(-15%) rotate(0deg);
    }

    to {
        -webkit-transform: translateX(20%) translateY(-15%) rotate(360deg);
    }
}

.right-bg-jumbo {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 0;
}

.floating-elements {
    position: absolute;
    top: 0;
    right: 0;
    // z-index: 2;
    // -webkit-animation: rotating 15s linear infinite;
    // -moz-animation: rotating 15s linear infinite;
    // -ms-animation: rotating 15s linear infinite;
    // -o-animation: rotating 15s linear infinite;
    // animation: rotating 15s linear infinite;
}

.left-jumbo {
    max-width: 500px;
}

.right-jumbo {
    align-self: flex-end;
    position: relative;
}

.doctor-jumbo {
    position: relative;
    z-index: 3;
    border-radius: 50%;
    bottom: 80px;
    height: 200px;
    width: 500px;
}

.btn-primary {
    background-color: #4056ff;
    border-color: #4056ff;
    font-weight: 500;
}

.container-fluid {
    height: calc(100vh - 80px);
    background-color: #e9f6ff;
}

.container-blue {
    background-color: #e9f6ff;
    padding-top: 20px;
    padding-bottom: 6rem;
}

.container-white {
    background-color: #ffffff;
    padding-top: 20px;
    padding-bottom: 6rem;
}


.contact {
    width: 90%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    padding: 20px;
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
    margin-left: 25%;
    margin-right: 25%;
    width: 50%;
}

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}

.rate:not(:checked) > input {
    display: none;
}
.rate:not(:checked) > label {
    float: right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

.flex-img {
    display: flex;
    justify-content: center;
}

.my-row {
    display: flex;
    border: 1px solid #e9f6ff;
    border-radius: 5px;
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
    .right-bg-jumbo {
        display: none;
    }
}
</style>
