<template>
  <div class="field">
    <label class="label">
      <slot name="label">Label</slot>
    </label>

    <div class="control"
      :class="{ 
        'has-icons-left': hasIconsLeft, 
        'has-icons-right': hasIconsRight 
      }" >
      <slot name="control">Control</slot>

      <slot name="icons" v-if="hasIconsLeft || hasIconsRight"></slot>
    </div>

    <slot></slot>
  </div>
</template>

<script>
export default {
  name: 'field',

  props: {
    hasIconsLeft: {
      type: Boolean,
      default: false
    },

    hasIconsRight: {
      type: Boolean,
      default: false
    }
  }
}
</script>