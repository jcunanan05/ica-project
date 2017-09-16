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
        .then(response => resolve(response.data))
        .catch(errors => reject(errors.response.data));
    });
  }


  isLoggedIn() {
    if(_.isEmpty(this.user)) {
      //one time fetch of user data
      if(! this.isFetched) {
        this.getLogin()
          .then(response => {
            this.setUser(response.user);
            return true;
          })
          .catch(errors => {
            console.log(errors);
            return false;
          });
      }
    } else {
      return true;
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
  if(auth.isLoggedIn()) {
    next();
  } else {
    next({
      name: 'welcome'
    });
  }
};


function requireGuest(to, from, next) {
  if(! auth.isLoggedIn()) {
    next();
  } else {
    next({
      name: 'welcome'
    });
  }
};


function requireRegistrar(to, from, next) {
  if(auth.user.role.name === 'registrar') {
    next();
  } else {
    next({
      name: 'welcome'
    });
  }
}


export { requireAuth, requireGuest, requireRegistrar };


export default auth;
