<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function addEvent(){
        return view('add-event');
    }
    public function processAddEvent(Request $request){

    }
}