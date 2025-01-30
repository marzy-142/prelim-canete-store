<script setup>
import { defineProps } from "vue";

defineProps({
    products: Array,
});
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Products</h1>

        <table class="w-full border-collapse border border-gray-300 font-mono">
            <thead>
                <tr class="bg-green-200">
                    <th class="border border-green-300 px-4 py-2">ID</th>
                    <th class="border border-green-300 px-4 py-2">Name</th>
                    <th class="border border-green-300 px-4 py-2">Category</th>
                    <th class="border border-green-300 px-4 py-2">Quantity</th>
                    <th class="border border-green-300 px-4 py-2">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td class="border border-gray-300 px-4 py-2">
                        {{ product.id }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ product.name }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ product.category?.name }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ product.quantity }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        ${{ product.price }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
