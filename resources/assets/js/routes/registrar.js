const registrar = [
  {
    path: '',redirect: 'dashboard',
  },
  {
    path: 'dashboard',
    component: require('../views/registrar/dashboard.vue')
  },
  {
    path: 'registration',
    component: require('../views/registrar/registration.vue')
  },
  {
    path: 'courses',
    component: require('../views/registrar/courses.vue')
  },

  {
    path: 'reports',
    component: require('../views/registrar/reports.vue')
  },
  {
    path: 'comprehensive-subject',
    component: require('../views/registrar/comprehensive-subject.vue')
  }
];

export { registrar };