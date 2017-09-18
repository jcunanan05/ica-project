<template>
  <main class="col-sm-9 pt-3 card" role="main">
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
          <input type="text" class="form-control" placeholder="1234-1234-4321">
        </div>
      </div>

      <!-- input email -->
      <div class="form-group ml-2">
        <p>
          <strong>Email</strong>
        </p>
        <div class="col-md-3 ml-2">
          <input type="email" class="form-control" placeholder="Enter Email">
        </div>
      </div>

      <!-- dropdown user type -->
      <div class="row ml-5">
        <div class="btn-group">
          <button @click="toggleDropdown()" class="btn btn-secondary btn-sm dropdown-toggle" :class="{ show: dropdownToggled }" type="button">
            User Type
          </button>
          <div class="dropdown-menu" :class="{ show: dropdownToggled }">
            <p class="dropdown-item">Lecturer</p>
            <p class="dropdown-item">Student</p>
          </div>
        </div>

        <!-- SUBMIT BTN -->
        <button type="submit" class="btn btn-info ml-5">Submit</button>
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
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Pedro</td>
                    <td>1234-3214-4321</td>
                    <td>email@email.com</td>
                    <td>Student</td>
                    <td>Active</td>
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
      lastName: 'Cunanan'
    })
  }),

  methods: {
    toggleDropdown() {
      this.dropdownToggled = ! this.dropdownToggled;
    }  
  }

}
</script>