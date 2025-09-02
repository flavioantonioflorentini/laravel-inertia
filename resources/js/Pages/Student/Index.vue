<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    students: {
        type: Object,
    },
});
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
        </template>
    </AuthenticatedLayout>
</template>
