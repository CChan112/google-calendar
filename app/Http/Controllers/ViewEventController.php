<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use Google_Service_Calendar;
use Google_Client;

class ViewEventController extends Controller
{
    public function index()
    {
        return view('api/event-view');
    }

    public function show(Request $request)
    {
        $eventId = $request->input('event_id');
        $event = Event::find($eventId);
        $event->save();

        return view('api/event-view', with('event', $event));
    }
}
