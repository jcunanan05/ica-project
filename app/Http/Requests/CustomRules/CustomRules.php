<?php 

namespace App\Http\Requests\CustomRules; 

use Exception; 

abstract class CustomRules  
{ 
  protected $rules = []; 


  public function for($key) 
  { 
    if(! array_key_exists($key, $this->rules) ) { 
      throw new Exception('Rule not found.'); 
    } 

    return $this->rules[$key]; 
  } 
}

