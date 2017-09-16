<template>

  <main class="col-sm-9 pt-3 card" role="main">
    <h1 class="mb-4">COURSES</h1>
    <div class="container-fluid">
      <div class="col-md-12 bg-light py-2">
        <div class="row">
            <h2><span class="fa fa-list" aria-hidden="true"></span>  Curriculum<small>     Bachelor of Science in Information Technology</small></h2>
            <div class="btn-group ml-5">
              <button @click="toggleDropdown()"
                class="btn btn-info btn-sm dropdown-toggle" 
                :class="{ show: dropdownToggled }"
                type="button" 
                >Courses</button>
                <div class="dropdown-menu" 
                :class="{ show: dropdownToggled }" >
                  <a class="dropdown-item" href="#">BSIS</a>
                  <a class="dropdown-item" href="#">BSCS</a>
                  <a class="dropdown-item" href="#">BSBA</a>
                </div>
            </div>
        </div>
      </div>

        <!-- 1st box -->
      <div class="card mt-5">
        <div class="card-header bg-info text text-light"><strong>Year Level</strong></div>
         <!--  First yr box -->
          <div class="card-body">
            <h2>First Year</h2>
            <div class="row">

                <!-- 1st term -->
              <div class="col-md-4">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><strong>First Term</strong> <span class="fa fa-plus pull-right "></span></a>
                  <a href="#" class="list-group-item list-group-item-action">ENG 111    Communication Arts and Skills<span data-toggle="modal" data-target="#updateSubject" class="fa fa-pencil pull-right"></span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">FIL 111 Sining ng Komunikasyon</a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><strong>Second Term</strong> <span class="fa fa-plus pull-right "></span></a>
                  <a href="#" class="list-group-item list-group-item-action">ENG 111    Communication Arts and Skills<span data-toggle="modal" data-target="#updateSubject" class="fa fa-pencil pull-right"></span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">FIL 111 Sining ng Komunikasyon</a>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><strong>Second Term</strong> <span class="fa fa-plus pull-right "></span></a>
                  <a href="#" class="list-group-item list-group-item-action">ENG 111    Communication Arts and Skills<span data-toggle="modal" data-target="#updateSubject" class="fa fa-pencil pull-right"></span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">FIL 111 Sining ng Komunikasyon</a>
                </div>
              </div>

            </div>
          </div>






      </div>   

</div>
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