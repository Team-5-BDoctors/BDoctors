<template>
    <div class="container-fluid">
        <div class="container specselect w-50">
            <h3 class="text-center py-5 text-white">Potresti cercare:</h3>
            <div class="tags-container d-flex gap-4">
             <router-link v-for="specialization in specializations" :to="{name:'AdvancedSearch', params:{specialization_name : specialization.name}}" :key="specialization.id" class="tags-label">
                {{specialization.name}}
            </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "SponsoredDoctors",
    props: {},
    data() {
        return {
            specializations: []
        }
    },
    mounted(){
        axios.get('/api/specializations')
        .then((response) => {
            this.specializations = response.data;
        })
    },
};
</script>

<style lang="scss" scoped>
.specselect {
    border: 20px solid white;
    background-image: url("/images/background.png");
    background-size: cover;
    height: 250px;
    border-radius: 10px;
    transform: translateY(-20%);
    z-index: 5;
    position: relative;
    box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
}

.tags-container {
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    padding: 15px 0;
}

a {
    text-decoration: none;
}

.container-fluid {
    background-color: white;
    height: 300px;
}

.tags-label {
    display: block;
    padding: 4px 10px;
    border-radius: 4px;
    background-color: #d8eeff;
    font-family: Satoshi, sans-serif;
    color: #151e66;
    font-weight: 700;
    text-align: center;
    transition: all 0.2s ease-in-out;
    &:hover {
        background-color: #fff;
        box-shadow: 2px 2px 12px 4px rgba(21, 30, 102, 0.12);
    }
}
</style>
