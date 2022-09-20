<template>
    <div>
        <div class="container-fluid jumbo-bg d-flex justify-content-center">
            <div class="pt-5">
                <form onsubmit="event.preventDefault();" role="search">
                    <label for="search">Search for stuff</label>
                    <input id="search" class="" type="search" placeholder="Search..." autofocus required />
                    <button type="submit">Go</button>
                </form>
            </div>
            <div>
                <button type="button" class="btn btn-danger">premi</button>
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
$color-brand: #54abf3;
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
    font-size: 1.8rem;
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

label {
    position: absolute;
    clip: rect(1px, 1px, 1px, 1px);
    padding: 0;
    border: 0;
    height: 1px;
    width: 1px;
    overflow: hidden;
}
</style>