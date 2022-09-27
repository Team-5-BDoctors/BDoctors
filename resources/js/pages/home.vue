<template>
    <div>
        <TheJumbo />
        <SpecializationSelection />
        <SponsoredDoctors :doctors="doctors" />
        <Reviews />
    </div>
</template>

<script>
import TheJumbo from '../frontend/components/TheJumbo.vue';
import SponsoredDoctors from '../frontend/components/SponsoredDoctors.vue';
import SpecializationSelection from '../frontend/components/SpecializationSelection.vue';
import Reviews from '../frontend/components/Reviews.vue';
import axios from 'axios';

export default {
    components: { TheJumbo, SponsoredDoctors, SpecializationSelection, Reviews },
    data: function () {
        return {
            doctors: [],
        }
    },
    mounted() {
        this.fetchDoctors();
    },
    methods: {
        fetchDoctors() {
            axios.get("/api/sponsored-doctors")
                .then((resp) => {
                    this.doctors = resp.data;
                })
        }
    },
}


</script>

<style>

</style>