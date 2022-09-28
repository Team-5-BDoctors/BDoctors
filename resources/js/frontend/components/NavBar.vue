<template>
  <div class="container-fluid">
    <div class="container d-flex justify-content-between navbar py-3 align-items-center">
      <div class="h-100">
        <a href="/"><img class="h-100" src="/images/logo.png" alt="logo" /></a>
      </div>
      <div class="d-flex align-items-center flex-row-reverse gap-5 flex-grow-1">
        <div class="p-2 navitem">
          <div>
        <a href="/doctor"><i class="fs-5 fas fa-user"></i></a>
      </div>
        </div>

      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: "NavBar",
  props: {},
};
</script>

<style scoped lang="scss">
.container-fluid {
  background-color: white;
  box-shadow: rgba(0, 0, 0, 0.452) 0px 0px 10px;
}


.navbar {
  height: 80px;
  background-color: #fff;
  z-index: 1;

  a {
    text-decoration: none;
    color: #151e66;
    font-size: 0.9rem;
    text-align: center;
    font-weight: 700;
    transition: all 0.3s ease-in-out;
    width: 100%;
    line-height: 100%;
    height: 100%;
    overflow: hidden;

    &:hover {
      .freccia_link {
        transform: translateX(50%);
      }
    }
  }

  .freccia_link {
    transition: all 0.3s ease-in-out;
    font-size: 0.8rem;
  }

  .navitem {
    transition: all 0.3s ease-in-out;
    border-radius: 5px;

    &:hover {
      background-color: #d8eeff;
    }
  }
}
</style>
