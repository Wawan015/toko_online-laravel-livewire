<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> -->

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->

        <!-- Scripts -->
        <!-- <script src="{{ mix('js/app.js') }}" defer></script> -->
    <!-- </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('style.css')}}">
    @livewireStyles
    <title>E Commerce</title>
</head>
<body>
   
    <div class="log_in">
        <div class="container">
            <div class="row">
              <div class="col-sm">
                
              </div>
              <div class="col-sm">
                
              </div>
              
              <div class="col-sm">
                
                @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype === 'ADM')
                        <a class="log_in_link" href="">My Account({{Auth::user()->name}})</a>
                        <a class="log_in_link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <a class="log_in_link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                          @csrf
                        </form>
                    @else
                        <a class="log_in_link" href="">My Account({{Auth::user()->name}})</a>
                        <a class="log_in_link" href="{{ route('user.dashboard') }}">Dashboard</a>
                        <a class="log_in_link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                          @csrf
                        </form>

                    @endif
                    @else
                        <a class="log_in_link "  href="{{route('login')}}">Log In</a>
                        <a class="log_in_link" href="{{route('register')}}">Register</a>
                    @endif
                @endif
              </div>
            </div>
          </div>
        
    </div>




<div class="clear">

</div>
{{$slot}}

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>