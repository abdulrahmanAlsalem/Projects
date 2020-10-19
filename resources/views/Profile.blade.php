@extends('layouts.app')
@section('content')

<head>
    <title>Profile</title>
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
        <div class="col-xl-10 order-xl-1">
                      <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                          <div class="row align-items-center">
                            <div class="col-8">
                            <h3 class="mb-0">{{$user->name}}</h2>
                            </div>
                            <div class="col-4 text-right">
                                @if (Auth::User()->id == $user->id)
                            <a href="/Profile/{{Auth::User()->id}}/Edit" class="btn btn-sm btn-primary">Edit</a>
                                @endif
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <form>
                              <div>
                            {{-- <h3 class="heading-small text-muted mb-4">Information</h3> --}}
                            <div class="pl-lg-4">
                                   {{-- <div class="col-1" style="float: right;"> --}}
                                    
                                    </div>
                                    <div class="row" style="float: right;">
                                     <div class="col-lg-8">
                                      <div class="form-group focused">
                                      <img style="  vertical-align: middle;
                                        width: 200px;
                                        height: 200px;
                                        border-radius: 10%;
                                        object-fit: contain;" src="{{asset($user->image)}}">
                                      </div>
                                    </div>
                                    </div>
                              <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group focused">
                                  {{--<label class="form-control-label" for="input-first-name">--}}<div style="font-weight: bold"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-badge-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                                </svg> : {{$user->name}}</div>
                                  </div>
                                </div>
                            </div>
                                 {{-- picture --}}
                              <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group focused">
                                    {{-- <label class="form-control-label" for="input-first-name">{{($user->role == 'Orgnaization') ? 'Telephone Number' : 'Phone Number'}} --}}
                                        <div style="font-weight: bold"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                          </svg> : {{($user->role == 'Orgnaization') ? $user->telephone_number : $user->phone_number}}</div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="heading-small text-muted mb-4">About: </h3>
                              <div class="row">
                               <div class="col-lg-8">
                                  <div class="form-group focused">
                                    {{$user->description}}
                                   
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    {{-- <hr class="my-4"> --}}
                    <!-- Address -->
                            </div>
                           
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </section>


    <!-- CTA -->
    	<!-- Footer -->
			{{-- <section id="cta" class="wrapper">
				<div class="inner">
                    <h2>You Can easly join to volunteering event</h2>
                    <p class="footer-org">
                    <pre>1.Click Add event button                  2.Look at the events list                  3.Click Join this event</pre>
                   
                    </p>
				</div>
			</section> --}}

		
	
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

{{-- @if (Auth::User()->id == $user->id)
<form method="POST" enctype="multipart/form-data" action="/Profile/{{$user->id}}">
    @csrf
    @method('put')
<input type="file" name="image">
<input type="submit" value="Upload">
</form>
<button><a> Edit</a></button>
@endif --}}
    
@endsection