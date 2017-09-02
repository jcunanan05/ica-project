class User {
  constructor() {
    this.info = {};
  }


  setInfo(info) {
    this.info = info;
  }


  getInfo() {
    return this.info;
  }

  isEmpty() {
    return _.isEmpty(this.getInfo());
  }

  
  getAuthenticated() {
    return new Promise ((resolve, reject) => {
      axios.get('/api/auth/user')
        .then(response => resolve(response.data))
        .catch(errors => reject(errors.response.data));
    });
  }


}

export default User;