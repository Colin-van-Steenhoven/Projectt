<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function addEvent(){
        // ophalen van data uit database
        $events = Event::all();

        return view('events-list', [
            'events' => $events,
        ]);
    }
    public function deleteEvent($eventId){
        $event = Event::findOrFail($eventId);
        $event->delete();

        return redirect()->route('add-event');
    }
    public function processAddEvent(Request $request){

    }
}