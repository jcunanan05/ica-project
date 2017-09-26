<template>
  <app-link class="navbar-item" 
    @click="$emit('click')" >
    <slot></slot>
  </app-link>
</template>

<script>
import '../link/Links.js';

export default {
  name: 'navbar-item'
}
</script>

