@extends('layouts.app')
@section('content')

<head>
    <title>Add event</title>
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
            <center><p class="h2-title">Create a new event </p></center>
            <!-- <div class="highlights"> -->
            <!-- 1 -->
            <div class="addevent-form" >
                <form method="post" action="/Event">
                    @csrf
                    <p class="event_info">
                        <label class="event_name" for="event_name">Enter the event name :
                            <input type="text" id="eventname" name="event_name" placeholder=""></label>
                        @error('event_name')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror
                        <label class="event_dis" for="eventdis">Write a description of the event :
                            <textarea name="event_dis" id="event_dis" cols="30" rows="3"></textarea></label>
                        @error('event_place')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror
                        <label class="event_date" for="star_tdate">Event Start date
                            <input name="start_date" type="date"></label>
                        @error('start_date')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror
                        <label class="event_date" for="end_date">Event End date
                            <input name="end_date" type="date"></label>
                        @error('end_date')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror

                        <label class="Volunteernumber" for="Volunteernumber">How many Volunteers do you need?
                            <input type="number" name="Volunteernumber"></label>
                        @error('Volunteernumber')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror

                    </p>


                    <input class="submiteventform" type="submit" value="Submit Now">
                </form>
            </div>

        </div>


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
