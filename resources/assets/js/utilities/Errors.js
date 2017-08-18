class Errors {
  constructor() {
    this.errors = {}
  }


  get(field) {
    if(this.errors[field] instanceof Array) {
      return this.errors[field][0];
    } else if(this.errors[field]) {
      return this.errors[field];
    }
  }


  has(field) {
    return _.has(this.errors, field);
  }


  any() {
    return ! _.isEmpty(this.errors);
  }

  
  record(errors) {
    this.errors = errors;
  }

  
  clear(field) {
    if(field) {
      delete this.errors[field];
      return;
    }

    this.errors = {};
  }
  
}


export default Errors;