<?php

use \App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([ 
            'name' => 'registrar', 
            'description' => 'Manages informatics students, lecturers as well as subjects for comprehensive assessment.' 
          ]);
   
          Role::create([ 
            'name' => 'student', 
            'description' => 'Takes exam.' 
          ]); 
   
          Role::create([ 
            'name' => 'lecturer', 
            'description' => 'Makes exam and lessons for the students.' 
          ]);
    }
}
