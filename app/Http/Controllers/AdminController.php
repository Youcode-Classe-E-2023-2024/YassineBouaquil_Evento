<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('main', compact('users'));
    }

    public function restrictAccess(User $user)
    {
        // Assurez-vous que l'utilisateur est un administrateur
        if (auth()->user()->role !== 'Administrateur') {
            abort(403, 'Accès refusé'); // Ou redirigez vers une page d'erreur
        }

        // Restreindre l'accès
        $user->update(['access_restricted' => true]);

        return redirect()->back()->with('success', "Accès restreint pour l'utilisateur avec l'ID {$user->id}");
    }
}
