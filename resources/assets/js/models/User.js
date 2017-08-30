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

}

export default User;