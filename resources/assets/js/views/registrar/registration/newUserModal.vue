<template>
  <modal-card title="Add New User"
    :show-modal="showModal"
    @close="$emit('close')" >

    
    <template slot="body">
      <form method="POST"
        @submit.prevent="submit()">
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

        <app-button class="is-primary"
          type="submit"
          name="newUser" >
          Submit
        </app-button>
      </form>
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
        firstName: ''
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

        })
        .catch(errors => {

        });
    }
  }
}
</script>