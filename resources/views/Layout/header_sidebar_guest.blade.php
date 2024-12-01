@extends('Layout/header_guest')
@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    body {
        font-family: "Lato";
        padding-top: 83px;
    }

    main {
        display: flex;
        /* justify-content: center; */
        /* padding-top: 60px; */

    }
</style>

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/Guest/header_sidebar_guest.css';
    document.head.appendChild(link);
</script>
<div class="sidebar">


    <div class="menu">
        <div class="menu-section">
            {{-- <h4>Shop</h4> --}}
            <a href="{{ URL::to('/guest/dashboard') }}" class="menu-item {{ request()->is('landlord/dashboard') ? 'active' : '' }}">
                <span class="icon"><img class="icon-img" src="/Frontend/Image/Guest/dashboard.png" alt=""></span>
                <span class="text">Dashboard</span>
            </a>
            <a href="{{ URL::to('/guest/myBookingPage') }}" class="menu-item">
                <span class="icon"><img class="icon-img" src="/Frontend/Image/Guest/booking.png" alt=""></span>
                <span class="text">Booking</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                    class="menu-item logout-button">
                    <span class="icon">
                        <img class="icon-img" src="/Frontend/Image/Guest/logout.svg" alt="Logout">
                    </span>
                    <span class="text">{{ __('Log Out') }}</span>
                </a>
            </form>

        </div>
    </div>
</div>
<div class="content">
    @yield('contentGuest')
</div>



@endsection