<template>
    <p>Base Station #{{ baseStation }}</p>
    <a href={{nextPage}}>{{nextPage}}</a>
    <button @click="increment">Count is: {{ count }}</button>
</template>
<script>
import { Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
    },
    props: {
        baseStation: Number,
        nextPage: String,
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
