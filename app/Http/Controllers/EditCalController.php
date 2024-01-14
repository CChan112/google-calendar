<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class EditCalController extends Controller
{   
    public function index()
    {
        return view('api/event');
    }


    public function editEvent(Request $request)
    {
        $request->validate([
            'event-id' => 'required',
            'title' => 'nullable',
            'name' => 'nullable',
            'start' => 'nullable',
            'end' => 'nullable',
            'description' => 'nullable',
        ]);
        $eventId = $request->input('event-id');
        $event = Event::find($eventId);

        if ($event) {
        $event->name = $request->input('title');
        $event->description = $request->input('description');
        $event->startDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start'), 'Asia/Kuala_Lumpur')->setTimezone('UTC');
        $event->endDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('end'), 'Asia/Kuala_Lumpur')->setTimezone('UTC');
        $event->save();
         }

         return view('api/view-updated-event')->with ('event',$event);
    }

    public function indexViewEvent()
    {
        return view('api/view-n-dlt');
    }

    public function viewEvent(Request $request)
    {
        $vieweventId = $request->input('eventId');
        $viewevent = Event::find($vieweventId);


    return view('api/viewEvent')->with('event',$viewevent);
    }

    public function deleteEvent(Request $request)
    {
        $eventId = $request->input('event-id');
        $event = Event::find($eventId);
        if($event) {
            $event->delete();

    return view('api/view-n-dlt');
    }
    
    }
}
