<template>
    <div class="w-3/4 mx-4 mx-auto flex bg-white shadow-lg rounded-lg">
        <div class="flex flex-col items-start p-12">
            <div>
                <h1 class="text-3xl">Página no encontrada</h1>
                <p class="text-gray-600">Regresar a <router-link :to="{ name: 'home' }" class="text-teal-500">Inicio</router-link></p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {

    }
</script>
