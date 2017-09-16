import VueRouter from 'vue-router';
import { requireGuest, requireRegistrar } from '../utilities/auth/Auth.js';
import { registrar } from './registrar.js';


const routes = [
    {
      path: '/',
      name: 'welcome',
      component: require('../views/welcome/index.vue')
    },
    
    {
      path: '/login',
      name: 'login',
      beforeEnter: requireGuest,
      component: require('../views/auth/login.vue')
    },
    {
      path: '/registrar',
      name: 'registrar',
      component: require('../views/registrar/registrar.vue'),
      beforeEnter: requireRegistrar,
      children: registrar
    }
    
];


const router = new VueRouter({
    routes
});


export default router;
