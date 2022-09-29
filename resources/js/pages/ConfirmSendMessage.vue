<template>
    <div>
        <div class="container py-5">
            <h1>messaggio inviato correttamente</h1>
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
.container{
    height: calc(100vh - 607.317px - 80px);
}


</style>