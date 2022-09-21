<template>
    <div>
        <!-- Dottore -->
        <div class="container-fluid">
            <div
                class="container d-flex justify-content-between align-items-center h-100"
            >
                <div class="left-jumbo">
                    <h1 class="pb-3">Name Surname</h1>
                    <p class="pb-3 spec">Neurology</p>
                    <p class="pb-3">Email</p>
                    <p class="pb-3">Phone</p>
                    <p class="pb-3">Adress</p>
                    <p class="pb-3">
                        <span>Prestazioni offerte:</span>
                        <br />
                        Visite specialistiche, impegnative, chirurgia
                        ambulatoriale
                    </p>
                </div>
                <div class="h-75 right-jumbo">
                    <img
                        class="h-100 floating-elements"
                        src="/images/615dd47b94487f5cd8df6c49_icons8-banned-129.png"
                        alt=""
                    />
                    <img
                        class="h-100 doctor-jumbo"
                        src="/images/jumbo_doctor.png"
                        alt=""
                    />
                </div>
                <img
                    class="h-100 right-bg-jumbo"
                    src="/images/jumbo_right_bg.jpg"
                    alt=""
                />
            </div>
        </div>

        <div class="container-white">
            <div class="container">
                <div class="contact">
                    <div class="form-title">
                        <h2>Invia un messaggio al dottore</h2>
                        <br />
                        <div class="divider"></div>
                    </div>

                    <div>
                        <form class="form-msg">
                            <div class="form-group p-2">
                                <label for="exampleFormControlInput1"
                                    >Inserisci il tuo nome:</label
                                >
                                <input
                                    type="name"
                                    class="form-control"
                                    id="nameFormControlInput1"
                                    placeholder="Nome"
                                />
                            </div>
                            <div class="form-group p-2">
                                <label for="exampleFormControlInput1"
                                    >Inserisci il tuo cognome:</label
                                >
                                <input
                                    type="surname"
                                    class="form-control"
                                    id="surnameFormControlInput1"
                                    placeholder="Cognome"
                                />
                            </div>
                            <div class="form-group p-2">
                                <label for="exampleFormControlInput1"
                                    >Inserisci la tua mail:</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="emailFormControlInput1"
                                    placeholder="Email"
                                />
                            </div>
                            <div class="form-group p-2">
                                <label for="exampleFormControlTextarea1"
                                    >Inserisci il tuo messaggio con la
                                    richiesta:</label
                                >
                                <textarea
                                    class="form-control pb-5"
                                    id="exampleFormControlTextarea1"
                                    rows="3"
                                ></textarea>
                            </div>
                            <div class="text-center py-2">
                                <button
                                    type="button"
                                    class="btn btn-primary text-center"
                                >
                                    Invia messaggio
                                </button>
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
                                    <img
                                        class="card-img"
                                        src="/images/jumbo_doctor.png"
                                        alt=""
                                    />
                                    <div>
                                        <h4>Name Surname</h4>
                                        <span class="subtitle"
                                            >Happy Patient</span
                                        >
                                    </div>
                                </div>
                                <p class="p-style">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quia nam autem distinctio,
                                    dolorum a laboriosam et tempora optio,
                                    tenetur porro debitis reiciendis vero facere
                                    quod. Molestiae, nostrum! Saepe, minus iure!
                                </p>
                                <div
                                    class="rating-bar py-2 px-4 d-flex justify-content-between"
                                >
                                    <h5>rated 4.3/5</h5>
                                    <div class="rating-stars">
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="my-card middle p-5">
                                <div class="d-flex gap-4 pb-4">
                                    <img
                                        class="card-img"
                                        src="/images/jumbo_doctor.png"
                                        alt=""
                                    />
                                    <div>
                                        <h4>Name Surname</h4>
                                        <span class="subtitle"
                                            >Happy Patient</span
                                        >
                                    </div>
                                </div>
                                <p class="p-style">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quia nam autem distinctio,
                                    dolorum a laboriosam et tempora optio.
                                </p>
                                <div
                                    class="rating-bar py-2 px-4 d-flex justify-content-between"
                                >
                                    <h5>rated 4.5/5</h5>
                                    <div class="rating-stars">
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="my-card p-5">
                                <div class="d-flex gap-4 pb-4">
                                    <img
                                        class="card-img"
                                        src="/images/jumbo_doctor.png"
                                        alt=""
                                    />
                                    <div>
                                        <h4>Name Surname</h4>
                                        <span class="subtitle"
                                            >Happy Patient</span
                                        >
                                    </div>
                                </div>
                                <p class="p-style">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quia nam autem distinctio,
                                    dolorum a laboriosam et tempora optio,
                                    tenetur porro debitis reiciendis vero facere
                                    quod. Molestiae, nostrum! Saepe, minus iure!
                                </p>
                                <div
                                    class="rating-bar py-2 px-4 d-flex justify-content-between"
                                >
                                    <h5>rated 4.7/5</h5>
                                    <div class="rating-stars">
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                        <i
                                            class="fa-solid fa-star gold-star"
                                        ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5">
                    <h3 class="text-center">La tua recensione</h3>
                    <form class="form-msg">
                        <div class="form-group p-2">
                            <label for="exampleFormControlInput1"
                                >Inserisci il tuo nome:</label
                            >
                            <input
                                type="name"
                                class="form-control"
                                id="nameFormControlInput1"
                                placeholder="Nome"
                            />
                        </div>
                        <div class="form-group py-2">
                            <label for="exampleFormControlInput1"
                                >Inserisci il tuo voto, da 1 a 5:</label
                            >
                            <select
                                multiple
                                class="form-control"
                                id="exampleFormControlSelect2"
                            >
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group p-2">
                            <label for="exampleFormControlInput1"
                                >Titolo recensione:</label
                            >
                            <input
                                type="title"
                                class="form-control"
                                id="titleFormControlInput1"
                                placeholder="Titolo"
                            />
                        </div>
                        <div class="form-group py-2">
                            <label for="exampleFormControlTextarea1"
                                >Dai il tuo parere:</label
                            >
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="3"
                            ></textarea>
                        </div>
                        <div class="text-center py-2">
                            <button
                                type="button"
                                class="btn btn-primary text-center"
                            >
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
export default {
    name: "DoctorShow",
    props: {},
    mounted() {
        window.addEventListener("scroll", this.scrollFunction);
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
    z-index: 2;
    -webkit-animation: rotating 15s linear infinite;
    -moz-animation: rotating 15s linear infinite;
    -ms-animation: rotating 15s linear infinite;
    -o-animation: rotating 15s linear infinite;
    animation: rotating 15s linear infinite;
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

.form-title {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: auto;
    max-width: 600px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
}

.divider {
    width: 80px;
    height: 2px;
    margin-top: 10px;
    margin-bottom: 40px;
    border-color: transparent;
    background-color: #2ea4ff;
}

.form-msg {
    margin-left: 25%;
    margin-right: 25%;
    width: 50%;
}

.flex-img {
    display: flex;
    justify-content: center;
}

.form-img {
    height: 60%;
    border-radius: 8px;
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
</style>
