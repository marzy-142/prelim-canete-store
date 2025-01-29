<script setup>
import { defineProps } from "vue";

defineProps({
    products: Array,
});
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Products</h1>
        <router-link to="/products/create" class="btn btn-primary mb-3"
            >Add Product</router-link
        >

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Category</th>
                    <th class="border border-gray-300 px-4 py-2">Price</th>
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
                        ${{ product.price }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
