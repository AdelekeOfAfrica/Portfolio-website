<script setup>
import Project from '@/Components/Frontend/Project.vue';
import {ref} from 'vue';

  const props = defineProps({
    skills:Object,
    projects:Object
    });

    const filteredProjects = ref(props.projects.data);

    
    const filterProjects = (id) =>{
        if(id ==="all"){
            filteredProjects.value = props.projects.data
        }
        else {
            filteredProjects.value = props.projects.data.filter(project =>{
                return project.skill.id ===id;
            })

        }
    }

</script>

<template>
   <div class ="container mx-auto">
     <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                <button @click="filterProjects('all')" class="flex text-center px-4 py-2 hover:text-light-sail-500 dark:text-dark-navy-100">All</button>
                </li>
                <li v-for="projectskill in skills.data" :key="projectskill.id" class="cursor-pointer capitalize m-4">
                    <button @click="filterProjects(projectskill.id)" class="flex text-center px-4 py-2 hover:text-light-tail-500 dark:text-dark-navy-100">
                    {{projectskill.name}}
                    </button>
                </li>
            </ul>
        </nav>

        <!----importing the projects gongon---->
        <section id ="projects" class="grid  gap-y-12 lg:grid-cols-3 lg:gap-8">
        <!-------next thing is to create a project.vue--------->
        <Project v-for="project in  filteredProjects " :key="project.id" :project="project" />
        </section>
   </div>
</template>

