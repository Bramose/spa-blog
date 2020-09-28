<template>
    <div>
        <post-list-item class="w-3/4 mx-4 mx-auto flex bg-white shadow-lg rounded-lg mb-10" v-for="post in items" :key="post.id" :post="post"></post-list-item>
    </div>
</template>
<script>
    export default {
        props: ['items']
    }
</script>
