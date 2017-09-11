<?php

namespace App\Transformers;

class RoleTransformer extends Transformer
{
    public function transform($role)
    {
        return [
            'id' => $role['id'],
            'name' => $role['name'],
            'description' => $role['description']
        ];
    }
}