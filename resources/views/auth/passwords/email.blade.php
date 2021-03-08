@extends('layouts.app')

@section('title','Password Reset')

@section('content')

<div class="container">

    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Reset Password') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form method="POST" action="{{ route('password.email') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Send Password Reset Link') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}




<div class="row">
    <div class="col-md-8 col-offset-2">
        <div class="JoinForm">
            <h1>{{ __('Reset Password') }}</h1>
            {{--<div class="JoinForm-tabs">--}}
              {{--<span class="JoinForm-tab ">--}}
                {{--<span>Sign In</span>--}}
              {{--</span>--}}
            {{--</div>--}}

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <div class="JoinForm-form">

                <form method="POST" action="{{ route('password.email') }}" class="Form Form--wide Form--transparent">
                    @csrf
                    <label for="email" class="Form-label">{{ __('E-Mail Address') }}</label>
                    <input class="Form-field" id="email" type="email" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <div class="JoinForm-submit">
                        <button class="Button Button--fullWidth" type="submit">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection
