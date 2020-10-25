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
		<link href="{{ asset('css/cards.css') }}" rel="stylesheet">

	</head>
	<body class="is-preload">


            <!-- Banner animation -->

        <section id="banner">
            <div class="inner">
                <h2 class="vtitle"> Welcome {{ Auth::user()->name }}</h2>
                <h1 class="vtitle">Share volunteering opportunities with people around you </h1>

            </div>
        </section>

    <!-- Highlights -->

    <section class="wrapper">
        <div class="inner">
            <center><p class="h-title">Volunteering goals</p></center>
            <header class="special">
                <h3>Volunteering is a voluntary act of an individual or group freely giving time and labour for community service.</h3>
                     </header>
            <div class="highlights">
                <!-- 1 -->
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-star-o "><span class="label">Icon</span></a>
                            <h3>Improving skills</h3>
                        </header>
                        <p>Volunteering allows an individual to learn new skills and improve it.</p>
                    </div>
                </section>
                <!-- 2 -->
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-globe"><span class="label">Icon</span></a>
                            <h3>Community cooperation</h3>
                        </header>
                        <p>The volunteering lead to cooperation between members of the community.</p>
                    </div>
                </section>
                <!-- 3 -->
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-users"><span class="label">Icon</span></a>
                            <h3>Improving Social skills</h3>
                        </header>
                        <p>Volunteering gives you an opportunity to change people's lives, including your own. It gives you the satisfaction of playing a role in someone else's life.</p>
                    </div>
                </section>

            </div>
        </div>
    </section>

    {{-- testing the event page  --}}

    {{-- <section class="wrapper">
        <div class="inner">
            <center><p class="h2-title">Event description</p></center>

            <div>

            </div>

                <div class="event_description">

                    <form action="#">
                        <p class="event_info">
                    <span>

                            <label class="event_name2" >Event Name : </label>
                            <label class="org_name2" >Orgnaization Name : </label>


                      </span>


                      <label class="event_dis" for="eventdis">About the event:
                          <label class="des_field" for=""  >

                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                               It has survived not only five centuries, but also the leap into electronic typesetting,
                               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum
                          </label>


                      <span>

                            <label class="event_date1" for="startdate">Event Start date:</label>
                            <label class="event_date2" for="enddate">Event End date:</label>

                      </span>


                        <label class="Volunteernumber" for="Volunteernumber">Number of required volunteers:


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
        </section> --}}


    <!-- Footer -->
    <section id="cta" class="wrapper">
        <div class="inner">
            <h2>You Can easly share new events</h2>
            <p class="footer-org">
            <pre>1.Click create event button                  2.Fill the form                  3.Share it with Volunteers</pre>

            </p>
        </div>
    </section>

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
					<p>Find volunteering opportunities around you
					</p>
				</div>
			</section>

        <!-- Highlights -->

			<section class="wrapper">
				<div class="inner">
					<center><p class="h-title">available Volunteering Events :</p></center>

					<div class="highlights">

						<!-- Events Card (each section has one event card .. ) -->
                        @foreach($events as $event)
						<section>
							<div class="content">
                                <div class="Events_card">
                                    <header> <img src="/images/Group9.png" alt="" style="width:100%"></header>

                                    <div class="Event_container">
                                    <p class="Event_title"> {{$event->title}}</p>
                                    <p class="Event_dis">{{Illuminate\Support\Str::words($event->description,20)}}</p>
                                    <div class="Event_details">
                                        <p id="volunteer_numbers" class="icon fa-users" style="font-size: large"> {{$event->required_volunteers}}</p>
                                        <p id="Event_dates" class="icon  fa-calendar " style="font-size: large"> {{$event->start_date->format('d M h:00')}} - {{$event->end_date->format('d M h:00')}}</p>
                                    </div>
                                    </div>
                                    @unless(Auth::user()->inEvents()->find($event->id))
                                        <form method="post" action="/Event/{{$event->id}}">
                                            @csrf
                                            <button href="{{ asset('/eventpage.blade.php') }}" class="joiniing" >Join this event</button>

                                        </form>
                                    @endunless
                                </div>
							</div>
                        </section>
                        @endforeach





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
