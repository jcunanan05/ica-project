<?php

use \App\Models\User;
use \App\Models\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registrar = Role::where(['name' => 'registrar'])->get()->first(); 
        $student = Role::where(['name' => 'student'])->get()->first(); 
        $lecturer = Role::where(['name' => 'lecturer'])->get()->first(); 
 
        $password = 'secret'; 
 
        User::create([ 
          'first_name' => 'John', 
          'middle_name' => 'John', 
          'last_name' => 'Doe', 
          'full_name' => 'John John Doe', 
          'school_index_no' => '0909-0909-0909', 
          'email' => 'john@example.com', 
          'password' => bcrypt($password), 
            'role_id' => $student->id, 
          'is_activated' => true 
        ]); 
 
        User::create([ 
          'first_name' => 'Jane', 
          'middle_name' => 'Jane', 
          'last_name' => 'Doe', 
          'full_name' => 'Jane Jane Doe', 
          'school_index_no' => '0998-0998-0998', 
          'email' => 'jane@example.com', 
          'password' => bcrypt($password), 
          'role_id' => $lecturer->id, 
          'is_activated' => true 
        ]); 
 
        User::create([ 
          'first_name' => 'Reggie', 
          'middle_name' => 'Istrar', 
          'last_name' => 'Admin', 
          'full_name' => 'Reggie Istar Admin', 
          'school_index_no' => '0978-0978-0978', 
          'email' => 'registrar@example.com', 
          'password' => bcrypt($password), 
          'role_id' => $registrar->id, 
          'is_activated' => true 
        ]); 
    }
}
