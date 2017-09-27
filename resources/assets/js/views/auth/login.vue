<template lang="html">
  <section class="section">
    <div class="container">
      <form method="POST" 
        @submit.prevent="login" 
        @keydown="auth.errors.clear($event.target.name), auth.form.setSubmitDisabled(auth.errors.any())" >
        
        <h1 class="title">
          Login
        </h1>

        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input 
              class="input" 
              type="email" 
              name="email"
              placeholder="Enter Email..."
              v-model="auth.form.email" >

            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>

          <p class="help is-danger" v-if="auth.errors.has('email')">
            {{ auth.errors.get('email') }}
          </p>
        </div>

        <div class="field">
          <label class="label">Password</label>
          <div class="control">
            <input 
              class="input" 
              type="password" 
              name="password"
              placeholder="Enter password..."
              v-model="auth.form.password" >
          </div>

          <p class="help is-danger" v-if="auth.errors.has('password')">
            {{ auth.errors.get('password') }}
          </p>
        </div>


        <div class="field is-grouped">
          <div class="control">
            <app-button 
              class="is-primary"
              type="submit"
              name="login"
              :disabled="auth.form.submitDisabled" >
              <icon class="fa-circle-o-notch" v-if="auth.form.isLoading">&nbsp</icon>  
              Submit
            </app-button>
          </div>
        </div>
      </form>
    </div>
  </section>
</template>

<script>
import auth from '../../utilities/auth/Auth.js';
import Button from '../../components/Button.vue';
import '../../components/icons/Icons.js';


export default {
  name: 'login',

  components: {
    'app-button': Button
  },

  data: () => ({
    auth
  }),

  methods: {
    login() {
      this.auth.login()
        .then(response => {
          this.redirectTo(this.auth.user.role.name);
        })
        .catch(errors => {});
    },

    redirectTo(routeName) {
      this.$router.push({ path: '/' + routeName });
    }

  }
}
</script>