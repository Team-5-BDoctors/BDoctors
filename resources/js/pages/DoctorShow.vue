<template>
    <div>
        <div class="container-fluid">
            <div class="container d-flex justify-content-between align-items-center h-100">
                <div class="left-jumbo">
                    <h2 class="pb-3">Name Surname</h2>
                    <p class="pb-3 spec">
                        Neurology
                    </p>
                    <p class="pb-3">
                        Email
                    </p>
                    <p class="pb-3">
                        Phone
                    </p>
                    <p class="pb-3">
                        Adress
                    </p>
                </div>
                <div class="h-75 right-jumbo">
                    <img class="h-100 floating-elements" src="/images/615dd47b94487f5cd8df6c49_icons8-banned-129.png"
                        alt="" />
                    <img class="h-100 doctor-jumbo" src="/images/jumbo_doctor.png" alt="" />
                </div>
                <img class="h-100 right-bg-jumbo" src="/images/jumbo_right_bg.jpg" alt="" />
            </div>
        </div>

        <div class="container text-center p-5">
            <div class="row">
                <div class="col">
                    user 1
                </div>
                <div class="col">
                    user 2
                </div>
                <div class="col">
                    user 3
                </div>
            </div>
            <button type="button" class="btn btn-primary m-2">
                Lascia una recensione
            </button>
        </div>

        <div class="container-fluid">

        </div>
    </div>
</template>


<script>
export default {
    name: "DoctorShow",
    props: {},
};
</script>


<style scoped lang="scss">
h2 {
    font-size: 45px;
    font-weight: 500;
}

.spec {
    font-weight: 400;
    font-size: 20px;
    color: #4056ff;
}

p {
    font-weight: 200;
}

@keyframes rotating {
    from {
        -webkit-transform: translateX(20%) translateY(-15%) rotate(0deg);
    }

    to {
        -webkit-transform: translateX(20%) translateY(-15%) rotate(360deg);
    }
}

.right-bg-jumbo {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 0;
}

.floating-elements {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    -webkit-animation: rotating 15s linear infinite;
    -moz-animation: rotating 15s linear infinite;
    -ms-animation: rotating 15s linear infinite;
    -o-animation: rotating 15s linear infinite;
    animation: rotating 15s linear infinite;
}

.left-jumbo {
    max-width: 500px;
}

.right-jumbo {
    align-self: flex-end;
    position: relative;
}

.doctor-jumbo {
    position: relative;
    z-index: 3;
}

.btn-primary {
    background-color: #4056ff;
    border-color: #4056ff;
    font-weight: 500;
}

.container-fluid {
    height: calc(100vh - 80px);
    background-color: #e9f6ff;
}
</style>