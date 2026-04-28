<script setup>
defineProps({
    items: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <nav
        class="fixed bottom-0 left-0 z-50 flex w-full justify-around rounded-t-2xl border-t border-hairline bg-white/90 px-4 py-3 shadow-[0_-4px_20px_rgba(45,52,54,0.04)] backdrop-blur-lg dark:border-gray-800 dark:bg-slate-900/90 md:hidden"
        aria-label="Primary mobile"
    >
        <a
            v-for="item in items"
            :key="item.label"
            :href="item.href"
            class="flex flex-col items-center justify-center font-h1 text-[10px] font-semibold uppercase tracking-widest transition-all duration-200 active:scale-90"
            :class="
                item.active
                    ? 'rounded-xl bg-aura-rose/5 px-4 py-1 text-aura-rose'
                    : 'text-gray-400 dark:text-gray-500'
            "
        >
            <span class="material-symbols-outlined">{{ item.icon }}</span>
            <span>{{ item.label }}</span>
        </a>
    </nav>
</template>
