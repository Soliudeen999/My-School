<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

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
        $this->middleware('guest:stf')->except('logout');
        $this->middleware('guest:stn')->except('logout');
        $this->middleware('guest:prnt')->except('logout');
    }

    public function showStaffLoginForm()
    {
        return view('auth.login', ['url' => 'staff']);
    }

    public function staffLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('stf')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/staff');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showStudentLoginForm()
    {
        return view('auth.login', ['url' => 'student']);
    }

    public function studentLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:6'
        ]);

        if 
        (
            Auth::guard('stn')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember')) || 
            Auth::guard('stn')->attempt(['regNumber'=> $request->email, 'password' => $request->password], $request->get('remember'))
        ) 
        {
            return redirect()->intended('/student');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showParentLoginForm()
    {
        return view('auth.login', ['url' => 'parent']);
    }

    public function parentLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('prnt')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/parent');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
