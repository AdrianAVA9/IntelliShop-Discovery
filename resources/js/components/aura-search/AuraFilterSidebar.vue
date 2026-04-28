<script setup>
defineProps({
    filters: {
        type: Array,
        required: true,
    },
    ambientRows: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <aside class="col-span-12 space-y-8 md:col-span-3">
        <div>
            <h3 class="mb-4 font-label-caps text-deep-charcoal">
                Semantic Filters
            </h3>
            <div class="flex flex-wrap gap-2">
                <button
                    v-for="tag in filters"
                    :key="tag.id"
                    type="button"
                    class="cursor-pointer rounded-full px-3 py-1 text-xs font-medium transition-colors"
                    :class="
                        tag.active
                            ? 'bg-aura-rose text-white'
                            : 'border border-outline/10 bg-white text-deep-charcoal hover:bg-mist-white'
                    "
                >
                    {{ tag.label }}
                </button>
            </div>
        </div>
        <div class="rounded-2xl border border-outline-variant/20 bg-white p-6">
            <h3 class="mb-4 font-label-caps text-deep-charcoal">
                Ambient Status
            </h3>
            <div class="space-y-4">
                <div
                    v-for="row in ambientRows"
                    :key="row.label"
                    class="flex items-center justify-between"
                >
                    <span class="text-xs text-soft-mauve">{{ row.label }}</span>
                    <div v-if="row.live" class="flex items-center gap-2">
                        <span class="text-xs font-semibold text-neural-mint">{{
                            row.value
                        }}</span>
                        <div class="size-1.5 rounded-full bg-neural-mint" />
                    </div>
                    <span v-else class="text-xs font-semibold">{{ row.value }}</span>
                </div>
            </div>
        </div>
    </aside>
</template>
