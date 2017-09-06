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
  }


  setUser(info) {
    this.user = info;
  }

  
  getUser() {
    return this.user;
  }


  getLogin() {
    return new Promise ((resolve, reject) => {
      axios.get('/api/auth/user')
        .then(response => resolve(response.data))
        .catch(errors => reject(errors.response.data));
    });
  }


  isLoggedIn() {
    if(_.isEmpty(this.user)) {
      this.getLogin()
        .then(response => {
          this.setUser(response.user);
          return true;
        })
        .catch(errors => {
          console.log(errors);
          return false;
        });
    } else {
      return true;
    }
  }


  login() {
    this.form.submit('post', '/api/login')
    .then(response => {
      console.log(response);

      this.setUser(response.user);
    })
    .catch(errors => {
      console.log(errors);
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


export { requireAuth, requireGuest };


export default auth;
