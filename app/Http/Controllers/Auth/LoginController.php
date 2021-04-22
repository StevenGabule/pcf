<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Backend\Home\QueryServices\LoginServices;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * @return Application|ResponseFactory|Response|string
     */
    public function redirectTo()
    {
        $type = (int)auth()->user()->user_type;
        if ($type === 0) {
            $this->redirectTo = route('admin.index');
        } else if ($type === 1) {
            $this->redirectTo = route('custodian.index');
        } else if($type === 2) {
            $this->redirectTo = route('employeer.index');
        } else if($type === 3) {
            $this->redirectTo = route('student.portal.index');
        } else {
            $this->redirectTo = response([], 404);
        }

        return $this->redirectTo;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
