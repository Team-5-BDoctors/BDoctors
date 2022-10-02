<template>
    <div class="col h-100">
        <div class="card h-100 m-3 border-0" :class="{'goldenborder' : doctor.sponsorship}">
            <router-link
                :key="doctor.id"
                :to="{
                    name: 'DoctorShow',
                    params: {
                        doctor: doctor,
                        doctor_slug: doctor.slug,
                    },
                }"
            >
                <div class="avatarbg mx-auto">
                    <img :src="'/storage/' + doctor.image" class="card-img-top" alt="..." />
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        {{ doctor.name }}
                        {{ doctor.surname }}
                    </h5>
                    <div class="card-text text-center py-3">
                        <span v-for="(
                                specialization, index
                            ) in doctor.specializations" :key="specialization.name" class="text-primary">
                            <span v-if="index != 0">-</span>
                            {{ specialization.name }}
                        </span>
                    </div>
                    <p class="card-text text-center">
                        {{ doctor.services }}
                    </p>
                    <div class="text-center">
                        <div class="stars">
                            <i v-for="n in 5" :key="n" class="fa-regular fa-star"
                                :class="{ 'fa-solid': n <= doctor.average }"></i>
                        </div>
                        <p class="text-center">
                            {{ doctor.numberReviews }}+ interazioni dai clienti
                        </p>
                    </div>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "DoctorCard",
    props: {
        doctor: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style scoped lang="scss">
router-link {
    text-decoration: none;
}

a {
    text-decoration: none;
}

.goldenborder {
    border: 2px solid #f9b115 !important;
}

.card {
    opacity: 0.5;
    transform: translateY(50px);
    transition: all 0.5s ease-in-out;

    &.appear {
        opacity: 1;
        transform: translateY(0px);
    }

    &:hover {
        transform: translateY(-15px);
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

p {
    color: #555c96;
    font-weight: 500;
}

h5 {
    color: #151e66;
    font-weight: 700;
}
</style>
