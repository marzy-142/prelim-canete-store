<script setup>
import { defineProps } from "vue";

defineProps({
    categories: Array,
});
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Categories</h1>

        <table class="w-full border-collapse border border-gray-300 font-mono">
            <thead>
                <tr class="bg-green">
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category in categories" :key="category.id">
                    <td
                        class="border border-gray-300 px-4 py-2 hover:bg-gray-100"
                    >
                        {{ category.name }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
