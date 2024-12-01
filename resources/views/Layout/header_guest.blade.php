<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlexiRent</title>
    <link rel="stylesheet" href="{{('/Frontend/css/header.css')}}" />
    <link rel="icon" type="image/x-icon" href="{{('/Frontend/Image/favicon/FlexiRent.png')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->

    {{-- Boostrapp --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</head>

<body>
    <header>

        <div class="header-container">
            <div class="header-logo">
                <a href="{{URL::to('/HomePage')}}">FlexiRent</a>
            </div>

            <div class="header-nav">
                <nav>
                    <ul>
                        <a href="{{URL::to('/HomePage')}}">Home</a>

                        <div class="custom-dropdown">
                            <button class="custom-dropdown-toggle" type="button">
                                <a class="custom-dropdown-item" href="{{ URL::to('/Landlord') }}">Landlords</a>
                            </button>
                            <ul class="custom-dropdown-menu">
                                <li><a class="custom-dropdown-link" href="{{ URL::to('/landlord/dashboard') }}">Manage Rental</a></li>
                            </ul>
                        </div>

                        <a href="{{URL::to('/Blog')}}">Blog</a>
                        <a href="{{URL::to('/Contact')}}">Contacts</a>


                        {{-- @if (Route::has('register'))
                        <form action="{{ route('register') }}">
                            
                            <button class="animated-dark-green-btn" style="color: white">Join Us!</button>

                        </form>
                        @endif --}}
                        @if (Route::has('login'))
                            <nav class="">
                                @auth
                                    {{-- <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a> --}}
                                    <form action="{{ url('/dashboard') }}">
                            
                                        <button class="animated-dark-green-btn" style="color: white; width: 100%;">Dashboard</button>
            
                                    </form>
                                @else

                                    @if (Route::has('register'))
                                        <form action="{{ route('register') }}">
                                
                                            <button class="animated-dark-green-btn" style="color: white; width: 100%;">Join Us!</button>
                
                                        </form>
                                    @endif
                                @endauth
                            </nav>
                        @endif


            </div>

            </ul>
            </nav>
        </div>


        </div>

    </header>

    <main>
        @yield('content')

    </main>
    {{-- <div style="height: 550px; background-color:red;" > --}}



    {{-- </div> --}}



</body>

</html>