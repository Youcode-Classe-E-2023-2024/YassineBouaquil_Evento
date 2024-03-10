<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\category;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status','=','published')->get();
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
    public function edite($event_id)
    {

        $black_hover = 'Manage events';
        $event = Event::findorfail($event_id);
        $categorys = Category::All();
        $data = compact('event', 'black_hover', 'categorys');
        return view('editEvent')->with($data);
    }

    public function update(Request $request, $event_id)
    {

        // Retrieve the event from the database
        $event = Event::findOrFail($event_id);


        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
            'guestCapacity' => 'required|integer|min:1',
            'category' => 'required', // Assuming category is required
        ]);


        $event->title = $request->title;
        $event->description = $request->description;
        $event->place = $request->place; // Assuming place is also part of the request
        $event->price = $request->price; // Assuming price is also part of the request
        $event->category = $request->category; // Assuming category is also part of the request
        $event->available_places = $request->guestCapacity;
        $event->start_date = $request->startDate;
        $event->end_date = $request->endDate;
        $event->save();

        // Add a success message to the session using with()
        return redirect()->route('manageEvent')->with('success', 'Event updated successfully!');
    }

    public function delete($event_id)
    {
        $event = Event::findorfail($event_id);
        $event->delete();

        return redirect()->route('manageEvent')->with('deleted', 'Event has been deleted.');
    }
    public function publish($event_id)
    {
        $event = Event::findOrFail($event_id);

        if ($event->status == 'published') {
            $newStatus = 'archived';
        } else {
            $newStatus = 'published';
        }
        
        // Update the status
        $event->status = $newStatus;
        $event->save();

        return redirect()->route('manageEvent')->with('deleted', 'Event has been Published.');
    }

}
