<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Meal
                </h2>
                <Link :href="route('meals')" class="text-xs text-blue-600 hover:underline">&laquo; Back to meals</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-xl font-bold">{{meal.name}}</h2>

                        <ul>
                            <li v-for="ingredient of meal.ingredients" :key="ingredient.id">
                                {{ ingredient.name }} - {{ ingredient.pivot.qty }} {{ ingredient.pivot.unit == 'number' ? '' : ingredient.pivot.unit }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>


<script>


export default 
{
    props: {
        'meal': Object,
        'ingredients': Object
    }
}
</script>
