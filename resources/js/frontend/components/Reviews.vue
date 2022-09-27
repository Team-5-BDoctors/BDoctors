<template>
    <div>
        <div class="container aboutus px-0">
            <h1 class="text-center pb-3">Customers About Us</h1>
            <div class="tiny-rule mx-auto mb-5"></div>

            <div>
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <div class="my-card p-5">
                            <div class="d-flex gap-4 pb-4">
                                <img class="card-img" src="/images/jumbo_doctor.png" alt="">
                                <div>
                                    <h4>Dott.ssa Lucia Rossi</h4>
                                    <span class="subtitle">Marco Bianchi:</span>
                                </div>
                            </div>
                            <p class="p-style">Ottima: medico disponibile per chiarimenti sia per quanto riguarda
                                l'intervento che per il processo post operatorio. Organizzazione ospedaliera buona con
                                personale gentile e premuroso alle esigenze del paziente.</p>
                            <div class="rating-bar  ps-2 d-flex justify-content-between">
                                <h5 class="d-flex align-self-end">
                                    Valutato 4.3/5</h5>
                                <div class="rating-stars ">
                                    <div class="rate d-flex justify-content-end">

                                        <label for="star5" title="text">5 stars</label>

                                        <label for="star4" title="text">4 stars</label>

                                        <label for="star3" title="text">3 stars</label>

                                        <label for="star2" title="text">2 stars</label>

                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="my-card middle p-5">
                            <div class="d-flex gap-4 pb-4">
                                <img class="card-img" src="/images/jumbo_doctor.png" alt="">
                                <div>
                                    <h4>Dott. Carlo Fidanza</h4>
                                    <span class="subtitle">Chiara Brighi:</span>
                                </div>
                            </div>
                            <p class="p-style">Il dott Carlo Fidanza mi ha asportato due basiolomi (sulla tempia e sul
                                collo) e mi sono trovata molto bene. Il dott. Fidanza è un professionista competente e
                                nello stesso tempo molto affabile: il centro e il personale sono ben organizzati.</p>
                            <div class="rating-bar ps-2 d-flex justify-content-between">
                                <h5 class="d-flex align-self-end">Valutato 4.5/5</h5>
                                <div class="rate d-flex justify-content-end">

                                    <label for="star5" title="text">5 stars</label>

                                    <label for="star4" title="text">4 stars</label>

                                    <label for="star3" title="text">3 stars</label>

                                    <label for="star2" title="text">2 stars</label>

                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="my-card p-5">
                            <div class="d-flex gap-4 pb-4">
                                <img class="card-img" src="/images/jumbo_doctor.png" alt="">
                                <div>
                                    <h4>Dott. Luigi Agostini</h4>
                                    <span class="subtitle">Marco Verdi:</span>
                                </div>
                            </div>
                            <p class="p-style">Professionalità unita ad una ricerca di empatia con il paziente fanno del
                                dottor Agostini un medico dotato. La simpatia che lo contraddistinge è una delle
                                caratteristiche che rende l'incontro informale e rilassante. Lo consiglio vivamente.</p>
                            <div class="rating-bar ps-2 d-flex justify-content-between">
                                <h5 class="d-flex align-self-end">Valutato 4.7/5</h5>
                                <div class="rate d-flex justify-content-end">

                                    <label for="star5" title="text">5 stars</label>

                                    <label for="star4" title="text">4 stars</label>

                                    <label for="star3" title="text">3 stars</label>

                                    <label for="star2" title="text">2 stars</label>

                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
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
}
</script>

<style scoped lang="scss">
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}

.rate:not(:checked)>input {
    position: absolute;
    top: -9999px;
}

.rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    font-size: 30px;
    color: #ffc700;
}

.rate:not(:checked)>label:before {
    content: '★ ';
}

.my-card {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.5s ease-in-out;

    &.appear {
        opacity: 1;
        transform: translateY(0px);
    }
}

.aboutus {
    padding-top: 6rem;
    padding-bottom: 8rem;
}

.tiny-rule {
    width: 80px;
    height: 2px;
    background-color: #2EA4FF;
}

.my-row {
    display: flex;
    border: 1px solid #E9F6FF;
    border-radius: 5px;
}

.my-card.middle {
    border-left: 1px solid #E9F6FF;
    ;
    border-right: 1px solid #E9F6FF;
    ;
}

.card-img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-fit: contain;
    background-color: #EEFCFF;
    border-color: #2EA4FF;
}

.subtitle {
    color: #2EA4FF;
}

.p-style {
    height: 120px;
    color: #8c92c2;
    overflow: hidden;
}

.rating-bar {
    background-color: #E9F6FF;
    border-radius: 10px;
}

.gold-star {
    color: gold;
}
</style>