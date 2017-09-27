<template>
  <div class="container is-fluid">
    <div class="columns">
        <div class="column is-2">
          <aside class="menu ">
            <p class="menu-label">
              Management
            </p>
            <ul class="menu-list">
             
              <nav-link uri="#/registrar/dashboard" text="Dashboard"/>
              <nav-link uri="#/registrar/registration" text="Registration"/>
              <nav-link uri="#/registrar/courses" text="Courses"/>
              <nav-link uri="#/registrar/comprehensive-subject" text="Comprehensive Subjects"/>
              <ul class="menu-list">
                <li>
                  <ul>
                    <nav-link uri="#/registrar/comprehensive-subject" text="Assign Subject"/>
                    <nav-link uri="#/registrar/comprehensive-subject" text="Learning Resources"/>
                  </ul>
                </li>
              </ul>
              <nav-link uri="#/registrar/reports" text="Reports"/>
            </ul>
          </aside>
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
    <li><a :href="uri">{{ text }}</a></li>
  `,
  props: ['uri', 'text', 'role']
})

</script>

