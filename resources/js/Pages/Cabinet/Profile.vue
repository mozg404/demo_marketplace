<script setup>
import { Link, useForm } from '@inertiajs/vue3'
import Main from "../../Layouts/Main.vue";

defineProps({
    id: String,
    name: String,
    email: String,
    createdAt: String,
    updatedAt: String,
})
</script>

<template>
    <Main>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <div>ID: {{ id }}</div>
                <div>Имя: {{ name }}</div>
                <div>Email: {{ email }}</div>
                <div>Создан: {{ createdAt }}</div>
                <div>Обновлен: {{ updatedAt }}</div>
                <div><Link href="/logout">Выйти</Link></div>
            </div>
        </div>
    </Main>
</template>
