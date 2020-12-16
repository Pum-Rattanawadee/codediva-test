<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function loginForm() {
    return view('loginForm');
  }

  public function login(Request $request) {
    $request->session()->put('username', $request->loginName);
    return redirect('/');
  }

  public function logout(Request $request) {
    $request->session()->forget('username');
    return redirect('/');
  }
}
