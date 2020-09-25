import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './views/Home';
import About from './views/About';
import Archive from './views/Archive';
import Contact from './views/Contact';
import Error from './views/404';

const router = new VueRouter({
    routes: [{
            path: '/home',
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
            path: '*',
            component: Error
        }
    ],
    linkExactActiveClass: 'active'
});

export default router;
