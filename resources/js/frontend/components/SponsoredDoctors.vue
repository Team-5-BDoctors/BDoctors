<template>
    <div>
        <div class="container-fluid secondarybg py-5">
            <div class="container py-5">
                <h1 class="text-center pb-3">Meet Our Doctors</h1>
                <div class="bluespacer"></div>
                <div
                    class="row row-cols-1 row-cols-md-2 row-cols-lg-3 pb-5 justify-content-center g-5">
                
                    <div class="col">
                        <div class="card m-3 border-0" style="width: 22rem">
                            <div class="avatarbg mx-auto">
                                <img
                                    src="images/baffo.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Card title
                                </h5>
                                <div class="text-primary pb-2 text-center">
                                    Cardiac Surgery
                                </div>
                                <p class="card-text text-center">
                                    Some quick example text to build on the card
                                    title and make up the bulk of the card's
                                    content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card m-3 border-0" style="width: 22rem">
                            <div class="avatarbg mx-auto">
                                <img
                                    src="images/cioccolata.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Card title
                                </h5>
                                <div class="text-primary pb-2 text-center">
                                    Cardiac Surgery
                                </div>
                                <p class="card-text text-center">
                                    Some quick example text to build on the card
                                    title and make up the bulk of the card's
                                    content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card m-3 border-0" style="width: 22rem">
                            <div class="avatarbg mx-auto">
                                <img
                                    src="images/covid.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Card title
                                </h5>
                                <div class="text-primary pb-2 text-center">
                                    Cardiac Surgery
                                </div>
                                <p class="card-text text-center">
                                    Some quick example text to build on the card
                                    title and make up the bulk of the card's
                                    content.
                                </p>
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
    name: "SponsoredDoctors",
    data() {
        return {};
    },
    // make elements appear when scrolling
    mounted() {
        window.addEventListener("scroll", this.scrollFunction);
    },
    methods: {
        scrollFunction() {
            var elements = document.getElementsByClassName("card");
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

<style lang="scss" scoped>
.card {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.5s ease-in-out;
    &.appear {
        opacity: 1;
        transform: translateY(0px);
    }
}
.secondarybg {
    background-color: #e9f6ff;
}

.bluespacer{
 width: 80px;
  height: 2px;
  margin-top: 10px;
  margin-bottom: 100px;
  margin-left: auto;
  margin-right: auto;
  border-color: transparent;
  background-color: #2ea4ff;
}



.avatarbg {
    width: 200px;
    height: 200px;
    overflow: hidden;
    border-radius: 100%;
    background-color: transparent;
    background-image: linear-gradient(149deg, #2ea4ff, #e9f6ff);
    transform: translateY(-20%);
}

</style>
