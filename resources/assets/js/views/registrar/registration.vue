<template>
  <section class="section">
    <h1 class="title">Users</h1>


    <app-table :headers="userTable.headers">
      <template slot="body" 
        v-if="! userTable.dataIsEmpty()" >
        <tr v-for="user in userTable.data" :key="user.id">
          <td v-text="user.id"></td>
          <td v-text="
            user['first_name'] + ' ' + user['middle_name'] + ' ' + user['last_name']" >
          </td>
          <td v-text="user['school_index_no']"></td>
          <td v-text="user.email"></td>
          <td v-text="user.role.name"></td>
          <td v-text="user['is_active']"></td>
          <td>
            <edit-button otherClass="is-primary"></edit-button>
          </td>
          <td>
            <delete-button otherClass="is-danger"></delete-button>
          </td>
        </tr>
      </template>
    </app-table>
  </section>
</template>

<script>
import Form from '../../utilities/Form.js';
import Table from '../../components/Table.vue';
import UserTable from '../../utilities/table/UserTable.js';
import { EditButton, DeleteButton } from '../../components/button/Buttons.js';


export default {
  name: 'registration',

  components: {
    'app-table': Table,
    'edit-button': EditButton,
    'delete-button': DeleteButton
  },

  data: () => ({
    newUser: new Form({
      firstName: 'Jonathan',
      middleName: 'Albert',
      lastName: 'Cunanan',
      schoolIndexNo: '1234-1234-1234',
      email: 'asdf@example.com',
      userType: ''
    }),

    userTable: new UserTable({}),
  }),

  mounted() {
    this.userTable.fetchData('/api/users')
      .then(response => {

      })
      .catch(errors => {

      });
  },

}
</script>