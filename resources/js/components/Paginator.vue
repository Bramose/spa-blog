<template>
    <div>
        <component :is="componentName" :items="items"></component>
        <pagination-links :pagination="pagination"></pagination-links>
    </div>
</template>
<script>
    export default {
        props: ['url', 'componentName'],
        data() {
            return {
                pagination: {},
                items: []
            };
        },
        mounted() {
            this.loadData();
        },
        methods: {
            loadData() {
                return axios.get(`${this.url}?page=${this.$route.query.page || 1}`).then(response => {
                    this.items = response.data.data;
                    this.pagination = response.data;
                    delete this.items.data;
                }).catch(error => {
                    console.log(error.response.data);
                });
            }
        },
        watch: {
            '$route'() {
                this.loadData();
            }
        }
    }
</script>
