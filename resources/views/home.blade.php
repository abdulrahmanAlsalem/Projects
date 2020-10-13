@extends('layouts.app')

@section('content')

@if (Auth::user()->role == 'Orgnaization')
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
        
            <!-- Banner animation --> 
        <section id="banner">
            <div class="inner">
                <h2 class="vtitle"> Welcome {{ Auth::user()->name }} organization </h2>
                <h1 class="vtitle">As an organization you can Add and share new volunteer event</h1>
                
            </div>
        </section>

    <!-- Highlights -->
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
                        
                          <label class="event_place" for="eventplace">Where will the event be held?
                          <input type="text" id="eventplace" name="eventplace" placeholder=""></label>
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

    
    <!-- Footer -->
 @else  

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
    
		<!-- Banner animation -->
		
			<section id="banner">
				<div class="inner">
                <h2 class="vtitle"> Welcome {{ Auth::user()->name }} </h2>
					<h1 class="vtitle">With Volunteering Platform</h1>
					<p> you can easily join events around you
					</p>
				</div>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<center><p class="h-title">avaiable Volunteering Events :</p></center>
					
					<div class="highlights">
					
						<!-- Events Card (each section has one event card .. ) -->
						<section>
							<div class="content">
                                <div class="Events_card">
                                    <header> <img src="/images/Group9.png" alt="" style="width:100%"></header> 

                                    <div class="Event_container">
                                    <p class="Event_title"> Event name</p>
                                    <p class="Event_dis">Brief description</p>
                                    <div class="Event_details">
                                        <p id="volunteer_numbers" class="icon fa-users" style="font-size: large">20</p>
                                        <p id="Event_dates" class="icon  fa-calendar " style="font-size: large">. 3 Sep</p> 
                                    </div>
                                    </div>
                                    <button class="joiniing">Join this event</button>
                                </div>
							</div>
                        </section>
                        <section>
							<div class="content">
                                <div class="Events_card">
                                    <header> <img src="/images/Group9.png" alt="" style="width:100%"></header> 

                                    <div class="Event_container">
                                    <p class="Event_title"> Event name</p>
                                    <p class="Event_dis">Brief description</p>
                                    <div class="Event_details">
                                        <p id="volunteer_numbers" class="icon fa-users" style="font-size: large">20</p>
                                        <p id="Event_dates" class="icon  fa-calendar " style="font-size: large">. 3 Sep</p> 
                                    </div>
                                    </div>
                                    <button class="joiniing">Join this event</button>
                                </div>
							</div>
                        </section>
                        <section>
							<div class="content">
                                <div class="Events_card">
                                    <header> <img src="/images/Group9.png" alt="" style="width:100%"></header> 

                                    <div class="Event_container">
                                    <p class="Event_title"> Event name</p>
                                    <p class="Event_dis">Brief description</p>
                                    <div class="Event_details">
                                        <p id="volunteer_numbers" class="icon fa-users" style="font-size: large">20</p>
                                        <p id="Event_dates" class="icon  fa-calendar " style="font-size: large">. 3 Sep</p> 
                                    </div>
                                    </div>
                                    <button class="joiniing">Join this event</button>
                                </div>
							</div>
                        </section>
                        
                        
                        
					
						
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					
				</div>
			</section>

        </body>
@endif
@endsection 
