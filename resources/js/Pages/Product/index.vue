<script setup>
import { defineProps } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
const props = defineProps({
    categories: Array,
    products: Array,
    selectedCategory: Object || null,
});
</script>

<template>
    <div class="flex min-h-screen">
        <div class="w-1/4 bg-gray-100 p-4">
            <h2 class="text-xl font-bold mb-4">Categories</h2>
            <ul>
                <li
                    v-for="category in categories"
                    :key="category.id"
                    class="mb-2"
                >
                    <Link
                        :href="`/products?category=${category.id}`"
                        class="block p-2 rounded hover:bg-orange-500 hover:text-white"
                        :class="{
                            'bg-orange-500 text-white':
                                selectedCategory &&
                                selectedCategory.id === category.id,
                        }"
                    >
                        {{ category.name }}
                    </Link>
                </li>
            </ul>
        </div>

        <div class="w-3/4 p-4">
            <h1 class="text-2xl font-bold mb-4">
                {{
                    selectedCategory
                        ? selectedCategory.name + " Products"
                        : "All Products"
                }}
            </h1>

            <table
                class="w-full border-collapse border border-gray-300 font-mono"
            >
                <thead>
                    <tr class="bg-green-200">
                        <th class="border border-green-300 px-4 py-2">ID</th>
                        <th class="border border-green-300 px-4 py-2">Name</th>
                        <th class="border border-green-300 px-4 py-2">
                            Category
                        </th>
                        <th class="border border-green-300 px-4 py-2">
                            Quantity
                        </th>
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
                            ₱{{ product.price }}
                        </td>
                    </tr>
                </tbody>
            </table>

            <p v-if="products.length === 0" class="text-gray-500 mt-4">
                No products available in this category.
            </p>
        </div>
    </div>
</template>
