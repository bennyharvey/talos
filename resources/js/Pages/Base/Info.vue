<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3'
import {onMounted, ref} from 'vue'
import Button from '../../Shared/Basic/BaseButton'

const input = ref('')
const count = ref(0)
const props = defineProps({
    baseStation: Number
})
function increment() {
    count.value++
}
onMounted(() => {
    console.log(`The initial count is ${count.value}.`)
})
</script>

<template>
    <el-container class="input-size-default">
        <el-input v-model="input" placeholder="Please input" clearable />
    </el-container>
    <p>Base Station #{{ baseStation }}</p>
    <Button @click="increment" :text="`Count: ${count}`"/>
    <el-row class="mb-4">
        <Button text="sdf"/>
    </el-row>
    <Link :href="$route('bs.info', baseStation + 1)">Next base stationer</Link>>
</template>

<style>
.input-size-default{
    width: 300px;
}
</style>
