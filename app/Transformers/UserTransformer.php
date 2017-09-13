<?php

namespace App\Transformers;

use App\Transformers\RoleTransformer;

class UserTransformer extends Transformer
{
    public function transform($user)
    {
        return [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'middle_name' => $user['middle_name'], 
            'last_name' => $user['last_name'], 
            'email' => $user['email'],
            'school_index_no' => $user['school_index_no'],
            'role_id' => $user['role_id'],
            'is_verified' => (boolean) $user['is_verified'], 
            'is_active' => (boolean) $user['is_active'],
            'contact_no' => $user['contact_no'], 
            'home_address' => $user['home_address'], 
            'birthday' => $user['birthday'],
            'role' => $this->role($user)
        ];
    }

    public function role(array $user) 
    {
        $roleTransformer = new RoleTransformer();

        if(array_key_exists('role', $user)) {
            return $roleTransformer->transform($user['role']);
        }

        return;
    }
}