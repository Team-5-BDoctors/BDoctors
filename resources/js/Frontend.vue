<template>
    <div id="app">
        <NavBar class="thenavbar"></NavBar>
        
        <router-view></router-view>
        <TheFooter/>
    </div>
</template>

<script>
import NavBar from './frontend/components/NavBar.vue'

import TheFooter from './frontend/components/TheFooter.vue';
export default {
    data() {
        return {
        };
        
    },
    components: { NavBar, TheFooter }
}
</script>

<style lang="scss">
    @import url('https://api.fontshare.com/v2/css?f[]=satoshi@700,500,400&display=swap');
    @import "~@fortawesome/fontawesome-free/css/all.min.css";
    
    .thenavbar{
      position: sticky;
      top: 0;
      z-index: 99;
    }

    #app {
 font-family: 'Satoshi', sans-serif;
 -webkit-font-smoothing: antialiased;
 -moz-osx-font-smoothing: grayscale;
 color: #151e66;
};
    

    </style>
    