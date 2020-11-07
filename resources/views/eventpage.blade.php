@extends('layouts.app')
@section('header')
<script>
    function confirmation(caller){
        let msg;
        let form;
        switch (caller.value){
            case 'Delete Event' :
                msg = 'Are You Sure You Want To Delete This Event?';
                form = 'Delete';
                break;
            case 'Drop Out' :
                msg = 'Are You Sure You Want To Drop Out Of This Event?';
                form = 'Drop Out';
                break;
        }
        if(confirm(msg)){
            document.getElementById(form).submit();
        }
    }

</script>
@endsection
@section('content')

<head>
    <title>event page</title>
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
          <center><p class="h2-title">Event description</p></center>

          <div>

          </div>

              <div class="event_description">


                      <p class="event_info">
                          <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Check Out This Event On The Volunteering Platform." data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  <span>

                      <div class="theEvent">
                      <label class="event_field" >Event Name:
                      <p class="event_name1">{{$event->title ?? 'some name'}}</p>
                        </label>
                      </div>

                      <div class="theOrg">
                      <label class="org_name2" >Organizer:
                          <p class="org_name1"><a href="/Profile/{{$event->organizer->id ?? '#'}}">{{$event->organizer->name ?? 'some name'}}</a></p>
                       </label>
                      </div>
                          <hr>
                    </span>


                    <label class="event_dis" for="eventdis">About the event:
                        <p  class="des_field"   >

                            {{$event->description ?? 'some description'}}
                        </p>
                    </label>
                      <hr>
                    <span>


                          <div class="date1">
                          <label class="event_date1" for="startdate">Event Start Date:
                              <p class="st_date"> {{isset($event) ? $event->start_date->format('d M ') : '9 / 9'}}</p>
                          </label>
                           </div>


                          <div class="date2">
                          <label class="event_date2" for="enddate">Event End Date:
                              <p class="ed_date">{{isset($event) ? $event->end_date->format('d M') : '9 / 9'}}</p>
                          </label>
                      </div>

                    </span>



                        <div class="num_req">
                        <label class="Volunteernumber" for="Volunteernumber">Number Of Required Volunteers: </label>
                        <p class="volunteer_n">{{$event->required_volunteers ?? '5'}}</p>
                      </div>


                  </p>
{{--          @auth--}}
{{--          @if(Auth::user()->role==='Volunteer')--}}
{{--              @if( Auth::user()->inEvents()->find($event->id) )--}}
{{--                  @if(now() < $event->start_date)--}}
{{--                  <form id="Drop Out" method="post" action="/Event/{{$event->id}}">--}}
{{--                      @csrf--}}
{{--                      @method('delete')--}}

{{--                      <input onclick="return confirmation(this)" class="danger_button" type="Button" value="Drop Out">--}}
{{--                  </form>--}}
{{--                  @error('now')--}}
{{--                  <strong style="color: crimson">{{$message}}</strong><br>--}}
{{--                  @enderror--}}
{{--                      @endif--}}
{{--           @elseif($event->participants->count() < $event->required_volunteers)--}}
{{--          <form method="post" action="/Event/{{$event->id}}">--}}
{{--              @csrf--}}

{{--                    <input class="form_button" type="submit" value="Join">--}}
{{--                  </form>--}}
{{--              @endif--}}
{{--              @else--}}
{{--              @if(Auth::id() == $event->organizer_id && now() < $event->start_date)--}}
{{--                  @foreach($event->participants as $participant)--}}
{{--                      {{$participant->name}}--}}
{{--                      @endforeach--}}
          <div>
                  <label class ="Volunteernumber"> Participants: </label>
          @foreach([1,2,3,4,5] as $x)
              <div>
                  <p>mohammed{{$x}}&emsp;&emsp;&emsp;05555555555</p>
              </div>
          @endforeach
              </div>
{{--              <form id="Delete" method="post" action="/Event/{{$event->id}}">--}}
{{--                  @csrf--}}
{{--                  @method('delete')--}}

{{--                  <input onclick="return confirmation(this)" class="danger_button" type="button" value="Delete Event"/>--}}
{{--              </form>--}}
{{--                  @error('now')--}}
{{--                  <strong style="color: crimson">{{$message}}</strong><br>--}}
{{--                  @enderror--}}
{{--              @endif--}}
{{--          @endif--}}
{{--          @endauth--}}
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
