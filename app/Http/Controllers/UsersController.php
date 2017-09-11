<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;

class UsersController extends Controller
{
    protected $userTransformer;


    public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
    }


    public function index() 
    {
        return response()->json([
            'data' => $this->userTransformer
                ->transformCollection(User::all()->toArray())
        ], 200);
    }
}
