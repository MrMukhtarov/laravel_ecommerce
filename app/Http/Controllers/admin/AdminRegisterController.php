<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminRegisterController extends Controller
{
    public function Index(){
        return view('admin.register.index');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'isAdmin' => 'boolean',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

     try {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'isAdmin' => $request->has('isAdmin') ? 1 : 0,
            'slug' => strtolower($request->name)
        ]);
        return redirect()->route('admin.home')->with('success',"Register Succesfully");
     } catch (\Exception $e) {
        return redirect()->back()->with('error',"Register Invalid some reason".$e->getMessage())->withInput();
     }
    }   
}
