<template>
    <div class="col">
        <div class="card h-100 border-0" style="width: 22rem">
            <router-link
                :key="doctor.id"
                :to="{
                    name: 'DoctorShow',
                    params: { doctor: doctor, doctor_slug: doctor.slug },
                }"
            >
                <div class="avatarbg mx-auto">
                    <img
                        :src="'/storage/' + doctor.image"
                        class="card-img-top"
                        alt="..."
                    />
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        {{ doctor.name }}
                        {{ doctor.surname }}
                    </h5>
                    <div class="text-primary py-2 text-center">
                        <span
                            v-for="specialization in doctor.specializations"
                            :key="specialization.id"
                        >
                            {{ specialization.name }}
                        </span>
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

.card-title {
    color: black;
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
