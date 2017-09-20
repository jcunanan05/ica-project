import auth from './Auth.js';

// for route guard
function requireAuth(to, from, next) {
  //if auth proceed
  auth.getLogin()
    .then(response => next())
    .catch(errors => next({ name: 'welcome' }));
};


function requireGuest(to, from, next) {
  //if auth then redirect to home
  auth.getLogin()
    .then(response => next({ name: 'welcome' }))
    .catch(errors => next());
};


function requireRegistrar(to, from, next) {
  auth.getLogin()
    .then(response => {
      if (auth.user.role.name === 'registrar') {
        next();
      } else {
        next({ name: 'welcome' })
      }
    })
    .catch(errors => next({ name: 'welcome' }));
}


export { requireAuth, requireGuest, requireRegistrar };