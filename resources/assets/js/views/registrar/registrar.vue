<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 d-sm-block"   >
        <div class="list-group">


            <nav-link uri="#/registrar/dashboard" text="Dashboard"/>
            <nav-link uri="#/registrar/registration" text="Registration"/>
            <nav-link uri="#/registrar/courses" text="Courses"/>
            <nav-link uri="#/registrar/reports" text="Reports"/>


          
        </div>
      </div>

      

      <router-view></router-view>
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

