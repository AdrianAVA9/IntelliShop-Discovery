<script setup>
import AuraAgentSuggestions from './AuraAgentSuggestions.vue';

defineProps({
    headline: {
        type: String,
        required: true,
    },
    tagline: {
        type: String,
        required: true,
    },
    searchPlaceholder: {
        type: String,
        required: true,
    },
    suggestionIntro: {
        type: String,
        required: true,
    },
    suggestionItems: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <section class="mb-12">
        <div class="mb-8 text-center">
            <h1
                class="mb-2 font-display text-display tracking-tight text-deep-charcoal max-sm:text-3xl max-sm:leading-tight md:tracking-normal"
            >
                {{ headline }}
            </h1>
            <p class="font-body-lg text-soft-mauve">{{ tagline }}</p>
        </div>
        <div class="relative mx-auto max-w-3xl">
            <div
                class="aura-pulse flex items-center gap-3 rounded-full border border-hairline bg-white p-2 shadow-[0_4px_20px_rgba(45,52,54,0.04)]"
            >
                <div class="flex items-center pl-4 text-aura-rose">
                    <span class="material-symbols-outlined text-3xl"
                        >search_spark</span
                    >
                </div>
                <input
                    class="font-body-md flex-1 border-none bg-transparent text-deep-charcoal placeholder:text-gray-400 focus:ring-0"
                    type="search"
                    :placeholder="searchPlaceholder"
                    autocomplete="off"
                    aria-label="Semantic product search"
                />
                <div class="flex items-center gap-2 pr-2">
                    <div
                        class="flex items-center gap-2 rounded-full bg-mist-white px-3 py-1.5"
                    >
                        <div
                            class="thinking-ring size-2 rounded-full bg-logic-amber"
                        />
                        <span
                            class="text-xs font-label-caps text-deep-charcoal opacity-60"
                            >Thinking...</span
                        >
                    </div>
                    <button
                        type="button"
                        class="rounded-full bg-aura-rose px-6 py-2.5 font-label-caps text-white transition-all hover:brightness-105 active:scale-[0.98]"
                    >
                        Analyze
                    </button>
                </div>
            </div>
            <AuraAgentSuggestions
                :intro="suggestionIntro"
                :suggestions="suggestionItems"
            />
        </div>
    </section>
</template>
