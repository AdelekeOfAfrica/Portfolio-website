<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from '@/components/Frontend/Promote.vue';
import About from '@/components/Frontend/About.vue';
import Skills from  '@/components/Frontend/Skill.vue';
import Portfolio from '@/components/Frontend/Portfolio.vue';
import Services from '@/components/Frontend/Services.vue';
import ContactMe from '@/components/Frontend/Contactme.vue';

defineProps({
 skills:Object,
 projects:Object
});
</script>

<template>
    <Head title="Michael Adeleke Portfolio website" />
    <FrontendLayout>
    <!----Hero Section--->
    <br /><br /><br />
    <Hero />
    <!----promote tail-100--->
    <Promote />
    <!----About Secondary--->
    <About />
    <!----Skills tail-100--->
    <Skills :skills='skills' />
    <!----Portfolio Secondary--->
    <Portfolio  :skills="skills" :projects="projects" />
    <!----Service Secondary--->
    <Services />
       <!----Contact Primary--->
       <ContactMe />
    </FrontendLayout>
</template>
