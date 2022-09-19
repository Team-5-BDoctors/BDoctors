<template>
  <div class="container-fluid footersection py-5">
    <div class="container">
      <div class="row footercontainer pb-5 gap-5">

        <div class="col-12 col-md-6 col-lg-3 flex-grow-1">
         <div class="w-100 pb-5"><img class="w-50" src="images/logo_bianco.png" alt="logo"></div>
         <p class="big-paragraph pb-5">“La medicina cura le malattie, ma solo i medici possono curare i pazienti.”</p>
         <div>Made with ❤️ by Booleaners</div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
         <h2 class="footer-headings pb-4">Specializzazioni</h2>
         <div class="footerlink">footerlink</div>
         <div class="footerlink">footerlink</div>
         <div class="footerlink">footerlink</div>
         <div class="footerlink">footerlink</div>
         <div class="footerlink">footerlink</div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
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
  </div>
</template>

<script>
export default {
  name: "TheFooter",
  props: {},
};
</script>

<style scoped lang="scss">

.footersection {
  background-color: #151e66;
  color: #d8eeff;
}

.footerlink{
 color: #d8eeff;
 opacity: 0.5;
}

.footercontainer{
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


</style>
