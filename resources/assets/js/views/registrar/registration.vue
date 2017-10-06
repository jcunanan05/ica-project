<template>
  <section class="section">

    <h1 class="title">Users</h1>

    <app-button @click="newUserModalIsVisible = true">
      <icon class="fa-plus" />
    </app-button>

    <new-user-modal :show-modal="newUserModalIsVisible"
      @success="newUserModalIsVisible = false"
      @close="newUserModalIsVisible = false" />


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
import '../../components/Components.js';
import Form from '../../utilities/Form.js';
import UserTable from '../../utilities/table/UserTable.js';
import newUserModal from './registration/newUserModal.vue';



export default {
  name: 'registration',

  components: {
    'new-user-modal': newUserModal
  },

  data() {
    return {
      newUserModalIsVisible: false,

      userTable: new UserTable({})
    };
  },

  methods: {
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