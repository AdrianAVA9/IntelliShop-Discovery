<script setup>
defineProps({
    intro: {
        type: String,
        required: true,
    },
    suggestions: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div
        class="absolute left-0 right-0 top-full z-10 mt-4 rounded-2xl border border-hairline bg-white/90 p-6 shadow-xl backdrop-blur-xl"
    >
        <div class="flex items-start gap-4">
            <div class="rounded-lg bg-primary-container/20 p-2">
                <span class="material-symbols-outlined text-aura-rose"
                    >auto_awesome</span
                >
            </div>
            <div class="flex-1">
                <p class="font-h3 mb-4 text-body-md text-deep-charcoal">
                    {{ intro }}
                </p>
                <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
                    <button
                        v-for="item in suggestions"
                        :key="item.title"
                        type="button"
                        class="cursor-pointer rounded-xl border border-outline-variant/30 bg-surface-container-low p-3 text-left transition-colors hover:border-aura-rose/50"
                    >
                        <span
                            class="mb-1 block text-xs font-label-caps text-soft-mauve"
                            >{{ item.badge }}</span
                        >
                        <p class="font-body-sm font-semibold">{{ item.title }}</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
