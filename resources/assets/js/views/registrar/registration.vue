<template>
  <section class="section">
    <h1 class="title">Users</h1>


    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name:</th>
          <th>Index No.</th>
          <th>Email</th>
          <th>User Type</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th> 
        </tr>
      </thead>

      <tbody v-if="! userIsEmpty">
        <tr v-for="user in users" :key="user.id">
          <td>{{ user.id }}</td>
          <td>{{ user['first_name'] + ' ' + user['middle_name'] + ' ' + user['last_name'] }}</td>
          <td>{{ user['school_index_no'] }}</td>
          <td>{{ user.email }}</td>
          <td>{{ user.role.name }}</td>
          <td>{{ user['is_active'] }}</td>
          <td>
            <button class="button is-success">
              <span class="fa fa-pencil"></span>
            </button>
          </td>
          <td>
            <button class="button is-danger">
              <span class="fa fa-trash"></span>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

  </section>
</template>

<script>
import Form from '../../utilities/Form.js';
import Modal from '../../components/Modal.vue';


export default {
  name: 'registration',

  components: {
    'modal': Modal
  },

  data: () => ({
    dropdownToggled: false,
    newUser: new Form({
      firstName: 'Jonathan',
      middleName: 'Albert',
      lastName: 'Cunanan',
      schoolIndexNo: '1234-1234-1234',
      email: 'asdf@example.com',
      userType: ''
    }),
    users: [],

    showModal: false
  }),

  computed: {
    userIsEmpty() {
      if (_.isEmpty(this.users)) {
        return true;
      }

      return false;
    }
  },

  methods: {
    toggleDropdown() {
      this.dropdownToggled = ! this.dropdownToggled;
    },

    fetchUsers() {
      axios.get('/api/users')
        .then(response => {
          this.users = response.data.data;
        })
        .catch(errors => console.log('errors on fetchUsers. error: ' + errors));
    }
  },

  mounted() {
    this.fetchUsers();
  },

}
</script>