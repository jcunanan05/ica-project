<template>
  <modal :showModal="showModal">
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title" v-text="title"></p>
        
        <button class="delete" 
          aria-label="close"
          @click="closeModal()" ></button>
      </header>
      
      <section class="modal-card-body">
        <slot name="body">
          Default Body
        </slot>
      </section>

      <footer class="modal-card-foot">
        <slot name="footer">
          <app-button class="is-success">Save changes</app-button>
        </slot>
      </footer>
    </div>
  </modal>
</template>

<script>
import './Modals.js';
import { modalConfig } from './modalConfig';
import '../../components/button/Buttons.js';

export default {
  name: 'modal-card',

  props: {
    title: {
      type: String,
      default: 'Modal Title'
    },

    showModal: modalConfig.props.showModal
  },

  methods: {
    closeModal: modalConfig.methods.closeModal
  }
}
</script>