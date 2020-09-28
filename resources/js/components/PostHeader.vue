<template>
    <div>
        <div class="flex justify-between">
            <div v-text="post.published_date + ' / owner'"></div>
            <router-link :to="{ name: 'category_posts', params: { category: post.category.url } }" class="bg-teal-400 text-white px-2 py-1" v-text="post.category.name"></router-link>
        </div>
        <h1 class="text-3xl" v-text="post.title"></h1>
    </div>
</template>
<script>
    export default {
        props: ['post']
    }
</script>
