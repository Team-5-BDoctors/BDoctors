import Vue from "vue";
import Frontend from "./Frontend.vue";
import VueRouter from "vue-router";
import { routes } from "./routes"

Vue.use(VueRouter);

new Vue({
    el: "#app",
    render: h => h(Frontend),
    // il valore di questa chiava deve essere un istanza di vuerouter
    router: new VueRouter({
        routes,
        mode: "history",
        scrollBehavior() {
            document.getElementById('app').scrollIntoView({ behavior: 'smooth' });
        }
    })
})