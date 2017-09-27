<template>
  <div class="container is-fluid">
    <div class="columns">
      <div class="column is-2">
        <aside class="menu ">
          <p class="menu-label">
            Management
          </p>
          <ul class="menu-list">
           
            <nav-link uri="#/registrar/dashboard" text="Learning Resources"/>
              <ul class="menu-list">
                <li>
                  <ul>
                    <nav-link uri="#/registrar/comprehensive-subject" text="Quiz"/>
                    <nav-link uri="#/registrar/comprehensive-subject" text="Exam"/>
                  </ul>
                </li>
              </ul>
            <nav-link uri="#/registrar/registration" text="Reports"/>
            <nav-link uri="#/registrar/courses" text="Courses"/>
            <nav-link uri="#/registrar/comprehensive-subject" text="Account Setting"/>
            
          </ul>
        </aside>
      </div>
      
      

      <router-view></router-view>
    </div>
  </div>
</template>


</template>


<script>
  export default {

  }



</script>