<template>
  <main class="col-lg-9 col-xs-12 pt-3 card" role="main">
    <h1 class="mb-4">Registration</h1>

    <form class="bg-light py-3">
      <div class="form-group ml-2 ">
        <p>
          <strong>Name</strong>
        </p>
        <div class="row">
          <div class="col-md-3 ml-3">
            <input 
              type="text" 
              class="form-control" 
              placeholder="First name"
              v-model="newUser.firstName" >
          </div>
          <div class="col-md-3">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Middle name"
              v-model="newUser.middleName" >
          </div>
          <div class="col-md-3">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Last name"
              v-model="newUser.lastName" >
          </div>
        </div>
      </div>

      <!-- input index # -->
      <div class="form-group ml-2">
        <p>
          <strong>School Index No</strong>
        </p>
        <div class="col-md-3 ml-2">
          <input 
            type="text" 
            class="form-control" 
            placeholder="1234-1234-4321" 
            v-model="newUser.schoolIndexNo" >
        </div>
      </div>

      <!-- input email -->
      <div class="form-group ml-2">
        <p>
          <strong>Email</strong>
        </p>
        <div class="col-md-3 ml-2">
          <input 
            type="email" 
            class="form-control" 
            placeholder="Enter Email"
            v-model="newUser.email" >
        </div>
      </div>


      <!-- dropdown user type -->
      <div class="form-group ml-2">
        <p><strong>User type</strong></p>
        <select class="form-control col-md-3 form-control-sm"
          v-model="newUser.userType" >
          <option value="student">Student</option>
          <option value="registrar">Registrar</option>
        </select>
      </div>
    </form>

    <!-- USERS -->
    <div class="col-md-12">
      <h1 class="text-dark mb-4">Users</h1>
      <div class="row">

        <!--  SEARCH -->
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-warning" type="button">Go!</button>
            </span>
          </div>
        </div>

        <!--  STATUS RADIO BTN -->
        <div class="col-md-6">
          <div class="row">
            <p class="ml-5">
              <strong>Status</strong>
            </p>
            <div class="form-check form-check-inline ml-5">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Active
              </label>

              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Deactivate
              </label>
            </div>
          </div>
        </div>

        <!-- table -->
        <div class="container-fluid my-4 ">
          <div class="row">
            <div class="col-sm-12 ">
              <table class="table table-sm table-responsive table-hover">
                <thead>
                  <tr class="bg-info text-light">
                    <th>#</th>
                    <th>Name</th>
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
                    <th scope="row" v-text="user.id"></th>
                    <td v-text="user['first_name'] + ' ' + user['middle_name'] + ' ' + user['last_name']"></td>
                    <td v-text="user['school_index_no']"></td>
                    <td v-text="user.email"></td>
                    <td v-text="user.role.name"></td>
                    <td v-text="user['is_active']"></td>
                    
                    
                    <td>
                      <button class="btn btn-secondary btn-xs text-center"
                        @click="showModal = true">

                        

                        <span class="fa fa-pencil"></span>
                      </button>

                      
                      <modal v-if="showModal" @close="showModal = false">
                        <div class="box">hello modal</div>
                      </modal>

                    </td>
                    <td>
                      <button class="btn btn-danger btn-xs">
                        <span class="fa fa-trash"></span>
                      </button>
                    </td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
        </div>

      </div>
    </div>

  </main>
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