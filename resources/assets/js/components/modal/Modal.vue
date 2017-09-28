<template>
  <div class="modal"
    :class="{ 'is-active': showModal }">
    <div class="modal-background"></div>
    <slot></slot>
  </div>
</template>

<script>
import { modalConfig } from './modalConfig.js';

export default {
  name: 'modal',

  props: {
    showModal: modalConfig.props.showModal
  }
}
</script>