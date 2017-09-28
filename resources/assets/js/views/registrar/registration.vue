<template>
  <section class="section">

    <h1 class="title">Users</h1>

    <app-button @click="showNewUserModal()">
      <icon class="fa-plus" />
    </app-button>

    <modal-card :showModal="newUserModalIsVisible"
      @close="closeNewUserModal()"></modal-card>

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
            <edit-button class="is-primary"></edit-button>
          </td>
          <td>
            <delete-button class="is-danger"></delete-button>
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
import '../../components/button/Buttons.js';
import '../../components/icons/Icons.js';
import '../../components/modal/Modals.js';


export default {
  name: 'registration',

  components: {
    'app-table': Table
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

    newUserModalIsVisible: false
  }),

  methods: {
    showNewUserModal() {
      this.newUserModalIsVisible = true;
    },

    closeNewUserModal() {
      this.newUserModalIsVisible = false;
    }
  },

  mounted() {
    this.userTable.fetchData('/api/users')
      .then(response => {

      })
      .catch(errors => {

      });
  },

}
</script>