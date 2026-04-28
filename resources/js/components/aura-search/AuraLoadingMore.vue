<script setup>
defineProps({
    message: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div class="mt-12 flex flex-col items-center gap-4">
        <div class="flex gap-2">
            <div
                class="size-2 animate-bounce rounded-full bg-aura-rose"
            />
            <div
                class="size-2 animate-bounce rounded-full bg-aura-rose [animation-delay:0.2s]"
            />
            <div
                class="size-2 animate-bounce rounded-full bg-aura-rose [animation-delay:0.4s]"
            />
        </div>
        <p class="font-label-caps text-xs text-soft-mauve">{{ message }}</p>
    </div>
</template>
