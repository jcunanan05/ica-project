<template>
  <table class="table">
    <thead>
      <template v-if="! headersIsEmpty">
        <tr>
          <th v-for="(header, id) in headers" :key="id">
            {{ header }}
          </th>
        </tr>
      </template>
    </thead>

    <tfoot v-if="showFooter">
      <slot name="footer"></slot>
    </tfoot>

    <tbody>
      <slot name="body"></slot>
    </tbody>
  </table>
</template>

<script>
export default {
  name: 'app-table',

  props: {
    headers: {
      type: Array,
      default: []
    },

    showFooter: {
      type: Boolean,
      default: false
    },

    data: {

    }
  },

  computed: {
    headersIsEmpty() {
      return _.isEmpty(this.headers);
    }
  }
}
</script>