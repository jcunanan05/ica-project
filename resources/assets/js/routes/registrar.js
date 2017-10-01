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
    path: 'ica-subject',
    component: require('../views/registrar/ica-subject.vue')
  },
  {
    path: 'account-setting',
    component: require('../views/registrar/account-setting.vue')
  }
];

export { registrar };