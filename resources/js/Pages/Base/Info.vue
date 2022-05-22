<template>
    <el-container class="input-size-default">
<!--        <el-input v-model="input" placeholder="Please input" clearable />-->
    </el-container>
    <p>Base Station #{{ baseStation }}</p>
    <button @click="increment">Count is: {{ count }}</button>
    <el-row class="mb-4">
        <Button text="text"/>
    </el-row>
    <Link :href="$route('bs.info', baseStation + 1)">Next base station</Link>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import Layout from '../../Shared/Layout'
import { ref } from 'vue'
import Button from '../../Shared/Basic/Button'
const input = ref('')
export default {
    layout: Layout,
    components: {
        Head,
        Link,
        Button
    },
    props: {
        baseStation: Number,
    },
    // Properties returned from data() becomes reactive state
    // and will be exposed on `this`.
    data() {
        return {
            count: 0
        }
    },

    // Methods are functions that mutate state and trigger updates.
    // They can be bound as event listeners in templates.
    methods: {
        increment() {
            this.count++
        }
    },

    // Lifecycle hooks are called at different stages
    // of a component's lifecycle.
    // This function will be called when the component is mounted.
    mounted() {
        console.log(`The initial count is ${this.count}.`)
    }
}
</script>

<style>

.input-size-default{
    width: 300px;
}
</style>
