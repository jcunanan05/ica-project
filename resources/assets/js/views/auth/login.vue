<template lang="html">
  <div class="container-fluid">

    <form method="POST" @submit.prevent="login" @keydown="form.errors.clear($event.target.name)">
      <div class="form-group">
        <input
          :class="{'form-control': true,'is-invalid':form.errors.has('email')}"
          type="email"
          name="email"
          placeholder="email"
          v-model="form.email" >

          <div class="invalid-feedback" v-if="form.errors.has('email')">
            {{ form.errors.get('email') }}
          </div>
      </div>
      

      <div class="form-group">
        <input
          :class="{'form-control': true,'is-invalid': form.errors.has('password')}"
          type="password"
          name="password"
          placeholder="Password"
          v-model="form.password" >

          <div class="invalid-feedback" v-if="form.errors.has('password')">
            {{ form.errors.get('password') }}
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
import Form from '../../utilities/Form.js';


export default {
  name: 'login',

  data () {
    return {
      form: new Form({
        email: '',
        password: ''
      })
    }
  },

  methods: {
    login() {
      this.form.submit('post', '/api/login')
        .then(response => console.log(response))
        .catch(errors => console.log(errors));
    }

  }
}
</script>
