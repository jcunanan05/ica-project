let modalConfig = {
  props: {
    showModal: {
      type: Boolean,
      default: false
    }
  },

  methods: {
    closeModal() {
      this.$emit('close');
    }
  }
};

export { modalConfig };