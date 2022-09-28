import Home from "./pages/home.vue"
import AdvancedSearch from "./pages/AdvancedSearch.vue"
import DoctorShow from "./pages/DoctorShow.vue"
import ConfirmSendMessage from "./pages/ConfirmSendMessage.vue"



export const routes = [
    { path: "/", component: Home, name: "home" },
    { path: "/doctors", component: AdvancedSearch, name: "AdvancedSearch" },
    { path: "/doctor/send-message", component: ConfirmSendMessage, name: "ConfirmSendMessage"},
    { path: "/doctor/:doctor_slug", component: DoctorShow, name: "DoctorShow" },
]