<template lang="html">
  <div class="container-fluid">

    <form method="POST" 
      @submit.prevent="auth.login" 
      @keydown="auth.errors.clear($event.target.name), auth.form.setSubmitDisabled(auth.errors.any())" >

      <div class="form-group">
        <input
          :class="{'form-control': true,'is-invalid':auth.errors.has('email')}"
          type="email"
          name="email"
          placeholder="email"
          v-model="auth.form.email" >

          <div class="invalid-feedback" v-if="auth.errors.has('email')">
            {{ auth.errors.get('email') }}
          </div>
      </div>
      

      <div class="form-group">
        <input
          :class="{'form-control': true,'is-invalid': auth.errors.has('password')}"
          type="password"
          name="password"
          placeholder="Password"
          v-model="auth.form.password" >

          <div class="invalid-feedback" v-if="auth.errors.has('password')">
            {{ auth.errors.get('password') }}
          </div>
      </div>


      <div class="form-group">
        <button
          class="btn btn-primary"
          type="submit"
          name="login"
          :disabled="auth.form.submitDisabled" >
            <span v-if="auth.form.isLoading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
            Login
        </button>
      </div>

    </form>
  </div>
</template>

<script>
import auth from '../../utilities/auth/Auth.js';


export default {
  name: 'loginTest',

  data: () => ({
    auth
  })
}
</script>