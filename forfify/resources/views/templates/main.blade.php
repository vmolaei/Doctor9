<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}"/>

        <title>{{config('appName','User Management System')}}</title>


        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css.map')}}" rel="stylesheet">

        <!-- JS -->
        <script src="{{asset('js/app.js')}}" defer></script>
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript" defer></script>
        <script src="{{asset('js/bootstrap.min.js.map')}}" type="text/javascript" defer></script>

        <script src="{{url('http://localhost:35729/livereload.js')}}"></script>

        <!-- Styles -->

    </head>
    <body class="body">

            <nav class="navbar navbar-expand-lg ">
                <div class="container">

                    <a class="navbar-brand" href="#">{{config('appName','User Management System')}}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Users</a>
                            </li>

                        </ul>
                        <div class="form-inline my-2  my-lg-0 mx-auto" >
                            @if (Route::has('login'))
                                <div >
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 text-decoration-none " >Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 text-decoration-none " >Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </nav>





        <main class="container">
            @yield('content')
        </main>


    </body>
</html>

