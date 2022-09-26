<template>
    <div>
        <div>
            <div class="container-fluid jumbo-bg pt-5">
                <div class="container px-5 d-flex flex-column justify-content-center">
                    <div class="pt-5 searchbar-container">
                        <div class="text-white pt-3 py-2">Cerca per Specializzazione:</div>
                        <select @change="selectedSpecialization = $event.target.value, fetchDoctorsInPage()"
                            class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected value="">Seleziona una specializzazione</option>
                            <option v-for="specialization in specializations" :key="specialization.name" :value="specialization.name">{{
                            specialization.name }}</option>
                        </select>
                    </div>
                    <div class="text-white pt-3">Ordina per:</div>
                    <div class="btn-group d-flex justify-content-around pt-2 " role="group"
                        aria-label="Basic radio toggle button group ">

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                        <label class="btn btn-outline-primary text-white" for="btnradio1">Media voti</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary text-white" for="btnradio2">Numero
                            recensioni</label>
                    </div>
                </div>


            </div>
<<<<<<< HEAD


        </div>
        <div class="bg-lightblue justify-content-center d-flex">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 pb-5 justify-content-center d-flex g-5 container">
                <div v-for="doctor in doctors" :key="doctor.name" class="col">
                    <div class="card m-3 border-0" style="width: 22rem">
                        <div class="avatarbg mx-auto">
                            <img :src="'/storage/'+doctor.image" class="card-img-top" alt="..." />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                {{doctor.name}}
                                {{doctor.surname}}
                            </h5>
                            <div v-for="specialization in doctor.specializations" class="text-primary pb-2 text-center">
                                {{specialization.name}}
=======
            <div class="bg-lightblue justify-content-center d-flex">
                <div
                    class="row row-cols-1 row-cols-md-2 row-cols-lg-3 pb-5 justify-content-center d-flex g-5 container">
                    <div v-for="doctor in doctors" :key="doctor.name" class="col">
                        <div class="card m-3 border-0" style="width: 22rem">
                            <div class="avatarbg mx-auto">
                                <img :src="'/storage/'+doctor.image" class="card-img-top" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    {{doctor.name}}
                                </h5>
                                <div v-for="specialization in doctor.specializations"
                                    class="text-primary pb-2 text-center">
                                    {{specialization.name}}
                                </div>
                                <p class="card-text text-center">
                                    {{doctor.services}}
                                </p>
>>>>>>> main
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            doctors: [],
            specializations: [],
            selectedSpecialization: "",
        }
    },
    mounted() {
        window.addEventListener("scroll", this.scrollFunction);
        this.fetchDoctorsSpecialization();
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
        fetchDoctorsSpecialization() {
            axios.get("/api/doctor?name=" + this.$route.params.specialization_name)
                .then((resp) => {
                    this.doctors = resp.data;
                })
        },
        fetchSpecializations() {
            axios.get("/api/specializations")
                .then((resp) => {
                    this.specializations = resp.data;
                })
        },
        fetchDoctorsInPage() {
            axios.get("/api/doctor?name=" + this.selectedSpecialization)
                .then((resp) => {
                    this.doctors = resp.data;
                })
        }
    },
}
</script>

<style  lang="scss" scoped>
.jumbo-bg {
    background-image: url('/images/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 400px;
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

$rad: .7rem;
$dur: .3s;
$color-dark: #2f2f2f;
$color-light: #fff;
$color-brand: rgb(13, 110, 253);
$font-fam: 'Lato', sans-serif;
$height: 4rem;
$btn-width: 6rem;
$bez: cubic-bezier(0, 0, 0.43, 1.49);


form {
    position: relative;
    width: 30rem;
    background: $color-brand;
    border-radius: $rad;
}

input,
button {
    height: $height;
    font-family: $font-fam;
    border: 0;
    color: $color-dark;

}

input[type="search"] {
    width: 100%;
    background: $color-light;
    padding: 0 1.6rem;
    border-radius: $rad;
    appearance: none;
    transition: all $dur $bez;
    transition-property: width, border-radius;
    z-index: 1;
    position: relative;
}

button {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    width: $btn-width;
    font-weight: bold;
    background: $color-brand;
    border-radius: 0 $rad $rad 0;
}

input:not(:placeholder-shown) {
    border-radius: $rad 0 0 $rad;
    width: calc(100% - $btn-width);
}

button {
    display: block;
}
</style>