@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="content">

                <div class="signup_form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <img src="{{asset('support1.png')}}">
                        <div><h2>{{ __('Register ') }}</h2></div>
                        <div>
                            <label for="role">{{ __('Role') }}</label>

                            <div>
                                <select class="select" name="role" id="role"> 
                                    <option value="Orgnaization">Orgnaization</option>
                                    <option value="Volunteer">Volunteer</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            {{-- <label for="name">{{ __('Name') }}</label> --}}

                            <div>
                                <input id="name" type="text" placeholder="{{ __('Name') }}" class="input_box @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Orgnaization E-mail address') }}</label> --}}

                            <div>
                                <input id="email" type="email" placeholder="{{ __('E-mail address') }}" class="input_box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- //  -->
                        <div>
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Orgnaization Contact Information') }}</label> --}}

                            <div>
                                <input id="orgnaizationNumber" type="text" placeholder="{{ __('Contact number') }}" class="input_box @error('orgnaizationNumber') is-invalid @enderror" name="orgnaizationNumber" value="{{ old('orgnaizationNumber') }}" required autocomplete="orgnaizationNumber">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- //  -->
                        <div>
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div>
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="input_box @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                            <div>
                                <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="input_box" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="signup_btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
