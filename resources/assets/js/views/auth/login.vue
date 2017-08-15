<template lang="html">
  <div class="container">
    <form method="POST" @submit.prevent="login">

      <div class="form-group row">
        <input
          type="email"
          name="username"
          placeholder="Username"
          v-model="username">
      </div>
      
      <div class="form-group row">
        <input
          type="password"
          name="password"
          placeholder="Password"
          v-model="password">
      </div>

      <div class="form-group row">
        <button
          class="btn btn-primary"
          type="submit"
          name="login">
            Login
        </button>
      </div>
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
      const loginCredentials = this._data;


      axios.post('/login', loginCredentials)
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

<style lang="scss">
</style>
