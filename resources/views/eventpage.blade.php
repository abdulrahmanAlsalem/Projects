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

                  <form method="post" action="/Event/{{$event->id}}">
                      @csrf
                      <p class="event_info">
                  <span>

                      <label class="event_name2" >Event Name: {{$event->title}}</label>
                      <label class="org_name2" >Organization Name: <a href="/Profile/{{$event->organizer->id}}">{{$event->organizer->name}}</a> </label>


                    </span>


                    <label class="event_dis" for="eventdis">About the event:
                        <label class="des_field" for=""  >
                            {{$event->description}}
                        </label>


                    <span>

                          <label class="event_date1" for="startdate">Event Start date: {{$event->start_date->format('d M ') }}</label>
                          <label class="event_date2" for="enddate">Event End date: {{$event->end_date->format('d M')}}</label>

                    </span>


                        <label class="Volunteernumber" for="Volunteernumber">Number of required volunteers: {{$event->required_volunteers}}</label>


                  </p>


                    <input class="submiteventform" type="submit" value="Join">
                  </form>
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
