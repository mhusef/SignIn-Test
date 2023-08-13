<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin: 0;
        }
        #container{

            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;

            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            /* align-items: center; */
            gap: 10px;


        }



        #container nav{
            background-color: #093454;
            flex-direction: row;
            display: flex;
            justify-content: space-around;
            height: 80px;
            justify-content: center;
            align-items: center;
            gap: 40px;


        }
        nav a{

            display: flex;
            justify-content: center;
            align-items: center;

            width: 200px;
            height: 60px;

            font-weight: bold;
            text-align: center;
            color: black;
            text-decoration: none;
            transition: 1s;
            color: white;
        }

        nav a:hover:not(:first-child){
            border-bottom: 2px #093454 solid;
            background-color: #FFE5CA;
            box-sizing: border-box;
            color: black;
        }

        #container #setion1{
            background-color: aqua;
            height: 100px;
            display: flex;
            gap: 180px;
            justify-content: center;
            align-items: center;
        }
        #container #setion2{
            background-color: #eee;
            flex: 1;
            overflow: auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
            justify-content: center;
            align-items: center;

        }
        #container #setion2 img{
            background-color: red;
            margin: 0 auto;
            min-height: 200px;
            max-height: 200px;
               width: 200px;
            height: 200px;
        }

        #container #setion2 img{


        }
    </style>
</head>
<body>
    @include('layouts.navigation')


    <main>
        {{ $slot }}
    </main>
    <div id="container">
        <nav>
             <a href="https://google.com">
                <img src="/images/Logo2.png" width="50" height="50" alt="">
            </a>
             <a href="https://google.com">Home</a>
             <a href="https://google.com">Profile</a>
             <a href="https://google.com">logout</a>
          </nav>
        <div id="setion1">
            <div>g</div>
            <div>g</div>
        </div>
        <div id="setion2">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
            <img src="{{url('/images/Logo2.png')}}" alt="">
        </div>
    </div>


</body>
</html> --}}
