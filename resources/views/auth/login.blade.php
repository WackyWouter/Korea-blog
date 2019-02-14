<!DOCTYPE html>
<html style="height:100%;" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('storage/upload/icons/'. 'icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('storage/upload/icons/'. 'icon32.png')}}" sizes="32x32">

    <link rel="icon" type="image/x-icon" href="{{asset('storage/upload/icons/'. 'icon.ico')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/upload/icons/'. 'icon.ico')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">
    <style media="screen">
      .row{
        margin-right: 0px;
        margin-left: 0px;
      }
    </style>
</head>
<body style="height:100%;">
  <div style="height:100%;" id="app">
    <main id="gridLogin" >
      <div id="background">

      </div>
      <div id="loginColumn">
        <div id="loginContainer">
          <p id="title">Inloggen</p>
          <form  id="loginForm"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf

              <div class="form-group row">
                  <label for="email" class="col-4 col-form-label text-right">{{ __('E-Mail Adres') }}</label>

                  <div class="col-6">
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-4 col-form-label text-right">{{ __('Wachtwoord') }}</label>

                  <div class="col-6">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-6 offset-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Onthoud gegevens') }}
                          </label>
                      </div>
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-8 offset-4">
                      <button type="submit" class="btn btn-danger">
                          {{ __('Inloggen') }}
                      </button>
                      <a type="submit" id="rmWebkitAppearance" style="-webkit-appearance:none;"class="btn btn-danger" href="{{ route('register') }}">
                          {{ __('Registreren') }}
                      </a> <br>

                      <a class="btn red" style="padding:3px;marginTop:10px;" href="{{ route('password.request') }}">
                          {{ __('Wachtwoord vergeten?') }}
                      </a>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </main>
  </div>
  <script type="text/javascript">

    if (screen.width >= 800){
        document.getElementById('background').style.backgroundImage = "url({{asset('storage/upload/background/seoul'. (string) rand(1,5) . '.jpg')}})";

    }

  </script>
</body>
