<script setup>
defineProps({
    product: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <article
        class="group overflow-hidden rounded-2xl border border-outline-variant/20 bg-white transition-all duration-300 hover:shadow-xl hover:shadow-aura-rose/5"
    >
        <div class="relative h-64 overflow-hidden">
            <img
                :src="product.image"
                :alt="product.imageAlt"
                loading="lazy"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
            >
            <div
                v-if="product.badge"
                class="absolute left-4 top-4 rounded-full bg-logic-amber/90 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-white shadow-sm backdrop-blur-md"
            >
                {{ product.badge }}
            </div>
            <button
                type="button"
                class="absolute right-4 top-4 rounded-full bg-white/90 p-2 shadow-sm backdrop-blur-md transition-transform active:scale-90"
                aria-label="Add to favorites"
            >
                <span
                    class="material-symbols-outlined"
                    :class="
                        product.favoriteTinted ? 'text-aura-rose' : 'text-gray-300'
                    "
                    >favorite</span
                >
            </button>
        </div>
        <div class="p-5">
            <div class="mb-2 flex items-start justify-between">
                <h4 class="font-h3 text-body-md text-deep-charcoal">
                    {{ product.title }}
                </h4>
                <span class="font-bold text-aura-rose">{{ product.price }}</span>
            </div>
            <p class="mb-4 text-xs text-soft-mauve">{{ product.description }}</p>
            <div class="flex items-center justify-between">
                <div
                    v-if="product.swatchVariant === 'avatar'"
                    class="-space-x-2 flex"
                    aria-hidden="true"
                >
                    <div
                        v-for="(cls, i) in product.avatarSwatches"
                        :key="i"
                        class="size-6 rounded-full border-2 border-white"
                        :class="cls"
                    />
                </div>
                <div
                    v-else-if="product.swatchVariant === 'dots'"
                    class="flex gap-1"
                    aria-hidden="true"
                >
                    <div
                        v-for="(cls, i) in product.dotSwatches"
                        :key="i"
                        class="size-4 rounded-full"
                        :class="cls"
                    />
                </div>
                <button
                    type="button"
                    class="flex items-center gap-1 font-label-caps text-xs text-deep-charcoal transition-colors hover:text-aura-rose"
                >
                    Quick View
                    <span class="material-symbols-outlined text-sm"
                        >arrow_forward</span
                    >
                </button>
            </div>
        </div>
    </article>
</template>
