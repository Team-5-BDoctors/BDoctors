<template>
  <div>
    <div class="container aboutus px-0">
        <h1 class="text-center pb-3">Il parere dei nostri pazienti</h1>
        <div class="tiny-rule mx-auto mb-5"></div>

        <div>
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <div class="my-card p-5">
                        <div class="d-flex gap-4 pb-4">
                            <img class="card-img" src="/images/jumbo_doctor.png" alt="">
                            <div>
                                <h4>Name Surname</h4>
                                <span class="subtitle">Happy Patient</span>
                            </div>
                        </div>
                        <p class="p-style">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nam autem distinctio, dolorum a laboriosam et tempora optio, tenetur porro debitis reiciendis vero facere quod. Molestiae, nostrum! Saepe, minus iure!</p>
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
                            <img class="card-img" src="/images/jumbo_doctor.png" alt="">
                            <div>
                                <h4>Name Surname</h4>
                                <span class="subtitle">Happy Patient</span>
                            </div>
                        </div>
                        <p class="p-style">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nam autem distinctio, dolorum a laboriosam et tempora optio.</p>
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
                            <img class="card-img" src="/images/jumbo_doctor.png" alt="">
                            <div>
                                <h4>Name Surname</h4>
                                <span class="subtitle">Happy Patient</span>
                            </div>
                        </div>
                        <p class="p-style">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nam autem distinctio, dolorum a laboriosam et tempora optio, tenetur porro debitis reiciendis vero facere quod. Molestiae, nostrum! Saepe, minus iure!</p>
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
        border-left: 1px solid #E9F6FF;;
        border-right: 1px solid #E9F6FF;;
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