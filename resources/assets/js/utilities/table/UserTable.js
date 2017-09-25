import Table from './Table.js';

class UserTable extends Table {
  constructor(tableData) {
    super();

    this.setHeaders([
      '#', 'Name:', 'Index No.',
      'Email', 'User Type', 'Status',
      'Edit', 'Delete',
    ]);

    this.setTableData(tableData);
  }
}

export default UserTable;