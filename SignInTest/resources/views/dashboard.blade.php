{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <h1  class=" text-3xl">
                        <span class=" text-5xl text-red-600">Welcome</span> {{Auth::user()->name;}}
                    </h1>
                    <h6 class=" text-xs text-black/54">
                        {{Auth::user()->email;}}
                    </h6>
                    <div>
                        @auth
                        @if(auth()->user()->email_verified_at)
                            <!-- User is authenticated and email is verified -->
                            <h1 class="text-3xl text-blue-600 font-bold underline">gg</h1>
                        @else
                            <!-- User is authenticated but email is not verified -->
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>
                                        <x-primary-button>
                                            {{ __('Resend Verification Email') }}
                                        </x-primary-button>
                                    </div>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>
                            @endif
                    @else
                        <!-- User is not authenticated -->
                    @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
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
            margin: 0 auto;
            min-height: 200px;
            max-height: 200px;
               width: 200px;
            height: 200px;
        }

        #container #setion2 img{


        }

        #resend{
            margin-top: 5px;
            background-color: #093454;
            border: 0;
            color: #eee;
            font-weight: 900;
            height: 30px;
            border-radius: 20px;
        }
        #resendstate{
            color: green;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div id="container">
        <nav>
             <a href="{{ route('welcome') }}">
                <img src="/images/Logo2.png" width="50" height="50" alt="">
            </a>
            @auth
             <a href="{{ route('dashboard') }}">Home</a>
             <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
             @endauth

             @guest

             <a href="{{ route('login') }}">SignIn</a>
             <a href="{{ route('register') }}">SignUp</a>

             @endguest
          </nav>
        <div id="setion1">
            <div>
                @auth
                <h1  class=" text-3xl">
                    <span class=" text-5xl text-red-600">Welcome</span> {{Auth::user()->name;}}
                </h1>
                <h6 class=" text-sm text-black/54">
                    {{Auth::user()->email;}}
                </h6>
                <h1  class=" text-3xl">
                    <span class=" text-5xl text-red-600">Sellect Your Next Vacation</span>
                </h1>
                @endauth

                @guest
                <span class=" text-5xl text-red-600">Welcome</span> <a href="{{route('login')}}">SignIn</a> Please
                @endguest

            </div>
            @auth
            @if(!auth()->user()->email_verified_at)
                <!-- User is authenticated and email is verified -->
                <div>
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div id="resendstate">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <x-primary-button id="resend">
                                    {{ __('Resend Verification Email') }}
                                </x-primary-button>
                            </div>
                        </form>


                    </div>
                </div>
            @endif
            @endauth
        </div>
        <div id="setion2">
            @auth
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
            @endauth
        </div>
    </div>

</body>
</html>

