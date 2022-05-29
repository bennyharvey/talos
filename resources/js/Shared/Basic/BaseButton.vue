<script setup>
const props = defineProps({
    text: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: 'primary'
    },
    ucase: {
        type: Boolean,
        default: true
    }
})
</script>

<template>
    <el-button :type=props.type class="basic-button">
        {{props.ucase ? text.toUpperCase() : props.text}}
        <slot/>
    </el-button>
</template>

<style>
.basic-button {
    font-weight: 600;
}
</style>
