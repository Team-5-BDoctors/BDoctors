<template>
    <div>
        <TheJumbo/>
        <SpecializationSelection/>
        <SponsoredDoctors/>
    </div>
</template>

<script>
import TheJumbo from '../frontend/components/TheJumbo.vue';
import SponsoredDoctors from '../frontend/components/SponsoredDoctors.vue';
import SpecializationSelection from '../frontend/components/SpecializationSelection.vue';
export default {
    components: {TheJumbo, SponsoredDoctors, SpecializationSelection},
}
</script>

<style>

</style>