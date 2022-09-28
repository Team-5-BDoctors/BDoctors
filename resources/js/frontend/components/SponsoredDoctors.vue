<template>
    <div>
        <div class="container-fluid secondarybg py-5">
            <div class="container py-5">
                <h1 class="text-center pb-3">Meet Our Doctors</h1>
                <div class="bluespacer"></div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 pb-5 justify-content-center g-5">
                    <div
                        v-for="doctor in doctors"
                        :key="doctor.name"
                        class="col"
                    >
                    <DoctorCard :doctor="doctor"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DoctorCard from "./DoctorCard";
export default {
    components: { DoctorCard },
    name: "SponsoredDoctors",
    props: {
        doctors: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {

        };

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
a {
    text-decoration: none;
}

.g-5 {
    row-gap: 5rem !important;
}

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

.bluespacer {
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
