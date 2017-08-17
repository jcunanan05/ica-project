<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Http\Requests\CustomRules\UserRules;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /** 
     * Login the user
     *
     */
    public function login(Request $request) {
        $this->validateLogin($request);

        return $this->success();
    }


    /** 
     * Validate credentials
     *
     */
    protected function validateLogin(Request $request) {
        $userRules = new UserRules();

        $this->validate($request, [
            'email' => $userRules->for('email'),
            'password' => $userRules->for('password')
        ]);
    }

    protected function success() {
        return response()->json([
            'success' => 'Validation Passed'
        ], 201);
    }
}
