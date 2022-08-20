<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Inventory
            </h2>
        </template>

        <section class="p-2 sm:p-8 lg:p-12">
            <div class="flex justify-between">
                <button class="px-4 py-1 text-sm bg-blue-300 rounded-lg hover:bg-blue-400"
                        @click="data.itemForm.open = !data.itemForm.open; data.locationForm.open = false"
                >
                    + Add Item
                </button>

                <button class="px-4 py-1 text-sm bg-green-300 rounded-lg hover:bg-green-400"
                    @click="data.locationForm.open = !data.locationForm.open; data.itemForm.open = false"
                >
                    + Add Location
                </button>
            </div>
        
            <form @submit.prevent="addLocation" class="flex flex-col gap-1 my-5" v-if="data.locationForm.open">
                <label class="" for="">New Location</label>
                <div class="flex">
                    <input class="w-full text-sm border-gray-300 rounded-l-lg sm:w-1/2 lg:w-1/3" placeholder="Location name (e.g. Cupboard)" type="text" v-model="newLocation.name">
                    <button class="px-4 py-1 text-sm text-white bg-green-500 rounded-r-lg hover:bg-green-600">Add</button>
                </div>
            </form>

            <form @submit.prevent="addFoodItem" class="flex flex-col gap-1 my-5" v-if="data.itemForm.open">
                <label for="">Add Food</label>
                <div class="flex">
                    <input class="w-full text-sm border-gray-300 rounded-l-lg sm:w-1/2 lg:w-1/3" placeholder="Food Search" type="text" v-model="newFoodItem.name">
                    <button class="px-4 py-1 text-sm text-white bg-blue-500 rounded-r-lg hover:bg-blue-600">Add</button>
                </div>
            </form>
        </section>

        <section v-if="locations && locations.length > 0" 
            class="p-2 sm:px-8 lg:px-12"
        >
            <div class="mb-5" v-for="location of locations" :key="location.id">
                <div class="flex items-center justify-between p-4 font-bold border cursor-pointer bg-green-50" 
                    @click="data.showLocation.display == location.id ? data.showLocation.display = 0 : data.showLocation.display = location.id"
                >
                    <span>{{ location.name }}</span>
                    
                    <span class="text-2xl" v-show="data.showLocation.display != location.id">+</span>
                    <span class="text-2xl" v-show="data.showLocation.display == location.id">-</span>
                </div>
                <div class="p-4 bg-white border" v-show="data.showLocation.display == location.id">
                    <small>Let's have a look in the {{ location.name }}</small>

                </div>
            </div>
        </section>

        <div v-else class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        No Inventory locations - create a location to add food items to
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script setup>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
    import { Head, useForm } from '@inertiajs/inertia-vue3';
    import { reactive} from "vue"

    defineProps({
        'locations': Array
    });

    let data = reactive({
        locationForm: {
            open: false,
        },
        itemForm: {
            open: false,
        },
        showLocation: {
            display: 0
        } 
    });

        
    let newLocation = useForm({
        name: ''
    });

    let addLocation = () => {
        newLocation.post('/inventory')
    }

    let newFoodItem = useForm({
        name: ''
    });

</script>
