<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.userlogin');
    }

    public function store(Request $request)
    {
        $user = User::where('email', request('email'))->first();
    
        $hashpwd = Hash::make(request('password'));
        if ($user && Hash::check($user->password, $hashpwd)) {
            // dd("aefa");
            Auth::login($user);

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }
}
