<template lang="html">
  <div class="container-fluid">

    <form method="POST" @submit.prevent="login">
      <div class="form-group">
        <input
          :class="{'form-control': true,'is-invalid': errors.has('email')}"
          type="email"
          name="email"
          placeholder="email"
          v-model="email" 
          @keydown="clearError('email')" >

          <div class="invalid-feedback" v-if="errors.has('email')">
            {{ errors.get('email') }}
          </div>
      </div>
      

      <div class="form-group">
        <input
          :class="{'form-control': true,'is-invalid': errors.has('password')}"
          type="password"
          name="password"
          placeholder="Password"
          v-model="password"
          @keydown="clearError('password')" >

          <div class="invalid-feedback" v-if="errors.has('password')">
            {{ errors.get('password') }}
          </div>
      </div>


      <div class="form-group">
        <button
          class="btn btn-primary"
          type="submit"
          name="login" >
            Login
        </button>
      </div>
    </form>

  </div>
</template>

<script>
import Errors from '../../utilities/Errors.js';

export default {
  name: 'login',

  data () {
    return {
      email: '',
      password: '',
      errors: new Errors()
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
          this.errors.record(errors.response.data);
        });
    },

    clearError(field) {
      if(this.errors.has(field)) {
        this.errors.clear(field);
      }
    }

  }
}
</script>
