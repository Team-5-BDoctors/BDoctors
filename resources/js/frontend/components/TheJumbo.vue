<template>
  <div class="container-fluid">
    <div
      class="container d-flex justify-content-between align-items-center h-100"
    >
      <div class="left-jumbo">
        <h1 class="pb-3">Prenotare una visita non è mai stato così semplice</h1>
        <p class="pb-3">
          Ci siamo occupati di tutta la parte noiosa per te, ora puoi
          concentrarti su ciò che conta. Centinaia di specialisti al tuo
          servizio, a portata di click.
        </p>
        <div>
          <button type="button" class="btn btn-primary">
            Prenota un appuntamento
          </button>
        </div>
      </div>
      <div class="h-75 right-jumbo">
        <img
          class="h-100 floating-elements"
          src="/images/615dd47b94487f5cd8df6c49_icons8-banned-129.png"
          alt=""
        />
        <img
          class="h-100 doctor-jumbo"
          src="/images/jumbo_doctor.png"
          alt=""
        />
      </div>
      <img
        class="h-100 right-bg-jumbo"
        src="/images/jumbo_right_bg.jpg"
        alt=""
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "TheJumbo",
  props: {},
};
</script>

<style scoped lang="scss">

h1 {
  font-size: 65px;
  font-weight: 700;
}

p {
  font-weight: 500;
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
