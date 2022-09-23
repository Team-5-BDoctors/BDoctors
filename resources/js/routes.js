import Home from "./pages/home.vue"
import AdvancedSearch from "./pages/AdvancedSearch.vue"
import DoctorShow from "./pages/DoctorShow.vue"

function getSearchUri(){
    let spec = "/:specialization_name"
    let startPath = "/doctors"
    let completePath = ''
    if (spec) {
        completePath = startPath + spec
    }else if(spec === undefined){
        completePath = startPath
    }

    return completePath;
}

export const routes = [
    { path: "/", component: Home, name: "home" },
    { path: getSearchUri(), component: AdvancedSearch, name: "AdvancedSearch" },
    
    { path: "/doctor-slug", component: DoctorShow, name: "DoctorShow" }
]