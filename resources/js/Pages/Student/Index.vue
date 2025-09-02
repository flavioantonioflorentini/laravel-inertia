<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    students: {
        type: Object,
    },
    classes: {
        type: Object,
    },
    sections: {
        type: Object,
    },
});
//students.data.map((student) => console.log(student.name));
//console.log(students);
</script>

<template>
    <Head title="Students" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                students
            </h2>
            <div>
                <ul>
                    <li v-for="student in students.data" :key="student.id">
                        {{ student.name }}
                    </li>
                </ul>
            </div>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                classes
            </h2>
            <div>
                <ul>
                    <li v-for="classItem in classes.data" :key="classItem.id">
                        {{ classItem.name }}
                    </li>
                </ul>
            </div>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                sections
            </h2>
            <div>
                <ul>
                    <li
                        v-for="sectionItem in sections.data"
                        :key="sectionItem.id"
                    >
                        {{ sectionItem.name }}
                    </li>
                </ul>
            </div>
        </template>
    </AuthenticatedLayout>
</template>
