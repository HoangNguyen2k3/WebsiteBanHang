<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        // if (auth()->check()) {
        //     return redirect()->to('home');
        // }
        return view('login');
    }

    public function postloginAdmin(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $remember = $request->has('remember_me') ? true : false;
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'position' => 'Admin'
        ], $remember)) {
            return redirect()->to('home');
        } else {
            return redirect()->back()
                ->withErrors(['login' => 'Invalid email or password.'])
                ->withInput();
        }
    }
}
