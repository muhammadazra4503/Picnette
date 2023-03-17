@extends('layouts.nav-landing')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}" />
<div class="container">
  <form method="POST" action="{{ route('login') }}">
    @csrf
      <div class="row">
        <div class="col">
          <h3>Login</h3>
          <hr>
          <h1>Log In</h1>
          <p>Dont Have Account? <a href="{{ route('register') }}">{{ __('Create Account') }}</a></p>
          <div class="mb-3">
            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="mb-3">
            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
            </div>  
          </div>
          <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
          </button>
        </div>
        <div class="col">
          <p><img align="right" src="{{URL::asset('/image/auth-pic.png')}}" alt="picnette"></p>
        </div>
      </div>
  </form>
</div>
@endsection