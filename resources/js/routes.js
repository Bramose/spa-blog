import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './views/Home';
import Error from './views/404';
import About from './views/About';
import Archive from './views/Archive';
import Contact from './views/Contact';
import PostShow from './views/PostShow';
import CategoryPosts from './views/CategoryPosts';

const router = new VueRouter({
    mode: "history",
    routes: [{
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/nosotros',
            name: 'about',
            component: About
        },
        {
            path: '/archivo',
            name: 'archive',
            component: Archive
        },
        {
            path: '/contacto',
            name: 'contact',
            component: Contact
        },
        {
            path: '/post/:url',
            name: 'post_show',
            component: PostShow,
            props: true
        },
        {
            path: '/categoria/:category',
            name: 'category_posts',
            component: CategoryPosts,
            props: true
        },
        {
            path: '*',
            component: Error
        },
    ],
    linkExactActiveClass: 'active'
});

export default router;
