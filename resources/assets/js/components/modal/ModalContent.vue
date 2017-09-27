<template>
  <modal>
    <div class="modal-content">
      <slot></slot>
    </div>
    <button class="modal-close is-large" 
      aria-label="close">
    </button>
  </modal>
</template>

<script>
import './Modals.js';

export default {
  name: 'modal-content'
}
</script>