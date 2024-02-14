<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('Dashboard.Auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        if (is_numeric($data['email'])) {
            $credentials = ['phone' => $request['email'], 'password' => $request['password']];
        } else {
            $credentials = ['email' => $request['email'], 'password' => $request['password']];
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with('fail', 'Wrong (Email/Phone) or Password');
        }

    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.home');
    }
}
