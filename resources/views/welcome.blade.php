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
        
	</head>
	<body class="is-preload">

        <!-- Banner -->
		
			<section id="banner">
				<div class="inner">
					<h1 class="vtitle">Volunteering Platform</h1>
					<p>Share and Find Volunteering events around you
					</p>
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

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>You Can Join Us Now</h2>
					<button  class="join-btn">As Volunteer</button> 
					<button  class="join-btn">As organization</button> 
				</div>
			</section>

		
		<!-- Footer -->
			

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/browser.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/breakpoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

	</body>
</html>

@endsection

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div >
            <div class="header">
                <a class="logo" href="/"><img src="images/logo.png" alt="logo" style="width: auto; height: 60px;"></a>
                <nav>   
                    <ul class="nav__links">
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/home') }}" class="btn">Home</a></li>
                            @else
                                <li><a href="{{ route('login') }}" class="btn">Login</a></li>
                                <li><a href="{{ route('register') }}" class="btn">Register</a></li>
                                
                            @endif
                    @endif
                        <li><a class="btn" href="{{ route('login') }}">Login</a></li>
                        <li><a class="btn" href="#">Events</a></li>
                        <li><a class="btn" href="#">contact us</a></li>
                    </ul>
        
                </nav>
                <div class="btns">
                    
                   <a class="btn" href="{{ route('register') }}">Register</a>
                    
                </div>
        
            </div>
        
            <div class="content">
                <p ><h1 style="color: white "> Home page </h1></p>
        
            </div>
            </div>
        </div>
    </body>
</html> --}}
