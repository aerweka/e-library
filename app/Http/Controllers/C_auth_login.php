<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class C_auth_login extends Controller
{

    public function login()
    {
        return view('login.login');
    }

    public function forgotPassword()
    {
        return view('login.forgotPassword');
    }

    public function sentEmailResetPassword(Request $post)
    {
        return view('login.login');
        // redirect('/');
    }

    public function recoverPassword()
    {
        return view('login.recoverPassword');
    }

    public function updatePassword(Request $post)
    {
        return redirect('/');
    }

    public function preLogin()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return redirect('/index_admin');
            } else {
                return redirect('/index');
                // ->route('index_user');
            }
        } else {
            return redirect('/');
        }
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('username', 'password');
        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/index_admin');
            } else {
                return redirect('/index');
                // ->route('index_user');
            }
        } else {
            return redirect('/');
        }
    }

    public function preRegister()
    {
        return view('login.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect('/');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
