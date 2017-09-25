import Button from '../Button.vue';

let buttonConfig = {
  components: {
    'app-button': Button
  },

  props: {
    otherClass: {
      type: String,
      default: ''
    }
  }
}

export { buttonConfig };