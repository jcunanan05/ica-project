<template>
  <div class>
    <p class="heading" v-text="title"></p>

  </div>
</template>

<script>
export default {
  name: 'dash-item',
  props: {
    title: {
      type: String,
      required: true
    }
  }
}
</script>
