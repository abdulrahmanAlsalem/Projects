<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function show(Event $event = null)
    {
      return view('eventpage',['event'=>$event]);
    }
    public function create(){
        return view('addevent');
    }
    public function store(Request $request)
    {
        $request->validate(['event_name'=>'string|required',
            'event_description'=>'string|required',
            'start_date'=>'required|date|after:today',
            'end_date'=>'required|date|after_or_equal:start_date',
            'number_of_volunteers'=>'numeric|min:1']);

        Event::create(['organizer_id'=>Auth::id(),
            'title'=>$request['event_name'],
            'description'=>$request['event_description'],
            'start_date'=>$request['start_date'],
            'end_date'=>$request['end_date'],
        'required_volunteers'=>$request['number_of_volunteers']]);
        return redirect('/Profile/'.Auth::id().'/Events');
    }

    public function join(Event $event)
    {
        $id = Auth::id();
        Auth::user()->inEvents()->attach($event->id);
        return redirect("/Profile/$id/Events");
    }
}
