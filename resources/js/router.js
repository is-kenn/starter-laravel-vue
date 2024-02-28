import { createRouter, createWebHistory } from "vue-router";

// SAMPLE
const Home = { template: '<h1>Home</h1>'};
const About = { template: '<h1>About</h1>'};

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/about',
        name: 'About',
        component: About,
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'Not Found',
        component: () => import('@/Pages/NotFound.vue'),
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
