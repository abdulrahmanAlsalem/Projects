@extends('layouts.app')
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
