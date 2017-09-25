<template>
  <app-button 
    :otherClass="otherClass"
    @click="$emit('click')" >
    <span class="fa fa-pencil"></span>
      <slot></slot>
  </app-button>
</template>

<script>
import { buttonConfig } from './buttonConfig.js';


export default {
  name: 'edit-button',

  components: buttonConfig.components,

  props: buttonConfig.props
}
</script>

