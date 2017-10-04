<template>
  <form method="POST"
    @keyup="
      form.errors.clear($event.target.name), 
      form.setSubmitDisabled(form.errors.any())
    " 
    @submit.prevent="submit()" >

    <modal-card title="Add New User"
      :show-modal="showModal"
      @close="$emit('close')" >

      
      <!-- card body -->
      <template slot="body">
        <field>
          <p slot="label">First Name</p>
          <input slot="control" 
            class="input"
            :class="{ 'is-danger': form.errors.has('firstName') }"
            type="text" 
            name="firstName"
            v-model="form.firstName" 
            placeholder="Enter First Name" >

          <help class="is-danger"
            v-if="form.errors.has('firstName')"
            v-text="form.errors.get('firstName')" >
          </help>
        </field>


        <field>
          <p slot="label">Middle Name</p>
          <input slot="control" 
            class="input"
            :class="{ 'is-danger': form.errors.has('middleName') }"
            type="text" 
            name="middleName"
            v-model="form.middleName" 
            placeholder="Enter Middle Name" >

          <help class="is-danger"
            v-if="form.errors.has('middleName')"
            v-text="form.errors.get('middleName')" >
          </help>
        </field>


        <field>
          <p slot="label">Last Name</p>
          <input slot="control" 
            class="input"
            :class="{ 'is-danger': form.errors.has('lastName') }"
            type="text" 
            name="lastName"
            v-model="form.lastName" 
            placeholder="Enter Last Name" >

          <help class="is-danger"
            v-if="form.errors.has('lastName')"
            v-text="form.errors.get('lastName')" >
          </help>
        </field>


        <field>
          <p slot="label">Email</p>
          <input slot="control" 
            class="input"
            :class="{ 'is-danger': form.errors.has('email') }"
            type="email" 
            name="email"
            v-model="form.email" 
            placeholder="Enter Email" >

          <help class="is-danger"
            v-if="form.errors.has('email')"
            v-text="form.errors.get('email')" >
          </help>
        </field>


        <field>
          <p slot="label">User Type</p>
          <form-select slot="control"
            :choices="choices"></form-select>
        </field>            
      </template>


      <!-- submit button/footer -->
      <template slot="footer">
        <app-button class="is-primary"
          type="submit"
          name="newUser"
          :disabled="form.submitDisabled" >
          <icon class="fa-circle-o-notch" v-if="form.isLoading">&nbsp</icon>
          Submit
        </app-button>
      </template>
    </modal-card>
  </form>
</template>

<script>
import '../../../components/Components.js';
import { modalConfig } from '../../../components/modal/modalConfig.js';
import Form from '../../../utilities/Form.js';

export default {
  name: 'newUserModal',

  data() {
    return {
      form: new Form({
        firstName: '',
        middleName: '',
        lastName: '',
        email: ''
      }),

      choices: {
        0: { id: 1, text: 'registrar' }
      }
    };
  },

  props: {
    showModal: modalConfig.props.showModal
  },


  methods: {
    submit() {
      this.form.submit('post', '/api/users/store')
        .then(response => {
          this.$emit('success');

          
        })
        .catch(errors => {

        });
    }
  }
}
</script>