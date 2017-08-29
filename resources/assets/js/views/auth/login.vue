<template lang="html">
  <div class="container-fluid">

    <form method="POST" 
      @submit.prevent="login" 
      @keydown="form.errors.clear($event.target.name), form.setSubmitDisabled(form.errors.any())" >
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
          name="login"
          :disabled="form.submitDisabled" >
            <span v-if="isLoading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
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
      }),

      isLoading: false
    };
  },

  methods: {
    login() {
      this.form.setSubmitDisabled(true);
      this.isLoading = true;

      this.form.submit('post', '/api/login')
        .then(response => {
          console.log(response);
          this.$emit('userLoggedIn', response.user);

          this.redirectToHome();
        })
        .catch(errors => {
          console.log(errors);
          
          this.isLoading = false;
        });
    },


    redirectToHome() {
      this.$router.push({name: 'welcome'});
    }

  }
}
</script>
