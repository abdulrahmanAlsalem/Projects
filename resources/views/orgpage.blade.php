@extends('layouts.app')

@section('content') 

<html>
	<head>
		<title>Volunteering Platform</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">
		<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
	</head>
	<body class="is-preload">

		<!-- Header -->
		
			<div class="topnav">
				
				<div class="items">
				<a class="my-active" href="/index.html">Home</a>
				<a href="#">Events</a>
				<a href="/orgProfile.html">Our Profile</a>
			</div>
				<div class="sign-items">
					<a class="signup-btn" href="/index.html">Sign Out</a>


				</div>
			  </div>
			  
		<!-- Nav -->

		<!-- Banner -->
		
			<section id="banner">
				<div class="inner">
					<h1 class="vtitle">As an organization you can Add and share new volunteer event</h1>
					
				</div>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<center><p class="h2-title">Adding a new event </p></center>
					<!-- <div class="highlights"> -->
						<!-- 1 -->
						<div class="addevent-form" >
                            <form action="#">
								<p class="event_info">
                              <label class="event_name" for="eventname">Enter the event name :
                              <input type="text" id="eventname" name="eventname" placeholder=""></label>
							
                              <label class="event_place" for="eventplace">Where will the event be?
                              <input type="text" id="eventplace" name="eventplace" placeholder=""></label>
								<p class="event_date">
                              <label class="event_date" for="startdate">event Start date
                              <input type="date">
                              <label class="event_date" for="enddate">event End date
							  <input type="date"></label>
								</p>

								<label class="Volunteernumber" for="Volunteernumber"> Enter the Volunteers number
								<input type="number" for="Volunteernumber"></label>

							</p>
                                
                            
                              <input class="submiteventform" type="submit" value="Submit Now">
                            </form>
                          </div>
						
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
                    <h2>You Can easly share the new event</h2>
                    <p class="footer-org">
                    <pre>1.Click Add event button                  2.Fill the event form                  3.Share it to Volunteers</pre>
                   
                    </p>
				</div>
			</section>

		
		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
@endsection 