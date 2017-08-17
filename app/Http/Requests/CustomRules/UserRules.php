<?php 
 
namespace App\Http\Requests\CustomRules; 
 
class UserRules extends CustomRules 
{ 
        protected $rules = [ 
                'firstName' => "required|string|regex:/[A-Z](?:[a-z]?['][A-Z])?[A-Za-z]+\b/", 
                'middleName' => 'required|string|regex:/[A-Z][A-Za-z-]+\b/', 
                'lastName' => 'required|string|regex:/[A-Z][A-Za-z-]+\b/', 
                'email' => 'required|email|unique:users', 
                'roleID' => 'required|exists:users,role_id', 
                'schoolID' => 'required|string|unique:users,school_index_no|regex:/^(?:[0-9]{4}-){2}[0-9]{4}$/', 
                'birthday' => 'required|date_format:m-d-Y', 
                'homeAddress' => 'required|string', 
                'contactNo' => ['required', 'string', 'regex:/(?:0|63)(?:9)[0-9]{9}|[0-9]{7,10}/'], 
                'passwordConfirm' => 'required|min:5|confirmed',
                'password' => 'required|min:5'
        ];
}