<template>
    <div>
        <div
            class="container d-flex justify-content-center flex-column align-content-center py-5"
        >
            <h1 class="text-center py-5">
                INVIATO CORRETTAMENTE <i class="fa-solid fa-circle-check"></i>
            </h1>
            <h3 class="text-center py-5">
                Verrai automaticamente reindirizzato alla homepage in 3
                secondi...
            </h3>
        </div>
    </div>
</template>

<script>
export default {
    name: "ConfirmSendMessage",
    mounted() {
        setTimeout(() => {
            this.$router.push({ name: "home" });
        }, 3000);
    },
};
</script>

<style scoped lang="scss">
.container {
    height: 100vh;
}
</style>
