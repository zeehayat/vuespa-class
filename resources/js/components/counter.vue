<script setup>
import {ref} from 'vue'
const count=ref(0)
let showCounter=true
</script>

<template>
{{count}}

    <button @click="count++" v-if="showCounter">Add</button>
</template>

<style scoped>

</style>
