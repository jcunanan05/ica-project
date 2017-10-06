<?php 
 
namespace App\Http\Requests\CustomRules; 
 
class UserRules extends CustomRules 
{ 
        protected $rules = [ 
                'first_name' => "required|string|regex:/[A-Z](?:[a-z]?['][A-Z])?[A-Za-z]+\b/", 
                'middle_name' => 'required|string|regex:/[A-Z][A-Za-z-]+\b/', 
                'last_name' => 'required|string|regex:/[A-Z][A-Za-z-]+\b/', 
                'email' => 'required|email|unique:users', 
                'role_id' => 'required|exists:users,role_id', 
                'school_id' => 'required|string|unique:users,school_index_no|regex:/^(?:[0-9]{4}-){2}[0-9]{4}$/', 
                'birthday' => 'required|date_format:m-d-Y', 
                'home_address' => 'required|string', 
                'contact_no' => ['required', 'string', 'regex:/(?:0|63)(?:9)[0-9]{9}|[0-9]{7,10}/'], 
                'password' => 'required|min:5|confirmed'
        ];
}