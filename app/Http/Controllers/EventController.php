<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function show() //Event $event = null
    {
        return view('eventpage');
      //return view('eventpage',['event'=>$event]);
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

    public function delete(Event $event)
    {
        if(Auth::user()->role == 'Orgnaization') {
            Validator::validate(['start_date'=>$event->start_date->subDay(),'now'=>now()],['now'=>'before:start_date'],['before'=>'This Event Starts Tomorrow And Can Not Be Deleted']);
            Auth::user()->organizedEvents->find($event->id)->delete();
            return redirect("/Profile/".Auth::id()."/Events");
        }else {
            Validator::validate(['start_date'=>$event->start_date->subDays(3),'now'=>now()],['now'=>'before:start_date'],['before'=>'This Event Starts In Three Days And Can Not Be Dropped']);
            Auth::user()->inEvents()->detach($event->id);
            return redirect("/Profile/".Auth::id()."/Events");
        }
    }
}
