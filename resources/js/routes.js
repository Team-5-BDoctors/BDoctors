import Home from "./pages/home.vue"
import AdvancedSearch from "./pages/AdvancedSearch.vue"

export const routes = [
    { path: "/", component: Home, name: "home" },
    { path: "/search", component: AdvancedSearch, name: "AdvancedSearch" },
]