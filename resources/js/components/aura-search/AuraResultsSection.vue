<script setup>
import AuraFilterSidebar from './AuraFilterSidebar.vue';
import AuraProductCard from './AuraProductCard.vue';
import AuraLoadingMore from './AuraLoadingMore.vue';

defineProps({
    filters: {
        type: Array,
        required: true,
    },
    ambientRows: {
        type: Array,
        required: true,
    },
    resultsHeading: {
        type: String,
        required: true,
    },
    resultCountLabel: {
        type: String,
        required: true,
    },
    sortOptions: {
        type: Array,
        required: true,
    },
    products: {
        type: Array,
        required: true,
    },
    loadingMessage: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <section class="mt-xxl grid grid-cols-12 gap-gutter">
        <AuraFilterSidebar
            :filters="filters"
            :ambient-rows="ambientRows"
        />
        <div class="col-span-12 md:col-span-9">
            <div class="mb-6 flex items-center justify-between">
                <h2 class="font-h2 text-deep-charcoal">
                    {{ resultsHeading }}
                    <span
                        class="text-body-md font-normal text-soft-mauve"
                        >{{ resultCountLabel }}</span
                    >
                </h2>
                <div class="flex items-center gap-2">
                    <span class="font-label-caps text-xs text-soft-mauve"
                        >Sort by:</span
                    >
                    <select
                        class="cursor-pointer border-none bg-transparent text-xs font-bold focus:ring-0"
                        aria-label="Sort results"
                    >
                        <option
                            v-for="opt in sortOptions"
                            :key="opt"
                            :value="opt"
                        >
                            {{ opt }}
                        </option>
                    </select>
                </div>
            </div>
            <div
                class="grid grid-cols-1 gap-gutter sm:grid-cols-2 lg:grid-cols-3"
            >
                <AuraProductCard
                    v-for="p in products"
                    :key="p.id"
                    :product="p"
                />
            </div>
            <AuraLoadingMore :message="loadingMessage" />
        </div>
    </section>
</template>
