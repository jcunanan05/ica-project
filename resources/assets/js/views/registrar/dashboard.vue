<template>
  <div class="container-fluid">
    <div class="row">
      <div class="card bg-light mb-3" style="max-width: 17rem;">
  <div class="card-header">Admin</div>
  <div class="card-body">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
        
      </div>
    </div>
  </div>
</template>



<script>
  export default {

  }
//  Vue.component('navbar-link', {
//   template: `
//     <a :href="uri" class="nav-item nav-link color-font" :role="role" >{{ text }}</a>
//   `,
//   props: ['uri', 'text', 'role']
// })

</script>

