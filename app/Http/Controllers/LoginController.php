<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if(session()->has('key'))
        {
            return redirect()->route('dasboard.index');
        }

        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password))
        {
            session()->put('key', $user);

            return redirect()->route('dasboard.index');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('login');
    }
}
