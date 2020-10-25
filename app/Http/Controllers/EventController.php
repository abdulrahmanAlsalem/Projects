<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['event_name'=>'string|required',
            'event_place'=>'string|required',
            'start_date'=>'required|date|after:today',
            'end_date'=>'required|date|after_or_equal:start_date',
            'Volunteernumber'=>'numeric|min:1']);

        Event::create(['organizer_id'=>Auth::id(),
            'title'=>$request['event_name'],
            'description'=>$request['event_place'],
            'start_date'=>$request['start_date'],
            'end_date'=>$request['end_date'],
        'required_volunteers'=>$request['Volunteernumber']]);
        return redirect('/home');
    }

    public function join(Event $event)
    {
        Auth::user()->inEvents()->attach($event->id);
    }
}
