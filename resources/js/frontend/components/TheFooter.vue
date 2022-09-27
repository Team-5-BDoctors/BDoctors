<template>
    <div class="container-fluid footersection">
        <div class="prefooter container mb-5">
            <div class="row h-100 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-end align-items-center">
                <div class="col col-md-6 col-sm-6  girlout">
                    <img class="w-75 footerimg" src="images/pre_footer_doctor.png" alt="" srcset="" />
                </div>
                <div class="col px-4 col-md-5 col-sm-5">
                    <h2>Sei un Dottore?</h2>
                    <p>
                        Clicca il pulsante sulla destra per inziare a ricevere
                        migliaia di pazienti da tutta Italia!
                    </p>
                </div>
                <div class="col px-4 col-md-3 col-sm-3">
                    <a href="/register" class="btn btn-primary">Registrati</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row footercontainer pb-5 gap-5">
                <div class="col-12 col-md-12 col-lg-3 flex-grow-1">
                    <div class="w-100 pb-5">
                        <img
                            class="w-50"
                            src="images/logo_bianco.png"
                            alt="logo"
                        />
                    </div>
                    <p class="big-paragraph pb-5">
                        “La medicina cura le malattie, ma solo i medici possono
                        curare i pazienti.”
                    </p>
                </div>

                <div class="col-5 col-md-5 col-lg-3">
                    <h2 class="footer-headings pb-4">Specializzazioni</h2>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                </div>

                <div class="col-5 col-md-5 col-lg-3">
                    <h2 class="footer-headings pb-4">Pagine</h2>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                    <div class="footerlink">footerlink</div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div>Made with ❤️ by Booleaners</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "TheFooter",
    props: {},
};
</script>

<style scoped lang="scss">
.girlout {
    position: absolute;
    left: 0;
    bottom: 0;
}

.prefooter {
    height: 200px;
    background-color: #4157ff;
    border-radius: 0 0 25px 25px;
    position: relative;

    h2 {
        font-size: 2rem;
        font-weight: 700;
    }

    p {
        font-size: 0.8rem;
        font-weight: 500;
    }
}

.footersection {
    background-color: #151e66;
    color: #d8eeff;
}

.footerlink {
    color: #d8eeff;
    opacity: 0.5;
}

.footercontainer {
    border-bottom: 1px solid #d8eeff3f;
}

.big-paragraph {
    color: #2ea4ff;
    font-size: 24px;
    line-height: 34px;
    font-style: normal;
    font-weight: 700;
}

.footer-headings {
    color: #fff;
    font-size: 18px;
    line-height: 28px;
    font-weight: 700;
    letter-spacing: 0px;
}

@media screen and (max-width: 575px) {
    .footerimg {
        display: none;
    }
}
</style>
