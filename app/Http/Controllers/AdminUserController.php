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
    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();

        return redirect()->route('manageUsers')->with('success', 'User deleted successfully');
    }

    public function ban($userId)
    {
        $user = User::findOrFail($userId);
        $user->update(['is_banned' => true]);

        return redirect()->route('manageUsers')->with('success', 'User banned successfully');
    }

    public function unban($userId)
    {
        $user = User::findOrFail($userId);
        $user->update(['is_banned' => false]);

        return redirect()->route('manageUsers')->with('success', 'User unbanned successfully');
    }


}
