<script setup>
import { ref } from 'vue';

const message = ref('Vue is connected.');
</script>

<template>
    <div class="vue-app">
        <p class="vue-app__title">{{ message }}</p>
        <p class="vue-app__hint">
            Build UI in <code>resources/js</code> and load this shell from a route that returns
            <code>view('app')</code>.
        </p>
    </div>
</template>

<style scoped>
.vue-app {
    font-family: system-ui, sans-serif;
    padding: 1.5rem;
    max-width: 40rem;
}

.vue-app__title {
    font-size: 1.25rem;
    font-weight: 600;
    margin: 0 0 0.5rem;
}

.vue-app__hint {
    margin: 0;
    color: #4b5563;
    font-size: 0.875rem;
    line-height: 1.5;
}

code {
    font-size: 0.8125rem;
    background: #f3f4f6;
    padding: 0.125rem 0.375rem;
    border-radius: 0.25rem;
}
</style>
