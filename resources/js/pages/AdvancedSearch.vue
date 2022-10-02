<template>
    <div>
        <div>
            <div class="container-fluid jumbo-bg pt-5">
                <div
                    class="container px-5 d-flex flex-column justify-content-center"
                >
                    <div class="pt-5 searchbar-container">
                        <div class="text-white pt-3 py-2">
                            Cerca per Specializzazione:
                        </div>
                        <select
                            @change="
                                (selectedSpecialization = $event.target.value),
                                    fetchDoctorsInPage()
                            "
                            class="form-select form-select-lg mb-3"
                            aria-label=".form-select-lg example"
                        >
                            <option value="">
                                Seleziona una specializzazione
                            </option>
                            <option
                                v-for="specialization in specializations"
                                :key="specialization.name"
                                :value="specialization.name"
                            >
                                {{ specialization.name }}
                            </option>
                        </select>
                    </div>
                    <div class="text-white pt-3">Filtra per:</div>
                    <div class="d-flex">
                        <div>
                            <select
                                @change="
                                    (selectedStars = $event.target.value),
                                        fetchDoctorsInPage()
                                "
                                name="reviews"
                                id="reviews"
                                class="form-select form-select mb-3"
                            >
                                <option selected value="">
                                    Seleziona la valutazione preferita
                                </option>
                                <option value="1">⭐+</option>
                                <option value="2">⭐⭐+</option>
                                <option value="3">⭐⭐⭐+</option>
                                <option value="4">⭐⭐⭐⭐+</option>
                                <option value="5">⭐⭐⭐⭐⭐</option>
                            </select>
                        </div>
                        <div>
                            <select
                                @change="
                                    (selectedNumberReviews =
                                        $event.target.value),
                                        fetchDoctorsInPage()
                                "
                                name="reviewsNumber"
                                id="reviewsNumber"
                                class="form-select form-select mb-3"
                            >
                                <option selected value="">
                                    Seleziona la quantità di recensioni
                                </option>
                                <option value="5">5+</option>
                                <option value="10">10+</option>
                                <option value="20">20+</option>
                                <option value="30">30+</option>
                                <option value="50">50+</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lightblue justify-content-center d-flex">
                <div
                    class="row row-cols-1 row-cols-md-2 row-cols-lg-3 pb-5 justify-content-center d-flex g-5 container"
                >
                
                <div v-if="noDoctors">
                            <h2 class="text-center">
                                Non ci sono medici che soddisfano i criteri di
                                ricerca
                            </h2>
                        </div>
                    <div
                        v-for="doctor in doctors"
                        :key="doctor.name"
                        class="col"
                    >
                        <DoctorCard :doctor="doctor" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import DoctorCard from "../frontend/components/DoctorCard.vue";

export default {
    components: { DoctorCard },
    data() {
        return {
            doctors: [],
            specializations: [],
            selectedSpecialization: this.$route.params.specialization_name,
            selectedStars: "",
            selectedNumberReviews: "",
        };
    },
    mounted() {
        window.addEventListener("scroll", this.scrollFunction);
        this.fetchDoctorsInPage();
        this.fetchSpecializations();
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
        fetchSpecializations() {
            axios.get("/api/specializations").then((resp) => {
                this.specializations = resp.data;
            });
        },
        fetchDoctorsInPage() {
            axios
                .get("/api/doctors", {
                    params: {
                        name: this.selectedSpecialization,
                        rating: this.selectedStars,
                        interactions: this.selectedNumberReviews,
                    },
                })
                .then((resp) => {
                    this.doctors = resp.data;
                    this.doctors.sort((a, b) => {
                        if (a.sponsorship && !b.sponsorship) {
                            return -1;
                        } else if (!a.sponsorship && b.sponsorship) {
                            return 1;
                        } else {
                            return 0;
                        }
                    });
                });
        },
    },
    computed: {
        noDoctors() {
            if (this.doctors.length == 0) {
                return true;
            } else {
                return false;
            }
        },
    },
};
</script>

<style lang="scss" scoped>
.jumbo-bg {
    background-image: url("/images/background.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 400px;
}

a {
    text-decoration: none;
}

h5,
p {
    color: #151e66;
}

.g-5 {
    row-gap: 5rem !important;
}

.card {
    opacity: 0.5;
    transform: translateY(50px);
    transition: all 0.5s ease-in-out;

    &.appear {
        opacity: 1;
        transform: translateY(0px);
    }
}

.card {
    border: none;
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

.search-bar {
    height: 70px;
}

.searchbar-container {
    height: fit-content;
}

.bg-lightblue {
    background-color: rgb(233, 246, 255);
    padding-top: 6rem;
    padding-bottom: 6rem;
}

.drelative {
    position: relative;
    top: -50px;
}
</style>
