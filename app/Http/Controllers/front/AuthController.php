<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Index()
    {
        return view('front.auth.index');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => "string|max:255|required",
            'email' => "string|max:255|required|unique:users",
            'password' => "string|required|min:8",
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'slug' => strtolower($request->name)
            ]);
            return redirect()->route('home')->with('success', "Register sucess");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Register fauled "  . $e->getMessage())->withInput();
        }
    }

    public function login(Request $request)
    {
        $credentials =$request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
            return back()->withErrors(['email' => "wrong email"])->onlyInput('email');
        } catch (\Exception $e) {
            return redirect()->back()->with('Fail ' . $e->getMessage())->withInput();
        }
    }
}
