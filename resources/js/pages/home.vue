<template>
    <div>
        <TheJumbo/>
        <SpecializationSelection/>
        <SponsoredDoctors/>
        <Reviews/>
    </div>
</template>

<script>
import TheJumbo from '../frontend/components/TheJumbo.vue';
import SponsoredDoctors from '../frontend/components/SponsoredDoctors.vue';
import SpecializationSelection from '../frontend/components/SpecializationSelection.vue';
import Reviews from '../frontend/components/Reviews.vue';
export default {
    components: { TheJumbo, SponsoredDoctors, SpecializationSelection, Reviews },
}
</script>

<style>

</style>