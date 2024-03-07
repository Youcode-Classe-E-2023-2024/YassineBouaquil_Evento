<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $black_hover = 'Manage users';
        $users = User::All(); // Fetch all users with their roles

        return view('manageUsers', compact('users', 'black_hover'));
    }

    public function assignRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->roles()->sync($request->roles);

        return redirect()->route('manageUsers')->with('success', 'Roles assigned successfully');
    }


}
