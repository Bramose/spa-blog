<template>
    <div>
        <div class="w-3/4 mx-4 mx-auto flex bg-white shadow-lg rounded-lg mb-10" v-for="post in posts" :key="post.id">
            <div class="flex flex-col items-start p-12">
                <div>
                    <post-header :post="post"></post-header>
                    <div class="w-full border-solid border border-gray-400 my-12"></div>
                    <p class="mb-5" v-text="post.excerpt"></p>
                    <router-link :to="{ name: 'post_show', params: { url: post.url } }" class="text-teal-400 uppercase">Leer más</router-link>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['category'],
        data() {
            return {
                posts: {}
            };
        },
        mounted() {
            axios.get(`/api/categorias/${this.category}`).then(response => {
                this.posts = (response.data.length!==1) ? response.data.data : response.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
