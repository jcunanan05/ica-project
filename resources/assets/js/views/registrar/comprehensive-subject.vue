<template>
  <main class="column is-10 box" style="margin-top:20px"role="main">
    <h1 class="title is-2">Comprehensive Resources</h1>

    <div class="field">
      <p class="control">
        <span class="select">
          <select>
            <option><a href="#Subject-Assigning"></a>Assigning of Subjects</option>
            <option>Learning Resources</option>
          </select>
        </span>
      </p>
    </div>

    <section id="Subject-Assigning">
      <h1 class="subtitle is-3">Subject Assigning</h1>
      <div class="column is-9">
        <div class="block">
          <table class="table is-bordered">
            <thead>
              <tr>
                <th>Lecturer</th>
                <th>Subject</th>
                <th>CS Title</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Disabled</th>

              </tr>
              </thead>
            <tbody>
              <tr>
                <td>Mr. Lecturer</td>
                <td>ITE111</td>
                <td>PLF</td>
                <td>Jan 01, 2016</td>
                <td><span class="fa fa-pencil-square"></span></td>
                <td><span class="fa fa-check-square"></span></td>
              </tr>
             
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    <section id="Learning-Resources">
      <h1 class="subtitle is-3">Learning Resources</h1>

      <!-- nav level -->
      <nav class="level">
        <div class="level-left">
          <p class="level-item"><a><strong>All</strong></a></p>
          <p class="level-item"><a>Pending</a></p>
          <p class="level-item"><a>Disabled</a></p>
          <p class="level-item"><a class="button is-info">New</a></p>
        </div>
      </nav>

      <div class="card">
        <div class="card-content">
          <p class="title is-5"><a href=""><u>Comprehensive Subject Title</u></a></p>
          <div class="columns">
            <span class="tag is-dark is-medium ml-2 ">ITE1111</span>
        </div>
          <h1 class="subtitle is-6">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco.</h1>
          <div class="columns">
            <label class="label is-info">-Mr.Lecturer</label>
            <nav class="level">
              <div class="level-right">
                <p class="level-item"><span class="fa fa-pencil"></span></p>
                <p class="level-item"><span class="fa fa-pencil"></span></p>
                <p class="level-item"><span class="fa fa-pencil"></span></p>
              </div>
            </nav>
            

          </div>
          
        
          
          

        </div>
      </div>
      
    </section>


  </main>
</template>


<script>
export default {
}
</script>