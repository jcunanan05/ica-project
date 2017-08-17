<template lang="html">
  <div class="container-fluid">

    <form method="POST" @submit.prevent="login">
      <div class="form-group">
        <input
          type="email"
          name="email"
          placeholder="email"
          v-model="email">
      </div>
      

      <div class="form-group">
        <input
          type="password"
          name="password"
          placeholder="Password"
          v-model="password">
      </div>


      <div class="form-group">
        <button
          class="btn btn-primary"
          type="submit"
          name="login">
            Login
        </button>
      </div>
    </form>

  </div>
</template>

<script>
export default {
  name: 'login',

  data () {
    return {
      email: '',
      password: ''
    }
  },

  methods: {
    login() {
      axios.post('/api/login', {
        email: this.email,
        password: this.password
      })
        .then(response => {
          console.log(response);
        })
        .catch(errors => {
          console.log(errors);
        });
    }
  }
}
</script>
