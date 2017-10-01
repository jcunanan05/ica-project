<template>
  <div class="columns">
    <div class="column is-2">

      <app-menu>
        <menu-label text="Admnistration" />
        <menu-list>
          <menu-item uri="Dashboard" text="Dashboard" />
          <menu-item uri="Registration" text="Registration" />
          <menu-item uri="Courses" text="Courses" />
          <menu-label text="Learning" />
          <menu-dropdown uri="ica-subject" text="ICA Subject">
            <menu-item uri="" text="Assign Subject" />
            <menu-item uri="" text="Activity Feed" />
          </menu-dropdown>
        </menu-list>
        <menu-label text="Management" />
        <menu-list>
          <menu-item uri="Reports" text="Reports" />
          <menu-item uri="Account-setting" text="Account Setting" />
        </menu-list>
      </app-menu>

    </div>
    <div class="column is-10">
      <router-view></router-view>
    </div>
  </div>
</template>



<script>
import Vue from 'vue';
import '../../components/menu/Menu.js'

export default {

}

Vue.component('nav-link', {
  template: `
    <li><a :href="uri">{{ text }}</a></li>
  `,
  props: ['uri', 'text', 'role']
})

</script>

