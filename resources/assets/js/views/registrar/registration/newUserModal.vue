<template>
  <modal-card title="Add New User"
    :show-modal="showModal"
    @close="$emit('close')" >

    
    <!-- form body -->
    <template slot="body">
      <form method="POST"
        @keyup="
          form.errors.clear($event.target.name), 
          form.setSubmitDisabled(form.errors.any())
        " >

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
      </form>
    </template>


    <!-- submit button -->
    <template slot="footer">
      <app-button class="is-primary"
        type="submit"
        name="newUser"
        @click="submit()"
        :disabled="form.submitDisabled" >
        <icon class="fa-circle-o-notch" v-if="form.isLoading">&nbsp</icon>
        Submit
      </app-button>
    </template>
  </modal-card>
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
      })
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