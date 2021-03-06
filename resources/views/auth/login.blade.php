@extends('layouts.main')

@section('content')
    <section class="breadcrumb-area bg-img bg-overlay"
             style="background-image: url({{ asset('dist/img/bg-img/40.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mag-login-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="login-content bg-white p-30 box-shadow">

                        <div class="section-heading">
                            <h5>Great to have you back!</h5>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                            <div class="form-group">

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">

                                    <input class="custom-control-input form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="customControlAutosizing">Remember
                                        me</label>
                                </div>
                            </div>
                            {{--                            <button type="submit" class="btn mag-btn mt-30">Login</button>--}}
                            <button type="submit" class="btn mag-btn mt-30">
                                {{ __('Login') }}
                            </button>
                            <br/>
                            <div class="text-right"
                            @guest
                                @if (Route::has('register'))

                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                @endif
                                |
                            @endguest
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        @endif
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
