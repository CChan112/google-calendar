<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function createEvent(Request $request)
    {
        $event = new Event;
        $event->name = $request->input('title');
        $event->description = $request->input('description');
        $event->startDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start'), 'Asia/Kuala_Lumpur')->setTimezone('UTC');
        $event->endDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('end'), 'Asia/Kuala_Lumpur')->setTimezone('UTC');
        $event->save();

        $id = Event::get()->first()->id;
        
        return view('createEvent')->with('id',$id);
    }
}

