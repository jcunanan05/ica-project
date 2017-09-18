import Form from '../Form.js';
import User from '../../models/User.js';


class Auth {
  constructor() {
    this.form = new Form({
      email: '',
      password: ''
    });

    this.errors = this.form.errors;

    this.user = {};

    this.isFetched = false;
  }


  setUser(info) {
    this.user = info;
  }

  
  getUser() {
    return this.user;
  }


  setFetched(bool) {
    this.isFetched = bool;
  }


  getLogin() {
    return new Promise ((resolve, reject) => {
      this.setFetched(true);

      axios.get('/api/auth/user')
        .then(response => {
          this.setUser(response.data.user);

          resolve(response.data)
        })
        .catch(errors => {
          console.log(errors);
          reject(errors.response.data);
        });
    });
  }


  isLoggedIn() {
    if (! this.isFetched) {
      this.getLogin()
        .then(response => {
          this.setFetched(true);

          return true;
        })
        .catch(errors => {

          return false;
        });
    } else {
      return ! _.isEmpty(this.user);
    }
  }


  login() {
    return new Promise((resolve, reject) => {
      this.form.submit('post', '/api/login')
        .then(response => {
          console.log(response);
    
          this.setUser(response.user);

          resolve(response.user);
        })
        .catch(errors => {
          console.log(errors);

          reject(errors);
        });
    });
  }

  
  logout() {
    
  }
}
// end of Auth class

var auth = new Auth();

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


export default auth;
