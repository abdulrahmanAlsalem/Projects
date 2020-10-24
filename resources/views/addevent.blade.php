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
                        <form action="#">
                            <p class="event_info">
                          <label class="event_name" for="eventname">Enter the event name :
                          <input type="text" id="eventname" name="eventname" placeholder=""></label>
                        
                          <label class="event_dis" for="eventdis">Write a description of the event :
                              <textarea name="event_dis" id="event_dis" cols="30" rows="3"></textarea>
                          
                            <p class="event_date">
                          <label class="event_date" for="startdate">Event Start date
                          <input type="date">
                          <label class="event_date" for="enddate">Event End date
                          <input type="date"></label>
                            </p>

                            <label class="Volunteernumber" for="Volunteernumber">How many Volunteers do you need?
                            <input type="number" for="Volunteernumber"></label>

                        </p>
                            
                        
                          <input class="submiteventform" type="submit" value="Submit Now">
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