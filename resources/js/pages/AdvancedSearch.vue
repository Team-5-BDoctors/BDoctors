<template>
    <div>
        <div class="container-fluid jumbo-bg d-flex justify-content-center pt-5">
            <div class="pt-5 searchbar-container">
                <form onsubmit="event.preventDefault();" role="search">

                    <input id="search search-bar" class="" type="search" placeholder="Cerca un dottore..." autofocus
                        required />
                    <button class="text-white" type="submit">Cerca</button>
                </form>
                <div class="text-white pt-3 py-2">Cerca per Specializzazione:</div>
                <div class="btn-group d-flex justify-content-around" role="group"
                    aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary text-white" for="btncheck1">Neurologia</label>

                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary text-white" for="btncheck2">Cardiologia</label>

                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                    <label class="btn btn-outline-primary text-white" for="btncheck3">Pediatria</label>
                </div>
                <div class="text-white pt-3">Filtra per:</div>
                <div class="btn-group d-flex justify-content-around pt-2 " role="group"
                    aria-label="Basic radio toggle button group ">

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                    <label class="btn btn-outline-primary text-white" for="btnradio1">Media voti</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary text-white" for="btnradio2">Numero
                        recensioni</label>


                </div>


            </div>



        </div>
        <div class="bg-lightblue py-5">
            <div class="container d-flex justify-content-center text-center flex-wrap">
                <div class="card m-3 border-0" style="width: 22rem;">
                    <div>
                        <img src="https://picsum.photos/200/200" class="card-img-top rounded-circle w-50 drelative"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="text-primary pb-2">Cardiac Surgery</div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>



export default {
    components: {}
}
</script>

<style  lang="scss" scoped>
.jumbo-bg {
    background-image: url('/images/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 400px;
}

.search-bar {
    height: 70px;
}

.searchbar-container {
    height: fit-content;
}

.bg-lightblue {
    background-color: rgb(233, 246, 255);
}

.drelative {
    position: relative;
    top: -50px;
}

$rad: .7rem;
$dur: .3s;
$color-dark: #2f2f2f;
$color-light: #fff;
$color-brand: rgb(13, 110, 253);
$font-fam: 'Lato', sans-serif;
$height: 4rem;
$btn-width: 6rem;
$bez: cubic-bezier(0, 0, 0.43, 1.49);


form {
    position: relative;
    width: 30rem;
    background: $color-brand;
    border-radius: $rad;
}

input,
button {
    height: $height;
    font-family: $font-fam;
    border: 0;
    color: $color-dark;

}

input[type="search"] {
    width: 100%;
    background: $color-light;
    padding: 0 1.6rem;
    border-radius: $rad;
    appearance: none;
    transition: all $dur $bez;
    transition-property: width, border-radius;
    z-index: 1;
    position: relative;
}

button {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    width: $btn-width;
    font-weight: bold;
    background: $color-brand;
    border-radius: 0 $rad $rad 0;
}

input:not(:placeholder-shown) {
    border-radius: $rad 0 0 $rad;
    width: calc(100% - $btn-width);
}

button {
    display: block;
}
</style>