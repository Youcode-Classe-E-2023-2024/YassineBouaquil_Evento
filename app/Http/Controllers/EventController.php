<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $black_hover = 'Reserve a ticket';

        return view('reserve', compact('black_hover', 'events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'place' => 'required',
            'category' => 'required',
            'available_places' => 'required|integer',
        ]);

        Event::create($request->all());

        return redirect()->route('manageEvent')->with('success', 'Événement ajouté avec succès.');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('manageEvent')->with('success', 'Événement supprimé avec succès.');
    }

}
