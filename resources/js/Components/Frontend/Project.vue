<script setup>
import {Link} from '@inertiajs/inertia-vue3';

defineProps({
    project:Object
});

</script>

<template>
<Link :href="project.project_url" class="group flex flex-col items-center text-center cursor-pointer">
<div class="mb-6"> 
    <img class="rounded-2xl h-56" :src="project.image" :alt="project.name" />
</div>

<h3 class="group-hover:text-light-tail-500 text-2xl font-semibold capitalize mb-3">{{project.skill.name}}</h3>
</Link>
</template>