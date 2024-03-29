<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class MainController extends Controller
{
    public function index()
    {
        $black_hover = 'home';

        // Check if the events data is already cached
        if (Cache::has('cached_events')) {
            // Retrieve events data from the cache
            $events = Cache::get('cached_events');
        } else {
            // If not cached, fetch events from the database
            $events = Event::where('status', '=', 'published')->get();

            // Store events data in the cache for 60 minutes (adjust as needed)
            Cache::put('cached_events', $events, 60);
        }

        $data = compact('events', 'black_hover');
        return view('main')->with($data);
    }
    public function showManageEventPage()
    {
        $black_hover = 'Manage events';
        $user = Auth::user();
        $userid = $user->id;
        $userevents = Event::where('user_id', '=', $userid)->get();

        $events = Event::all();
        $categories = Category::All();
        $data = compact('categories', 'black_hover', 'events', 'user', 'userevents');
        return view('manageEvent')->with($data);
    }

    public function create(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
            'guestCapacity' => 'required|integer|min:1',
            'autoApproval' => 'required|boolean',
        ]);

        // Store the uploaded image
        // Retrieve the authenticated user's ID
        $user_id = Auth::id();
        // Create the event
        $event = new Event($request->all());
        $event->user_id = $user_id;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->place = $request->place; // Assuming place is also part of the request
        $event->price = $request->price; // Assuming price is also part of the request
        $event->category = $request->category; // Assuming category is also part of the request
        $event->available_places = $request->guestCapacity;
        $event->start_date = $request->startDate;
        $event->end_date = $request->endDate;
        $event->auto_approval = $request->autoApproval;
        $event->save();

        // Redirect to a success page or return a response
        return redirect()->route('manageEvent'); // Replace 'success.route' with your actual success route name
    }


}
