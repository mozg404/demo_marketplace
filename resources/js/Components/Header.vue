<script setup>
import {Link, usePage} from "@inertiajs/vue3";
import {computed} from "vue";

const page = usePage()
const isAuth = computed(() => page.props.isAuth)
const user = computed(() => page.props.user)
</script>

<template>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <Link href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </Link>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <Link href="/" class="text-sm/6 font-semibold text-gray-900">Главная</Link>
                <Link href="/catalog" class="text-sm/6 font-semibold text-gray-900">Каталог</Link>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <div v-if="isAuth">
                    <Link href="/cabinet/profile" class="text-sm/6 font-semibold text-gray-900">{{ user.name }} <span aria-hidden="true">&rarr;</span></Link>
                </div>
                <div v-else>
                    <a href="/login" class="text-sm/6 font-semibold text-gray-900">Вход <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
        </nav>
    </header>
</template>

<style scoped>

</style>
