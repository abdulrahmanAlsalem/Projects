@extends('layouts.app')
@section('content')

<head>
    <title>event page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forms.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

  </head>
  {{-- body  --}}
	<body class="is-preload">

    <section class="wrapper">
      <div class="inner">
          <center><p class="h2-title">Event description</p></center>

          <div>

          </div>

              <div class="event_description">


                      <p class="event_info">

                  <span>
                      {{-- <label class="event_name2" >Event Name: {{$event->title}}</label> --}}
                      <div class="theEvent">
                      <label class="event_field" >Event Name:
                      <p class="event_name1">{{$event->title}}</p>
                        </label>
                      </div>
                      {{-- <label class="org_name2" >Organization Name: <a href="/Profile/{{$event->organizer->id}}">{{$event->organizer->name}}</a> </label> --}}
                      <div class="theOrg">
                      <label class="org_name2" >Organizer:
                          <p class="org_name1"><a href="/Profile/{{$event->organizer->id}}">{{$event->organizer->name}}</a></p>
                       </label>
                      </div>
                          <hr>
                    </span>


                    <label class="event_dis" for="eventdis">About the event:
                        <p  class="des_field"   >
                            {{-- {{$event->description}} --}}
                            {{$event->description}}
                        </p>
                    </label>
                      <hr>
                    <span>

                          {{-- <label class="event_date1" for="startdate">Event Start date: {{$event->start_date->format('d M ') }}</label> --}}
                          <div class="date1">
                          <label class="event_date1" for="startdate">Event Start date:
                              <p class="st_date"> {{$event->start_date->format('d M ') }}</p>
                          </label>
                           </div>

                          {{-- <label class="event_date2" for="enddate">Event End date: {{$event->end_date->format('d M')}}</label> --}}
                          <div class="date2">
                          <label class="event_date2" for="enddate">Event End date:
                              <p class="ed_date">{{$event->end_date->format('d M')}}</p>
                          </label>
                      </div>

                    </span>


                        {{-- <label class="Volunteernumber" for="Volunteernumber">Number of required volunteers: {{$event->required_volunteers}}</label> --}}
                        <div class="num_req">
                        <label class="Volunteernumber" for="Volunteernumber">Number of required volunteers: </label>
                        <p class="volunteer_n">{{$event->required_volunteers}}</p>
                      </div>


                  </p>
          @unless(Auth::user()->role==='orgnaization' || Auth::user()->inEvents()->find($event->id))
          <form method="post" action="/Event/{{$event->id}}">
              @csrf

                    <input class="submiteventform" type="submit" value="Join">
                  </form>
          @endunless
                </div>

          </div>

  </section>
    <!-- CTA -->
    <section id="cta" class="wrapper">
        <div class="inner">
            <h2>You Can easly share new events</h2>
            <p class="footer-org">
            <pre>1.Click create event button                  2.Fill the form                  3.Share it with Volunteers</pre>

            </p>
        </div>
    </section>




		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

@endsection
