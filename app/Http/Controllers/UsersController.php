<?php

namespace App\Http\Controllers;

use App\Models\User;
use \App\Http\Requests\CustomRules\UserRules;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;

class UsersController extends Controller
{
    protected $userTransformer;


    public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
        $this->middleware('auth')->only(['index', 'store']);
    }


    public function index() 
    {
        return response()->json([
            'data' => $this->userTransformer
                ->transformCollection(
                    User::with('role')->where("id",">",0)->get()->toArray()
                )
        ], 200);
    }


    public function store(Request $request)
    {
        $userRules = new UserRules();

        $this->validate($request, [
            'firstName' => $userRules->for('first_name')
        ]);
    }

}
