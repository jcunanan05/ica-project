<template>

  <main class="col-sm-9 pt-3" role="main">
    <h1 class="mb-4">Registration</h1>

    <form>
      <div class="form-group ml-1 ">
        <div class="row"> 
          <p><strong>Name</strong></p>
          <div class="col-md-3 ml-2"> 
            <input type="text" class="form-control" placeholder="Firts name">
          </div>
          <div class="col-md-3 ml-2"> 
              <input type="text" class="form-control" placeholder="Midle name">
          </div>
          <div class="col-md-3 ml-2"> 
              <input type="text" class="form-control" placeholder="Last name">
          </div>   
        </div>  
      </div>

      <!-- input index # -->
      <div class="form-group ml-1">
        <div class="row">   
              <p><strong>School Index No</strong></p>           
            <div class="col-md-3 ml-2"> 
              <input type="text" class="form-control" placeholder="1234-1234-4321">
            </div> 
        </div>  
      </div>

      <!-- input email -->
      <div class="form-group ml-1">
        <div class="row">   
            <p><strong>Email</strong></p>           
            <div class="col-md-3 ml-2"> 
              <input type="email" class="form-control" placeholder="Enter Email">
            </div>

            <!-- dropdown user type -->
            <div class="btn-group">
              <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Type</button>
              <div class="dropdown-menu">
                <p class="dropdown-item">Lecturer</p>
                <p class="dropdown-item">Student</p>
              </div>
            </div>

        </div>  
      </div>

      <button type="submit" class="btn btn-info">Submit</button>
    </form>


    <div class="container-fluid my-4 ">
    <div class="row">
      <div class="col-sm-12 ">
        <table class="table table-hover table-inverse">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


    </main>

</template>

<script>
  export default {

  }
</script>