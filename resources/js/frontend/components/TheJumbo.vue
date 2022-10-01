<template>
    <div id="Top" class="home-section hero big-hero wf-section">
        <div class="hero-big-image-wrapper darker">
            <div class="spariscipiccolo hero-big-image gradient">
                <img
                    src="https://assets.website-files.com/615da57f3635c396a3f90e31/615da99f5cb29bad8601bfe1_profession%20(1).png"
                    loading="lazy"
                    sizes="(max-width: 479px) 69vw, (max-width: 767px) 192.09375px, (max-width: 991px) 288.140625px, 50vw"
                    srcset="
                        https://assets.website-files.com/615da57f3635c396a3f90e31/615da99f5cb29bad8601bfe1_profession%20(1)-p-500.png 500w,
                        https://assets.website-files.com/615da57f3635c396a3f90e31/615da99f5cb29bad8601bfe1_profession%20(1).png       778w
                    "
                    alt=""
                    class="image doctor"
                /><img
                    src="https://assets.website-files.com/615da57f3635c396a3f90e31/615dd47b94487f5cd8df6c49_icons8-banned-129.png"
                    loading="lazy"
                    srcset="
                        https://assets.website-files.com/615da57f3635c396a3f90e31/615dd47b94487f5cd8df6c49_icons8-banned-129-p-500.png   500w,
                        https://assets.website-files.com/615da57f3635c396a3f90e31/615dd47b94487f5cd8df6c49_icons8-banned-129-p-800.png   800w,
                        https://assets.website-files.com/615da57f3635c396a3f90e31/615dd47b94487f5cd8df6c49_icons8-banned-129-p-1080.png 1080w,
                        https://assets.website-files.com/615da57f3635c396a3f90e31/615dd47b94487f5cd8df6c49_icons8-banned-129.png        1265w
                    "
                    sizes="(max-width: 479px) 73vw, (max-width: 767px) 76vw, (max-width: 991px) 77vw, 40vw"
                    alt=""
                    class="images rotating"
                    style="
                        transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                            rotateX(0deg) rotateY(0deg) rotateZ(316.393deg)
                            skew(0deg);
                        transform-style: preserve-3d;
                        will-change: transform;
                    "
                    width="700"
                />
                <div class="hero-div-info half mockup circles">
                    <div class="bigger-circle tag"></div>
                    <div class="bigger-circles"></div>
                </div>
            </div>
        </div>
        <div class="container hero">
            <div class="hero-flex">
                <div
                    style="
                        opacity: 1;
                        transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1)
                            rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg);
                        transform-style: preserve-3d;
                    "
                    class="left-hero-content left"
                >
                    <h1 class="big-headline">
                      Prenotare una visita non è mai stato così semplice<br />
                    </h1>
                    <p class="big-paragraph">
                      Ci siamo occupati di tutta la parte noiosa per te, ora puoi concentrarti su ciò che conta. Decine di specialisti al tuo servizio, a portata di click.
                    </p>
                    <div class="button-wrapper">
                        <router-link to="doctors" class="button w-button"
                            >Trova uno specialista</router-link
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Reviews from "./Reviews.vue";
export default {
    name: "TheJumbo",
    props: {},
    components: { Reviews },
};
</script>

<style scoped lang="scss">
.container {
  position: relative;
  z-index: 2;
  overflow: visible;
  width: 100%;
  max-width: 1200px;
  margin-right: auto;
  margin-left: auto;
  border-radius: 10px;
}

.container.navbar-container {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  overflow: visible;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
}

