import VueRouter from 'vue-router';



const routes = [
    {
        path: '/',
        component: require('./components/Example.vue')
    }
];


const router = new VueRouter({
    routes
});

export default router;
