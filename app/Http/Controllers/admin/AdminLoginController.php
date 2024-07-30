<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function Index()
    {
        return view('admin/login/index');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        try {
            if (Auth::attempt($credentials)) {
                if (Auth::user()->isAdmin == 1 || Auth::user()->isSuperAdmin == 1) {
                    $request->session()->regenerate();
                    return redirect()->intended('admin1');
                } else {
                    Auth::logout();
                    return back()->withErrors([
                        'email' => 'You do not have admin access.',
                    ])->onlyInput('email');
                }
            }
            return back()->withErrors([
                'email' => 'Login failed for some reason.',
            ])->onlyInput('email');
        } catch (\Error $e) {
            return redirect()->back()->with('error', "Login Invalid some reason" . $e->getMessage())->withInput();
        }
    }
}
