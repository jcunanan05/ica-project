<template>
  <app-button
    @click="$emit('click')" >
    <icon class="fa-trash" />
    <slot></slot>
  </app-button>
</template>

<script>
import { buttonConfig } from './buttonConfig.js';
import '../icons/Icons.js';


export default {
  name: 'edit-button',

  components: buttonConfig.components
}
</script>