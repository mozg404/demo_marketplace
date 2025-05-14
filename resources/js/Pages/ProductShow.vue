<script setup>

import Main from "../Layouts/Main.vue";
import Wrapper from "../Components/Wrapper.vue";

defineProps({
    id: Number,
    name: String,
    imageUrl: String
})
</script>

<template>
<Main>
    <Wrapper>
        <div class="flex align-middle">
            <div><img :src="imageUrl"></div>
            <h1>{{ name }}</h1>
        </div>
    </Wrapper>
</Main>
</template>
