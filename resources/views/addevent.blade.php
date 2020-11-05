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
            <center><p class="h2-title">Create a New Event </p></center>
            <!-- <div class="highlights"> -->
            <!-- 1 -->
            <div class="addevent-form" >
                <form method="post" action="/Event/Create">
                    @csrf
                    <p class="event_info">
                        <label class="event_dis" for="event_name">Enter The Event Name :
                            <input type="text" id="eventname" name="event_name" value="{{old('event_name')}}"></label>
                        @error('event_name')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror
                        <label class="event_dis" for="eventdis">Write a Description of The Event :
                            <textarea name="event_description" id="event_dis" cols="30" rows="3">{{old('event_description')}}</textarea></label>
                        @error('event_description')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror
                        <label class="event_date" for="star_tdate">Event Start Date
                            <input name="start_date" type="date" value="{{old('start_date')}}"></label>
                        @error('start_date')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror
                        <label class="event_date" for="end_date">Event End Date
                            <input name="end_date" type="date"value="{{old('end_date')}}"></label>
                        @error('end_date')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror
                        <br>
                        <label class="Volunteernumber" for="Volunteernumber">How many Volunteers needed?
                            <input class="input_num" type="number" name="number_of_volunteers" value="{{old('number_of_volunteers')}}"></label>
                        @error('number_of_volunteers')
                        <strong style="color: crimson">{{$message}}</strong><br>
                        @enderror

                    </p>


                    <input class="submiteventform" type="submit" value="Submit">
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
