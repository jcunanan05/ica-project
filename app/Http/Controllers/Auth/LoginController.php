<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Http\Requests\CustomRules\LoginRules;

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
    public function login(Request $request) 
    {
        $this->validateLogin($request);

        if($this->attemptLogin($request)) {
            return $this->success();
        }

        return $this->sendFailedLoginResponse($request);
    }


    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }


    /** 
     * Validate credentials
     *
     */
    protected function validateLogin(Request $request) 
    {
        $loginRules = new LoginRules();

        $this->validate($request, [
            $this->username() => $loginRules->for('email'),
            'password' => $loginRules->for('password')
        ]);
    }


    protected function attemptLogin(Request $request) 
    {
        return Auth::guard()->attempt(
            $this->credentials($request)
        );
    }


    protected function credentials(Request $request) 
    {
        return $request->only($this->username(), 'password');
    }


    protected function username() 
    {
        return 'email';
    }


    protected function sendFailedLoginResponse(Request $request) 
    {
        $errors = [$this->username() => trans('auth.failed')];

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
    }


    protected function success() 
    {
        return response()->json([
            'success' => 'Validation Passed'
        ], 201);
    }

}
