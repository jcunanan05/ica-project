<template>
  <modal :showModal="showModal">
    <div class="modal-content box">
      <slot>Modal</slot>
    </div>
    <button class="modal-close is-large" 
      aria-label="close"
      @click="$emit('close')" >
    </button>
  </modal>
</template>

<script>
import './Modals.js';
import { modalConfig } from './modalConfig';

export default {
  name: 'modal-content',

  props: {
    showModal: modalConfig.props.showModal
  }
}
</script>