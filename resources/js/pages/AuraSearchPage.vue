<script setup>
import AuraTopBar from '@/components/aura-search/AuraTopBar.vue';
import AuraHeroSearch from '@/components/aura-search/AuraHeroSearch.vue';
import AuraResultsSection from '@/components/aura-search/AuraResultsSection.vue';
import AuraBottomNav from '@/components/aura-search/AuraBottomNav.vue';
import AuraFooter from '@/components/aura-search/AuraFooter.vue';

import {
    agentSuggestions,
    agentSuggestionsIntro,
    ambientStatus,
    bottomNavItems,
    footerBrand,
    footerLinks,
    footerTaglineSuffix,
    heroCopy,
    loadingCopy,
    navLinks,
    products,
    resultCountLabel,
    resultsHeading,
    semanticFilters,
    sortOptions,
    toolbarIcons,
} from '@/data/auraSearchDemo.js';
</script>

<template>
    <div class="min-h-screen bg-mist-white">
        <AuraTopBar
            :nav-links="navLinks"
            :toolbar-icons="toolbarIcons"
        />
        <main
            class="mx-auto max-w-7xl px-4 pb-32 pt-24 md:px-12"
        >
            <AuraHeroSearch
                :headline="heroCopy.headline"
                :tagline="heroCopy.tagline"
                :search-placeholder="heroCopy.searchPlaceholder"
                :suggestion-intro="agentSuggestionsIntro"
                :suggestion-items="agentSuggestions"
            />
            <AuraResultsSection
                :filters="semanticFilters"
                :ambient-rows="ambientStatus"
                :results-heading="resultsHeading"
                :result-count-label="resultCountLabel"
                :sort-options="sortOptions"
                :products="products"
                :loading-message="loadingCopy"
            />
        </main>
        <AuraBottomNav :items="bottomNavItems" />
        <AuraFooter
            :brand="footerBrand"
            :tagline-suffix="footerTaglineSuffix"
            :links="footerLinks"
        />
    </div>
</template>
