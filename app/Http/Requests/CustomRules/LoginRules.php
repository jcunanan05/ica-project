<?php

namespace App\Http\Requests\CustomRules; 


class LoginRules extends CustomRules 
{
    protected $rules = [
      'email' => 'required|email',
      'password' => 'required|min:5'
    ];
}