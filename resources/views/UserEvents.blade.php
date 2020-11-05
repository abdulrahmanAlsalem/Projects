@extends('layouts.app')
@section('content')

    <head>
        <title>Volunteering Platform</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cards.css') }}" rel="stylesheet">


    </head>
    <body class="is-preload" >

    <!-- Highlights -->

    <section class="wrapper">
        <div class="inner">
            <center><p class="h-title">{{$user->name}}'s Events :</p></center>
            <div class="col-4 text-right">
                @if ($user->role==='Orgnaization'&& Auth::User()->id == $user->id)
                    <a href="/Event/Create" class="btn btn-sm btn-primary">Create Event</a>
                @endif
            </div>
            <div class="highlights">


                <!-- Events Card (each section has one event card .. ) -->
                @forelse( $events as $event)
                    <section>
                        <div class="content">
                            <div class="Events_card">
                                <header> <img src="/images/Group9.png" alt="" style="width:100%"></header>

                                <div class="Event_container">
                                    <p class="Event_title"> {{$event->title}}</p>
                                    <p class="Event_dis">{{Illuminate\Support\Str::words($event->description,20)}}</p>
                                    <div class="Event_details">
                                        <p id="volunteer_numbers" class="icon fa-users" style="font-size: large"> {{$event->required_volunteers}}</p>
                                        <p id="Event_dates" class="icon  fa-calendar " style="font-size: large"> {{$event->start_date->format('d M ') }} @if($event->start_date->format('d M') != $event->end_date->format('d M')) - {{$event->end_date->format('d M ')}} @endif</p>
                                    </div>
                                </div>

                                    <a href="/Event/{{$event->id}}"><button class="joiniing" >Show more</button></a>

                            </div>
                        </div>
                    </section>
                    @empty <p>No events yet</p>
                @endforelse





            </div>
        </div>
    </section>


    <!-- CTA -->
    <section id="cta" class="wrapper">
        <div class="inner">

        </div>
    </section>

    </body>
@endsection
