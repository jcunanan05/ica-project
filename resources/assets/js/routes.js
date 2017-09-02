import VueRouter from 'vue-router';


const routes = [
    {
        path: '/',
        name: 'welcome',
        component: require('./views/welcome/index.vue')
    },
    
    {
      path: '/login',
      name: 'login',
      component: require('./views/auth/login.vue')
    }
];


const router = new VueRouter({
    routes
});

export default router;
