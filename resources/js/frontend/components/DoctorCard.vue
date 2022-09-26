
<template>
    <div class="col">
        <div class="card h-100 border-0" style="width: 22rem">
            <div class="avatarbg mx-auto">
                <img :src="'/storage/'+doctor.image" class="card-img-top" alt="..." />

            </div>
            <div class="card-body">
                <h5 class="card-title text-center">
                    {{doctor.name}}
                </h5>
                <div class="text-primary py-2 text-center">

                    <span v-for="specialization in doctor.specializations" :key="specialization.id">
                        {{specialization.name}}
                    </span>

                </div>
                <div class="text-center pt-2">
                    <router-link class="btn btn-primary" :key="doctor.id"
                        :to="{name: 'DoctorShow', params: {'doctor': doctor, 'doctor_slug': doctor.slug}}">
                        Dettagli
                    </router-link>
                </div>
            </div>
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
</style>
    