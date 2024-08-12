<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Retrieve the authenticated user
            $request->session()->put('user', $user); // Store user in session
            return redirect('/')->with('success', 'Đăng nhập thành công!');
        } else {
            return redirect('/login')->withErrors(['email' => 'Nhập sai thông tin tài khoản hoặc mật khẩu!']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user'); // Clear user data from session
        $request->session()->forget('cart');
        return redirect('/login')->with('success', 'Đăng xuất thành công!');
    }

    public function login()
    {
        if (session()->get('user')) {
            return redirect('/');
        }
        return view('login');
    }
}
