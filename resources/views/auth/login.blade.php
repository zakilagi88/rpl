@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-4">
                    <div class="row ml-auto m-2">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"> -->
                        <div class="col-lg-6 d-flex d-lg-block my-auto px-2">
                            <img src="{{ asset('img/stis.png') }}" class="img-fluid mx-2 justify-content-center p-2">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                                </div>

                                @if ($errors->any())
                                <div class="alert alert-danger border-left-danger" role="alert">
                                    <ul class="pl-4 my-2">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}" class="user">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required
                                            autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            placeholder="{{ __('Password') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                for="remember">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    <hr>

                                    <!-- <div class="form-group">
                                        <button type="button" class="btn btn-github btn-user btn-block">
                                            <i class="fab fa-github fa-fw"></i> {{ __('Login with GitHub') }}
                                        </button>
                                    </div>

                                    <div class="form-group">
                                        <button type="button" class="btn btn-twitter btn-user btn-block">
                                            <i class=s"fab fa-twitter fa-fw"></i> {{ __('Login with Twitter') }}
                                        </button>
                                    </div> -->

                                    <div class="form-group">
                                        <a class="btn btn-outline-info btn-block btn-user"
                                            href="{{ url('auth/google') }}"><img
                                                src="https://img.icons8.com/color/16/000000/google-logo.png">
                                            {{ __('Login with Google') }}
                                        </a>

                                        <a class="btn btn-outline-info btn-block btn-user"
                                            href="{{ url('auth/github') }}"><img
                                                src="https://img.icons8.com/ios-glyphs/20/000000/github.png">
                                            {{ __('Login with Github') }}
                                        </a>

                                    </div>

                                </form>

                                <hr>

                                <!-- @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                </div>
                                @endif -->

                                @if (Route::has('register'))
                                <div class="text-center">
                                    <a class="small"
                                        href="{{ route('register') }}">{{ __('Belum punya akun? Register') }}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection