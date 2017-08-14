<template lang="html">
  <div>
    <form method="POST" @submit.prevent="login">
      <input
        type="text"
        name="username"
        placeholder="Username"
        v-model="username">
      <input
        type="password"
        name="password"
        placeholder="Password"
        v-model="password">
        <button
          type="submit"
          name="login">
            Login
        </button>
    </form>

    <h1 v-if="successMessage">{{ successMessage }}</h1>
  </div>
</template>

<script>
export default {
  name: 'login',
  data () {
    return {
      username: '',
      password: '',
      successMessage: ''
    }
  },
  methods: {
    flashSuccess (successMessage){
      this.successMessage = successMessage;
    },

    login() {
      axios.post('/login',{})
        .then(response => {
          this.flashSuccess(response.data.success);
        })
        .catch((error) => {
          console.log(error);
        });
    }
  }
}
</script>

<style lang="css">
</style>
