<template>
    <ul class="pagination pagination-sm float-right">
        <li class="page-item" :class="{ 'disabled': props.prev == null }">
            <Link class="page-link" :href="props.prev">«</Link>
        </li>

        <li class="page-item" :class="{ 'active': link.active }" v-for="(link, index) in computedLinks" :key="index">
            <Link :href="link.url" class="page-link">
            {{ link.label }}
            </Link>
        </li>

        <li class="page-item" :class="{ 'disabled': props.next == null }">
            <Link class="page-link" :href="props.next">»</Link>
        </li>
    </ul>
</template>

<script setup>

import { computed } from 'vue';

const props = defineProps({
    links: {
        type: Array,
        required: true
    },
    prev: {
        type: String,
        default: ""
    },
    next: {
        type: String,
        default: ""
    }
})

const computedLinks = computed(() => {
    props.links.shift(); // remove the first element in the array
    props.links.pop();// remove the last element in the array
    return props.links;
})


</script>
