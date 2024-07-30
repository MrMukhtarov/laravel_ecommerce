<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Index()
    {
        $users = User::all();
        $isSuperAdmin = 0;
        if (Auth::check() && Auth::user()->isSuperAdmin) {
            $isSuperAdmin = 1;
        }
        return view('admin.home.index', compact('users', "isSuperAdmin"));
    }

    public function UpdateUserIndex($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('admin.user.update', compact("user"));
    }

    public function UpdateUser(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();

        $active = $request->has('isActive') ? 1 : 0;
        $admin = $request->has('isAdmin') ? 1 : 0;


        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'isAdmin' => 'boolean',
            'isActive' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $user->fill([
                'name' => $request->name,
                'email' => $request->email,
                'isAdmin' => $admin,
                'isActive' => $active,
            ]);

            $user->save();
            return redirect()->route('admin.home')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
    }
    public function UpdateSingleUserIndex($slug)
    {
        $user = User::where('slug', $slug)->first();
        if ($user->isAdmin || $user->isSuperAdmin) {
            return redirect()->route('notFound');
        }
        return view('admin.User.userUpdate', compact("user"));
    }
    public function UpdateSingleUser(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->where('isAdmin', 0)->first();


        $active = $request->has('isActive') ? 1 : 0;
        $admin = $request->has('isAdmin') ? 1 : 0;


        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'isAdmin' => 'boolean',
            'isActive' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $user->fill([
                'name' => $request->name,
                'email' => $request->email,
                'isAdmin' => $admin,
                'isActive' => $active,
            ]);

            $user->save();
            return redirect()->route('admin.home')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
    }
}
