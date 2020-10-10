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
					<center><p class="h2-title">Volunteer Profile Page</p></center>
					<div class="col-xl-8 order-xl-1">
                        <div class="card bg-secondary shadow">
                          <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                              <div class="col-8">
                                <h3 class="mb-0">My account</h3>
                              </div>
                              <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Edit</a>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <form>
                              <h3 class="heading-small text-muted mb-4">Volunteer information</h3>
                              <div class="pl-lg-4">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group focused">
                                      <label class="form-control-label" for="input-username">Username</label>
                                      <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group focused">
                                      <label class="form-control-label" for="input-username">Email</label>
                                      <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Email">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group focused">
                                      <label class="form-control-label" for="input-first-name">First name</label>
                                      <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" >
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group focused">
                                      <label class="form-control-label" for="input-last-name">Last name</label>
                                      <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr class="my-4">
                              <!-- Address -->
                              <!-- <h6 class="heading-small text-muted mb-4">Contact information</h6> -->
                              <div class="pl-lg-4">
                                </div>
                                <div class="row">
                                  <div class="col-lg-4">
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
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group focused">
                                      <label class="form-control-label" for="input-country">Phone number</label>
                                      <input type="text" id="input-phone" class="form-control form-control-alternative" placeholder="Phone number" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr class="my-4">

                              <!-- Description -->
                              <h3 class="heading-small text-muted mb-4"> About The Volunteer</h3>
                              <div class="pl-lg-4">
                                <div class="form-group focused">
                                  <label>Description</label>
                                  <textarea rows="4" class="form-control form-control-alternative" placeholder="A brief description about volunteer"></textarea>
                                </div>
                              </div>
                                <center><a href="#!" class="btn btn-sm btn-primary"> Save</a> <center>

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
			<section id="cta" class="wrapper">
				<div class="inner">
                    <h2>You Can easly join to volunteering event</h2>
                    <p class="footer-org">
                    <pre>1.Click Add event button                  2.Look at the events list                  3.Click Join this event</pre>
                   
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
