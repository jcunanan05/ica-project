<template>
  <div class="container is-fluid">
    <div class="columns">
      <div class="column is-2">
        <app-link href="#/registrar/dashboard">Dashboard</app-link>
        <app-link href="#/registrar/registration">Registration</app-link>
        <app-link href="#/registrar/courses">Courses</app-link>
        <app-link href="#/registrar/reports">Reports</app-link>
      </div>


      <div class="column is-10">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>



<script>
import '../../components/link/Links.js';


export default {

}
</script>