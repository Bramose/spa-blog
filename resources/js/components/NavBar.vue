<template>
    <div class="w-3/4 md:w-auto md:flex-grow md:flex md:items-center">
        <ul class="flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0">
            <li>
                <router-link :to="{ name: 'home' }" class="block px-4 py-1 md:p-2 lg:px-4 text-teal-500 text-2xl hover:underline hover:text-teal-700">Inicio</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'about' }" class="block px-4 py-1 md:p-2 lg:px-4 text-teal-500 text-2xl hover:underline hover:text-teal-700">Nosotros</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'archive' }" class="block px-4 py-1 md:p-2 lg:px-4 text-teal-500 text-2xl hover:underline hover:text-teal-700">Archivo</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'contact' }" class="block px-4 py-1 md:p-2 lg:px-4 text-teal-500 text-2xl hover:underline hover:text-teal-700">Contacto</router-link>
            </li>
        </ul>
    </div>
</template>
