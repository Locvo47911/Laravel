<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    //Sử dụng use này để thay thế cho showLogin vì nó chứa nhiều phương thức dùng thường xuyên và logincontroller sẽ kế thừa nó.

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm() {
        return view('users.login');
    }
    public function login(Request $request) {
        $data = $request->only('email', 'password');
        if(\Auth::attempt($data)) {
            return redirect()->route('users.home');
        }
        return redirect()->back()->with('fail', 'Email, Password is wrong. Please try again !')->withInput();
    }
    public function logout(Request $request) {
        auth()->logout();
        return Redirect()->route('form-login');
    }
}
