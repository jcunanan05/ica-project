import Errors from './Errors.js';

class Form {
  constructor(data) {
    this.originalData = data;

    for (let field in data) {
      this[field] = data[field];
    }

    this.errors = new Errors();

    this.submitDisabled = false;
  }


  setSubmitDisabled(isDisabled) {
    this.submitDisabled = isDisabled;
  }
  

  data() {
    let data = {};

    for(let property in this.originalData) {
      data[property] = this[property];
    }

    return data;
  }


  reset() {
    for(let field in this.originalData) {
      this[field] = '';
    }

    this.errors.clear();
  }


  submit(requestType, uri) {
    return new Promise((resolve, reject) => {
      axios[requestType](uri, this.data())
        .then(response => {
          this.onSuccess(response.data);

          resolve(response.data)
        })
        .catch(errors => {
          this.onFail(errors.response.data);

          reject(errors.response.data);
        });
    });
  }


  onFail(errors) {
    this.errors.record(errors);
  }


  onSuccess(data) {
    this.reset();
  }

}

export default Form;