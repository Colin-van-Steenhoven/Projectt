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
        $newEvent = new Event();
        $newEvent->name = $request->name;
        $newEvent->photo = $request->photo;
        $newEvent->event_start = $request->event_start;
        $newEvent->event_end = $request->event_end;
        $newEvent->available_tickets = $request->available_tickets;
        $newEvent->location = $request->location;
        $newEvent->price = $request->price;
        $newEvent->description = $request->description;

        $newEvent->save();

        return redirect()->route('add-event');
    }
    public function listEvents(){
        // ophalen van data uit database
        $events = Event::all();

        return view('list-events', [
            'events' => $events,
        ]);
    }
}