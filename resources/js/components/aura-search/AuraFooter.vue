<script setup>
defineProps({
    brand: {
        type: String,
        required: true,
    },
    taglineSuffix: {
        type: String,
        required: true,
    },
    logoSrc: {
        type: String,
        default: '/assets/images/logo.png',
    },
    links: {
        type: Array,
        required: true,
    },
    year: {
        type: Number,
        default: () => new Date().getFullYear(),
    },
});
</script>

<template>
    <footer
        class="mt-24 w-full border-t border-hairline bg-mist-white dark:border-gray-800 dark:bg-slate-950"
    >
        <div
            class="flex w-full flex-col items-center justify-between gap-4 px-12 py-8 md:flex-row"
        >
            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-2">
                    <span
                        class="inline-flex h-7 origin-left scale-75 items-center rounded-md bg-white p-0.5 ring-1 ring-hairline/50"
                        aria-hidden="true"
                    >
                        <img
                            :src="logoSrc"
                            alt=""
                            class="h-full w-auto max-h-7 object-contain"
                            width="28"
                            height="28"
                        />
                    </span>
                    <span class="font-bold text-aura-rose">{{ brand }}</span>
                </div>
                <p class="text-xs font-light text-gray-400">
                    © {{ year }}
                    {{ brand }}. {{ taglineSuffix }}
                </p>
            </div>
            <nav
                class="flex flex-wrap justify-center gap-6 md:gap-8"
                aria-label="Footer"
            >
                <a
                    v-for="link in links"
                    :key="link.label"
                    :href="link.href"
                    class="font-h1 text-xs font-light text-gray-500 transition-colors hover:text-aura-rose"
                >
                    {{ link.label }}
                </a>
            </nav>
        </div>
    </footer>
</template>
