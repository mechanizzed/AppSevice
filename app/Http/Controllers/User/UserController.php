<?php

namespace AppService\Http\Controllers\User;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use AppService\Entities\User\Repository as User;

class UserController extends Controller
{
  private $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function index()
  {
    return view('pages.user.pass');
  }

  public function updatePassword(Request $request)
  {
    $this->validate($request, [
      'oldpassword' => 'required|string|min:4',
      'password' => 'required|string|min:4|confirmed'
    ]);
    if (!Hash::check($request->get('oldpassword'), Auth::user()->password)) {
      return redirect()->route('user.pass.index')->with('alert', 'Seu password antigo não confere');
    }
    $this->user->update(Auth::id(), ['password' => bcrypt($request->get('password'))]);
    return redirect()->route('user.pass.index')->with('success', 'Password atualizado com sucesso!');
  }


}
