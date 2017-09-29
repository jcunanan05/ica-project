<template>
  <modal-card title="Add New User"
    :show-modal="showModal"
    @close="$emit('close')" >

    <form slot="body">
      <field>
        <p slot="label">First Name</p>
        <input slot="control" 
          class="input is-danger"
          type="text" 
          name="firstName"
          v-model="form.firstName" 
          placeholder="Enter First Name" >

        <help class="is-danger">No asldkfj</help>
      </field>


    </form>
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
}
</script>