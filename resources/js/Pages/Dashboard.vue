<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="flex items-stretch py-12">
            <div class="w-full mx-auto sm:px-6 lg:px-8 sm:w-1/2 lg:w-1/3 xl:w-1/4">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center bg-white border-b border-gray-200">
                        Inventory
                    </div>
                </div>
            </div>
            <div class="w-full mx-auto sm:px-6 lg:px-8 sm:w-1/2 lg:w-1/3 xl:w-1/4">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center bg-white border-b border-gray-200">
                        Meals
                    </div>
                </div>
            </div>
            <div class="w-full mx-auto sm:px-6 lg:px-8 sm:w-1/2 lg:w-1/3 xl:w-1/4">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center bg-white border-b border-gray-200">
                        Workouts
                    </div>
                </div>
            </div>
            <div class="w-full mx-auto sm:px-6 lg:px-8 sm:w-1/2 lg:w-1/3 xl:w-1/4">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center bg-white border-b border-gray-200">
                        Planner
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
