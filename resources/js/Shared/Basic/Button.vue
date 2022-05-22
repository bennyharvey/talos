<script>
export default {
    props: {
        text: String,
        type: String,
        lowerCase: Boolean
    },
}
</script>
<template>
    <el-button type="primary" class="basic-button">{{this.text.toUpperCase()}}</el-button>
</template>
<style>
.basic-button {
    font-weight: 600;
}
</style>
