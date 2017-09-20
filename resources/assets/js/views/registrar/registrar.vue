<template>
  <div class="container is-fluid">
    <div class="columns">
      <div class="column is-2">
        <a href="#/registrar/dashboard">Dashboard</a>
        <a href="#/registrar/registration">Registration</a>
        <a href="#/registrar/courses">Courses</a>
        <a href="#/registrar/reports">Reports</a>
      </div>


      <div class="column is-10">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>



<script>
import Vue from 'vue';


  export default {

  }

Vue.component('nav-link', {
  template: `
    <a :href="uri" class="list-group-item list-group-item-action">{{ text }}</a>
  `,
  props: ['uri', 'text', 'role']
})

</script>