.container.hero {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.container.testimonials.padding {
  margin-top: 120px;
}

.button {
  display: block;
  height: auto;
  margin-top: 0px;
  padding: 9px 18px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 4px;
  background-color: #4157ff;
  -webkit-transition: background-color 400ms ease;
  transition: background-color 400ms ease;
  font-family: Satoshi, sans-serif;
  color: #fff;
  font-size: 16px;
  line-height: 26px;
  font-weight: 500;
  text-align: center;
  letter-spacing: 0px;
  text-decoration: none;
  text-transform: none;
}

.button:hover {
  background-color: #151e66;
  box-shadow: inset 0 200px 200px 200px rgba(2, 2, 2, 0.11);
  color: #f5f7fc;
}

.button.outline {
  border-style: solid;
  border-width: 1px;
  border-color: #e9e9e9;
  background-color: transparent;
  font-family: Satoshi, sans-serif;
  color: #fff;
  font-size: 14px;
  line-height: 24px;
  font-weight: 500;
  letter-spacing: 0px;
}

.button.outline:hover {
  border-color: #151e66;
  background-color: #151e66;
  box-shadow: none;
}

.button.outline.search {
  width: 40%;
  height: 48px;
}

.button.dark {
  border-radius: 4px;
  background-color: #2ea4ff;
  font-family: Satoshi, sans-serif;
  font-size: 15px;
  line-height: 25px;
  font-weight: 500;
  letter-spacing: 0px;
}

.button.dark:hover {
  background-color: #4157ff;
}

.button.dark-outline {
  padding: 9px 18px;
  border-style: solid;
  border-width: 1px;
  border-color: #4157ff;
  background-color: transparent;
  font-family: Satoshi, sans-serif;
  color: #4157ff;
  font-size: 16px;
  line-height: 26px;
  font-weight: 500;
  letter-spacing: 0px;
}

.button.dark-outline:hover {
  background-color: #4157ff;
  color: #fff;
}

.button.full {
  display: block;
  width: 100%;
}

.button.padding {
  margin-top: 10px;
}

.button.side-padding {
  margin-right: 10px;
}

.button.apply {
  height: 38px;
  padding-top: 0px;
  padding-bottom: 0px;
}

.button.padding-top {
  margin-top: 20px;
}
.hero-big-image-wrapper {
  position: absolute;
  left: auto;
  top: 0%;
  right: 0%;
  bottom: 0%;
  overflow: hidden;
  width: 50%;
  height: auto;
  border-bottom-left-radius: 0px;
  background-color: transparent;
}

.hero-big-image-wrapper.darker {
  width: 50%;
  height: 100%;
  border-radius: 0%;
  background-color: transparent;
}

.home-section {
  position: relative;
  padding: 110px 20px;
  -webkit-transition: box-shadow 300ms ease;
  transition: box-shadow 300ms ease;
}

.home-section.hero {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  height: 750px;
  margin-bottom: 40px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.home-section.hero.big-hero {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  height: 100vh;
  margin-bottom: 0px;
  padding-top: 120px;
  padding-bottom: 120px;
  background-color: #e9f6ff;
  color: #020224;
}

.home-section.hero.big-hero.product {
  height: auto;
}

.home-section.hero.about-us {
  margin-bottom: 0px;
  background-color: #e9f6ff;
  background-image: linear-gradient(122deg, #2ea4ff, #4157ff);
}

.button-wrapper {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-top: 40px;
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.button-wrapper.blog {
  width: 600px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
}

.left-hero-content {
  max-width: 500px;
  padding-right: 40px;
}

.left-hero-content.left {
  width: 100%;
  height: auto;
  margin-top: 0px;
  padding-right: 20px;
  border-style: none;
  border-width: 0px;
  background-image: none;
  -webkit-filter: none;
  filter: none;
}

.left-hero-content.left {
  margin-top: 0px;
  padding-right: 20px;
}

.hero-flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.hero-flex.center {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.big-headline {
  margin-bottom: 20px;
  font-family: Satoshi, sans-serif;
  color: #151e66;
  font-size: 60px;
  line-height: 65px;
  font-weight: 700;
  letter-spacing: -0.5px;
  text-transform: none;
}

.big-headline.pricing {
  margin-bottom: 0px;
  color: #fff;
  font-size: 40px;
  font-weight: 500;
}

.hero-big-image {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  height: 100%;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 0px;
  background-color: transparent;
}

.hero-big-image.gradient {
  position: relative;
  height: 100%;
  margin-left: auto;
  border-radius: 0px;
  background-color: transparent;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#2ea4ff), to(#4157ff));
  background-image: linear-gradient(180deg, #2ea4ff, #4157ff);
}

.section {
  position: relative;
  padding: 120px 20px;
  background-color: transparent;
  font-family: Satoshi, sans-serif;
  color: #151e66;
  font-weight: 500;
}

.section.page-header {
  background-color: #e9f6ff;
}

.section.page-header.blog {
  overflow: hidden;
  height: auto;
  margin-bottom: 0px;
  padding-top: 200px;
  background-color: #4157ff;
  background-image: linear-gradient(259deg, #2ea4ff, #4157ff);
}

.section.gray {
  padding-bottom: 120px;
  background-color: #e9f6ff;
}

.section.gray.more-padding {
  padding-top: 220px;
  padding-bottom: 160px;
}

.section.gray.padding-top {
  padding-top: 220px;
}

.section.no-padding {
  padding-top: 0px;
  padding-bottom: 0px;
}

.section.no-padding-bottom {
  padding-bottom: 0px;
}

.section.padding-bottom {
  padding-bottom: 220px;
}

.section.more-padding {
  padding-bottom: 220px;
  font-family: Satoshi, sans-serif;
  font-weight: 500;
}

.section.no-paddings {
  padding-top: 0px;
  padding-bottom: 0px;
}

.big-paragraph {
  margin-top: 10px;
  margin-bottom: 20px;
  padding-right: 0px;
  font-family: Satoshi, sans-serif;
  color: #555c96;
  font-size: 16px;
  line-height: 28px;
  font-weight: 500;
}

.big-paragraph.color {
  font-family: Satoshi, sans-serif;
  color: #2ea4ff;
  font-size: 24px;
  line-height: 34px;
  font-style: normal;
  font-weight: 700;
}

.big-paragraph.title-position {
  color: #4157ff;
  font-weight: 400;
}

.hero-div-info {
  position: relative;
  right: -132px;
  padding-top: 0px;
}

.hero-div-info.half {
  right: 0px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 50%;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  opacity: 0.56;
}

.hero-div-info.half.mockup {
  position: static;
  left: -100px;
  max-width: 600px;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-flex: 0;
  -webkit-flex: 0 auto;
  -ms-flex: 0 auto;
  flex: 0 auto;
}

.hero-div-info.half.mockup.circles {
  position: absolute;
  left: 0%;
  top: auto;
  right: 0%;
  bottom: 0%;
  width: 100%;
  height: 300px;
  max-width: 1200px;
  margin: auto auto 0px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  opacity: 0.6;
}

.bigger-circles {
  position: absolute;
  left: auto;
  top: -200px;
  bottom: auto;
  width: 1200px;
  height: 1200px;
  border-style: none;
  border-width: 0px;
  border-color: hsla(0, 0%, 100%, 0.2);
  border-radius: 100%;
  background-color: transparent;
  background-image: linear-gradient(222deg, #4157ff, #2ea4ff);
  opacity: 1;
}

.bigger-circles.second {
  left: 140px;
  top: auto;
  bottom: 117px;
  width: 1000px;
  border-radius: 100%;
  opacity: 0.39;
}

.bigger-circles.second.tag {
  left: 137px;
  bottom: -51px;
  background-image: linear-gradient(222deg, #2ea4ff, #4157ff);
}

.bigger-circles.tag {
  left: auto;
  top: auto;
  right: 200px;
}

.bigger-circles.features {
  left: auto;
  top: auto;
  right: 200px;
  bottom: 140px;
  width: 600px;
  height: 600px;
  background-image: linear-gradient(308deg, #2ea4ff, #4157ff);
}

.bigger-circles.blog {
  left: 200px;
  top: 0%;
  right: auto;
  bottom: auto;
}

.bigger-circle {
  position: absolute;
  left: auto;
  top: auto;
  right: -54%;
  bottom: 0%;
  width: 1000px;
  height: 1000px;
  border-style: none;
  border-width: 0px;
  border-color: hsla(0, 0%, 100%, 0.2);
  border-radius: 100%;
  background-color: transparent;
  background-image: linear-gradient(241deg, #2ea4ff, #4157ff);
  opacity: 1;
}

.bigger-circle.tag {
  right: 65%;
}

.bigger-circle.features {
  left: 300px;
  right: auto;
  width: 500px;
  height: 500px;
  background-image: linear-gradient(232deg, #4157ff, #2ea4ff);
}

.image {
  position: absolute;
  left: auto;
  top: auto;
  right: auto;
  bottom: 0%;
  z-index: 2;
  height: 80%;
  -webkit-filter: contrast(98%);
  filter: contrast(98%);
}

.image.doctor {
  margin-bottom: 0px;
}
.images {
  position: relative;
  top: 70px;
  z-index: 1;
  width: 80%;;
}

.rotating{
  animation: rotating 15s linear infinite;
}

@keyframes rotating {
  from {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}


.features-icon.section.darker {
  background-color: #4157ff;
}
.left {
  text-align: left;
}

@media (max-width: 1130px) {
  .spariscipiccolo{
    display: none;
  }

  .container.hero {
  justify-content: center;
}


}
</style>
