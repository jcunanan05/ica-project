<template>
  <div class="columns">
    <div id="lecturer-sidebar" class="column is-2">
      <app-menu>
        <menu-label text="Learning" />
        <menu-list>
          <menu-dropdown uri="learning-resources" text="Learning Resources">
            <menu-item uri="quiz" text="Quiz" />
            <menu-item uri="exam" text="Exam" />
          </menu-dropdown>
          <menu-item uri="Reports" text="Courses" />
        </menu-list>
        <menu-label text="Management" />
        <menu-list>
          <menu-item uri="Reports" text="Reports" />
          <menu-item uri="Reports" text="Account Setting" />
        </menu-list>
      </app-menu>
    </div>
    <div class="column is-10">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
#lecturer-side {
  border-right: 1px;
}
</style>