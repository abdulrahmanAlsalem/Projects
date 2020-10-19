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
  
  
	<body class="is-preload">

	
		<!-- Banner -->

		<!-- Highlights -->
    <section class="wrapper">
      <div class="inner">
        <div class="col-xl-10 order-xl-1">
                      <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                          <div class="row align-items-center">
                            <div class="col-8">
                            <h3 class="mb-0">{{$user->name}}</h3>
                            </div>
                            
                          </div>
                        </div>
                        <div class="card-body">
                          <form method="POST" enctype="multipart/form-data" action="/Profile/{{$user->id}}">
                            @csrf
                            @method('put')
                            {{-- <div class="pl-lg-4">
                              <div class="col-1">
                                <img src="/{{$user->image}}">
                                </div>
                              <input type="file" name="image" style="margin-top: 10px">
                              @error('image')
                                  <strong>{{$message}}</strong>
                              @enderror --}}

                             

                              <div class="row" style="position:absolute; left:75%; float: right;">
                                <div class="col-lg-8">
                                 <div class="form-group focused">
                                 <img style="  vertical-align: middle;
                                   width: 200px;
                                   height: 200px;
                                   border-radius: 10%;
                                   object-fit: contain;" src="{{asset($user->image)}}">
                                 </div>
                                 <input type="file" name="image">
                                 @error('image')
                                     <strong style="color: crimson">{{$message}}</strong>
                                 @enderror
                               </div>
                               </div>
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group focused">
                                    <label class="form-control-label" for="input-first-name">Name</label>
                                  <input name="name" type="text" id="input-first-name" class="form-control form-control-alternative" value="{{$user->name}}">
                                  </div>
                                </div>
                                  {{-- picture --}}
                              </div>
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group focused">
                                    <label class="form-control-label" for="input-first-name">{{($user->role == 'Orgnaization') ? 'Telephone Number' : 'Phone Number'}}</label>
                                  <input name="contact_number"type="text" id="input-phone" class="form-control form-control-alternative" value="{{($user->role == 'Orgnaization') ? $user->telephone_number : $user->phone_number}}" >
                                  @error('contact_number')
                                  <strong style="color: crimson">{{$message}}</strong>
                                  @enderror
                                  </div>
                                </div>
                            </div>
                            <!-- <hr class="my-4"> -->
                            <!-- Address -->
                            <!-- <h6 class="heading-small text-muted mb-4">Contact information</h6> -->
                           
                              <!-- <div class="row"> -->
                                <!-- <div class="col-lg-4">
                                  <div class="form-group focused">
                                    <label class="form-control-label" for="input-city">City</label>
                                    <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" >
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group focused">
                                    <label class="form-control-label" for="input-country">Country</label>
                                    <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" >
                                  </div>
                                </div> -->
                                <!-- <div class="pl-lg-4"> -->

                                  <!-- </div>
                                </div> -->
                                <!-- <div class="col-lg-4">
                                  <div class="form-group focused">
                                    <label class="form-control-label" for="input-country">Phone number</label>
                                    <input type="text" id="input-phone" class="form-control form-control-alternative" placeholder="Phone number" >
                                  </div>
                                </div> -->
                              {{-- </div> --}}
                            </div>
                            {{-- <hr class="my-4"> --}}

                            <!-- Description -->
                            {{-- <h3 class="heading-small text-muted mb-4">About:</h3> --}}
                            <div class="pl-lg-4">
                              <div class="form-group focused">
                                <label>Bio</label>
                              <textarea name="description" rows="4" class="form-control form-control-alternative" placeholder="Tell us your story">{{$user->description}}</textarea>
                              </div>
                            </div>
                              <center><input class="btn btn-sm btn-primary" type="submit" value="Save"> <center>

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
			{{-- <section id="cta" class="wrapper">
				<div class="inner">
                    <h2>You Can easly share the new event</h2>
                    <p class="footer-org">
                    <pre>1.Click Add event button                  2.Fill the event form                  3.Share it to Volunteers</pre>
                   
                    </p>
				</div>
			</section> --}}

		
		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

@endsection 
