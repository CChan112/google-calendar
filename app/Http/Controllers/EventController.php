<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve all events from the "events" table
        //$events = Event::all();
        $event = Event::where('id', 1)->first();
        //$event = Event::where('id', 1)->where('eventName', 'Project Stellar')->first();

        // Pass the events data to the view
        return view('event.index', ['event' => $event]);

        
    }

    public function create(Request $request) {
        $eventName = $request->input('eventName');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $startTime = $request->input('startTime');
        $endTime = $request->input('endTime');
        $location = $request->input('location');
        $description = $request->input('description');

         // Create your event here
         $event = new Event;
         $event->name = $eventName;
         $event->startDateTime = $startDate;
        $event->endDateTime = $endTime;
        $event->description = $description;
        $event->location = $location;
        $event->save();

    return redirect('/')->with('success', 'Event created successfully');
    }
}