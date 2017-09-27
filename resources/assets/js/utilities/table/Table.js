import Errors from '../Errors.js';

class Table {
  constructor() {
    this.headers = [];
    this.data = {};

    this.errors = new Errors();
  }


  getHeaders() {
    return this.headers;
  }


  setHeaders(headers) {
    this.headers = headers;
  }


  getTableData() {
    return this.data;
  }


  setTableData(data) {
    this.data = data;
  }


  dataIsEmpty() {
    return _.isEmpty(this.data);
  }


  fetchData(uri) {
    return new Promise((resolve, reject) => {
      axios.get(uri)
        .then(response => {
          this.onSuccessFetchData(response.data.data);

          resolve(response.data.data);
        })
        .catch(errors => {
          console.log('errors on fetchData on Table.js. error: ' + errors.response.data.error);
          
          //not final code to be back when i thought of better error handling
          reject(errors.response.data);
        });
    });
  }


  onSuccessFetchData(data) {
    this.setTableData(data);
  }
}

export default Table;