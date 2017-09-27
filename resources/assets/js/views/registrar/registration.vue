<template>
  <main class="column is-10 box" style="margin-top:20px"role="main">
    <h1 class="title is-2">Registration</h1>

    <div class="box">
      <label class="label">Name</label>
      <!-- Name -->
      <div class="columns">
        <div class="column is-3">
          <div class="field">
            <input 
            type="text" 
            class="input is-info" 
            placeholder="First name"
            v-model="newUser.firstName" >
          </div>
        </div>
          
        <div class="column is-3">
          <div class="field">
            <input 
            type="text" 
            class="input is-info" 
            placeholder="Middle name"
            v-model="newUser.middleName" >
            
          </div>
          
        </div>
        <div class="column is-3">
          <div class="field">
            <input 
            type="text" 
            class="input is-info" 
            placeholder="Last name"
            v-model="newUser.lastName" >
          </div>
        </div>

      </div> 

      <!-- input index # -->
      <label class="label">School Index No</label>
        <div class="column is-3">
          <div class="field">
            <input 
            type="text" 
            class="input is-info" 
            placeholder="1234-1234-4321" 
            v-model="newUser.schoolIndexNo" >
          </div>
        </div>
      

      <!-- input email -->
      
      <p>
        <label class="label">Email</label>
      </p>
      <div class="column is-3">
        <div class="field">
          <input 
          type="email" 
          class="input is-info" 
          placeholder="Enter Email"
          v-model="newUser.email" >
        </div>
      </div>
      


      <!-- dropdown user type -->
      <label class="label">User Type</label>
        <div class="field" >
          <p class="control">
            <span class="select is-info">
            <select v-model="newUser.userType" >
              <option value="student">Student</option>
              <option value="registrar">Registrar</option>
            </select>
            </span>
          </p>
        </div>
      
      <button class="button is-info is-outlined">Save</button>
    </div>
      




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
                      <button class="btn btn-secondary btn-xs text-center">
                        <span class="fa fa-pencil"></span>
                      </button>
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

export default {
  name: 'registration',

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
    users: []
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


