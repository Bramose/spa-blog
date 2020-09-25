<template>
    <div>
        <div class="w-3/4 mx-4 mx-auto flex bg-white shadow-lg rounded-lg mb-10" v-for="post in posts" :key="post.id">
            <div class="flex flex-col items-start p-12">
                <div>
                    <div class="flex justify-between">
                        <div v-text="post.published_date + ' / owner'"></div>
                        <div class="bg-teal-400 text-white px-2 py-1">Watch</div>
                    </div>
                    <h1 class="text-3xl" v-text="post.title"></h1>
                    <!-- <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat autem veniam dicta nihil. Dolore, expedita! Dignissimos, perferendis porro ab aspernatur modi consequuntur suscipit maxime nobis a ullam eius, eum perspiciatis?</p> -->
                    <div class="w-full border-solid border border-gray-400 my-12"></div>
                    <p class="mb-5" v-text="post.excerpt"></p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                posts: []
            };
        },
        mounted() {
            axios.get('/api/posts').then(response => {
                this.posts = response.data;
                console.log(this.posts);
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
