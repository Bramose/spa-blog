<template>
    <div class="flex flex-col items-start p-12">
        <div>
            <post-header :post="post"></post-header>
            <!-- <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat autem veniam dicta nihil. Dolore, expedita! Dignissimos, perferendis porro ab aspernatur modi consequuntur suscipit maxime nobis a ullam eius, eum perspiciatis?</p> -->
            <div class="w-full border-solid border border-gray-400 my-12"></div>
            <p class="mb-5" v-text="post.excerpt"></p>
            <router-link :to="{ name: 'post_show', params: { url: post.url } }" class="text-teal-400 uppercase">Leer más</router-link>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['post']
    }
</script>
