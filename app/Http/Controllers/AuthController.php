<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function login()
  {
    return view('auth.login');
  }

  public function check(Request $request)
  {
    $request->validate([
      'login' => 'required',
      'password' => 'required',
    ]);

    $user = User::where('login', '=', $request->login)->first();

    if (!$user) {
      return json_encode(['message' => 'not found']);
    }

    if (Hash::check($request->password, $user->password)) {
      $request->session()->put('loggedUser', $user->id);

      return json_encode(['message' => 'success']);
    } else {
      return json_encode(['message' => 'not matched']);
    }
  }

  public function logout($locale)
  {
    if (session()->has('loggedUser')) {
      session()->pull('loggedUser');
      return redirect(route('main', $locale));
    }
  }
}
