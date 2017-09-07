<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Http\Requests\CustomRules\LoginRules;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'authenticatedUser']);
        $this->middleware('auth')->only('logout');
    }

    /** 
     * Login the user
     *
     */
    public function login(Request $request) 
    {
        $this->validateLogin($request);

        if($this->attemptLogin($request)) {
            return $this->success($request);
        }

        return $this->sendFailedLoginResponse($request);
    }


    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        if($request->expectsJson()) {
            return response()->json(['success' => 'Logout Success.'], 201);
        }

        return redirect('/');
    }


    public function authenticatedUser() 
    {
        if (! Auth::user()) {
            return response()->json([
                'errors' => 'Authenticated user not found.'
            ], 422);
        }

        return $this->success();
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
            'success' => 'Login Successful!',
            'user' => User::find(Auth::user()->id)
                        ->select(
                            'first_name',
                            'middle_name', 
                            'last_name', 
                            'email'
                        )
                        ->first(),
        ], 201);
    }

}
