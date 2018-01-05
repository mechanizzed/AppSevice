<?php

namespace AppService\Http\Controllers\Auth;

use AppService\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Cache;

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
  protected $redirectTo = '/admin/home';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    // if(Cache::has('order_id')){
    //   Cache::forget('order_id');
    // }
    $this->middleware('guest')->except('logout');
  }
}
