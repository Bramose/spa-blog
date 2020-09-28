<template>
    <div class="w-3/4 mx-4 mx-auto flex bg-white shadow-lg rounded-lg">
        <div class="flex flex-col items-start p-12">
            <div>
                <post-header :post="post"></post-header>
                <p class="text-gray-600 italic" v-text="post.excerpt"></p>
                <div class="w-full border-solid border border-gray-400 my-12"></div>
                <p class="mb-5" v-text="post.body"></p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['url'],
        data() {
            return {
                post: {
                    category: {}
                }
            };
        },
        mounted() {
            axios.get(`/api/blog/${ this.url }`).then(response => {
                this.post = response.data;
            }).catch(error => {
                console.log(error.response.data);
            });
        }
    }
</script>
