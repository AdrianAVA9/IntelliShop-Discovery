<script setup>
defineProps({
    logoSrc: {
        type: String,
        default: '/assets/images/logo.png',
    },
    logoAlt: {
        type: String,
        default: 'AuraSearch',
    },
    brandName: {
        type: String,
        default: 'AuraSearch',
    },
    navLinks: {
        type: Array,
        required: true,
    },
    toolbarIcons: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <header
        class="fixed top-0 z-50 w-full border-b border-hairline bg-white/80 shadow-sm backdrop-blur-md dark:border-gray-800 dark:bg-slate-900/80"
    >
        <nav
            class="mx-auto flex h-16 w-full max-w-full items-center justify-between px-8"
        >
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-2">
                    <span
                        class="inline-flex h-8 items-center rounded-lg bg-mist-white p-0.5 ring-1 ring-hairline/60"
                    >
                        <img
                            :src="logoSrc"
                            :alt="logoAlt"
                            class="h-full w-auto max-h-8 max-w-[2rem] object-contain"
                            width="32"
                            height="32"
                        />
                    </span>
                    <span
                        class="text-xl font-bold tracking-tighter text-aura-rose"
                        >{{ brandName }}</span
                    >
                </div>
                <div
                    class="hidden items-center gap-6 font-h1 text-sm font-medium tracking-wide md:flex"
                >
                    <a
                        v-for="link in navLinks"
                        :key="link.label"
                        :href="link.href"
                        class="transition-colors duration-200"
                        :class="
                            link.active
                                ? 'border-b-2 border-aura-rose pb-1 text-aura-rose'
                                : 'text-gray-500 hover:text-deep-charcoal dark:text-gray-400 dark:hover:text-white'
                        "
                    >
                        {{ link.label }}
                    </a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button
                    v-for="icon in toolbarIcons"
                    :key="icon"
                    type="button"
                    class="rounded-full p-2 text-gray-500 transition-colors duration-200 hover:bg-gray-50 active:scale-[0.98] dark:hover:bg-gray-800"
                    :aria-label="icon.replace('_', ' ')"
                >
                    <span class="material-symbols-outlined">{{ icon }}</span>
                </button>
            </div>
        </nav>
    </header>
</template>
