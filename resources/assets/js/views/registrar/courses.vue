<template>

  <main class="column is-11 box" style="margin-top:20px"role="main">
    <h1 class="title is-2">COURSES</h1>
    <div class="container is-fluid">
      <div class="column is-12 bg-light" style="margin-top:20px">
        <div class="columns">
            <h2 class="subtitle is-3"><span class="fa fa-list" aria-hidden="true"></span>  Curriculum<small>     Bachelor of Science in Information Technology</small></h2>
            <div class="field" style="margin-left:70px">
             <label class="title is-4" style="margin-bottom:10px">Courses</label> 
              <p class="control">
                <span class="select">
                <select>
                <option>BSIT</option>
                <option>BSCS</option>
                <option>BSIS</option>
              </select>
            </span>
          </p>
                </div>
            </div>
        </div>
      </div>

      <article class="message is-light" style="margin-top:20px">
        <div class="message-header">
          <p><strong>Year Level</strong></p>
        </div>
        <div class="message-body">
          <div class="block">
            <h1 class="title is-5">First Year</h1>
            <div class="columns">
              <div class="column">
                <div class="box">
                  <aside class="menu ">
                    <p class="menu-label subtitle is-6">
                        <strong>First Term</strong>
                        <span class="icon has-text-primary ml-6">
                          <i class="fa fa-plus-square"></i>
                        </span>
                    </p>
                    <ul class="menu-list">
                      <li><a href=" ">asqwww</a></li>
                      <li><a href=" ">asqwww</a></li>
                      <li><a href=" ">asqwww</a></li>
                    </ul>
                  </aside>
                </div>  
              </div>

              <div class="column">
                <div class="box">
                  <aside class="menu ">
                    <p class="menu-label subtitle is-6">
                        <strong>First Term</strong> 
                        <span class="icon has-text-primary ml-6">
                          <i class="fa fa-plus-square"></i>
                        </span>
                    </p>
                    <ul class="menu-list">
                      <li><a href=" ">asqwww</a></li>
                      <li><a href=" ">asqwww</a></li>
                      <li><a href=" ">asqwww</a></li>
                    </ul>
                  </aside>
                </div>  
              </div>

              <div class="column">
                <div class="box">
                  <aside class="menu ">
                    <p class="menu-label subtitle is-6">
                        <strong>First Term</strong> 
                        <span class="icon has-text-primary ml-6">
                          <i class="fa fa-plus-square"></i>
                        </span>
                    </p>
                    <ul class="menu-list">
                      <li><a href=" ">asqwww</a></li>
                      <li><a href=" ">asqwww</a></li>
                      <li><a href=" ">asqwww</a></li>
                    </ul>
                  </aside>
                </div>  
              </div>
             
        
      </div>
          </div>

         </div>
        </div>
      </article>



      </article>   

  </main>

    

</template>

<script>
export default {
  name: 'registration',

  data: () => ({
    dropdownToggled: false
  }),

  methods: {
    toggleDropdown() {
      this.dropdownToggled = ! this.dropdownToggled;
    }  
  }

}
</script>

<style type="components.scss"></style>