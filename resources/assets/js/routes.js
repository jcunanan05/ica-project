import VueRouter from 'vue-router';



const routes = [
    {
        path: '/',
        component: require('./views/welcome/index.vue')
    },
    {
      path: '/login',
      component: require('./views/auth/login.vue')
    }
];


const router = new VueRouter({
    routes
});

export default router;
