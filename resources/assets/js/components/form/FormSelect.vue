<template>
  <div class="select">
    <select v-model="selected">
      <option disabled :value="0">Select User type</option>
      <option v-if="hasChoices" 
        v-for="choice in choices" :key="choice.id"
        :value="choice.id"
        v-text="choice.text" >
      </option>
    </select>
  </div>
</template>

<script>
export default {
  name: 'select',

  data() {
    return {
      selected: 0
    };
  },

  computed: {
    hasChoices() {
      return Object.keys(this.choices).length;
    }
  },

  props: {
    choices: {
      type: Object,
      required: true
    }
  }
}
</script>
