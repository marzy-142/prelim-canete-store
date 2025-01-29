<script setup>
import { defineProps } from "vue";

defineProps({
    categories: Array,
});
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Categories</h1>
        <router-link to="/categories/create" class="btn btn-primary mb-3"
            >Add Category</router-link
        >

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category in categories" :key="category.id">
                    <td class="border border-gray-300 px-4 py-2">
                        {{ category.id }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ category.name }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
