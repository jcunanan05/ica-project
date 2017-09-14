import VueRouter from 'vue-router';
import { requireGuest } from './utilities/auth/Auth.js';


const routes = [
    {
      path: '/',
      name: 'welcome',
      component: require('./views/welcome/index.vue')
    },
    
    {
      path: '/login',
      name: 'login',
      beforeEnter: requireGuest,
      component: require('./views/auth/login.vue')
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: require('./views/registrar/dashboard.vue')
    }
    
];


const router = new VueRouter({
    routes
});


export default router;
