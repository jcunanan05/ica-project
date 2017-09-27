<template>
  <div class="container">
    <div class="columns">
        <div class="column is-2">
          <app-menu>
            <menu-label text="general" />
            <menu-list>
              <menu-item uri="dashboard" text="Dashboard" />
              <menu-dropdown text="ICA Subject">
                <menu-item uri="#" text="Activity Feed" />
                <menu-item uri="#" text="Assign Subject" />
              </menu-dropdown>
            </menu-list>
            <menu-label text="Administration" />
            <menu-list>
              <menu-item uri="Reports" text="Reports" />
              <menu-item uri="Reports" text="Reports" />
            </menu-list>
          </app-menu>
        </div>
        <div class="column is-10">
          <router-view></router-view>
        </div>
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

