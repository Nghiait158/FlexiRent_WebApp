@extends('Layout/header_footer')
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
    link.href = '/Frontend/css/landlordpage.css'; // Your CSS file path
    document.head.appendChild(link);

</script>
<div class="sidebar">
    <div class="profile-card">
        <img src="{{ ('/Frontend/Image/landlordPage/8765781.png') }}" alt="Profile Picture" class="profile-img">
        <h2 class="profile-name">Hello Landlord 👋</h2>
        {{-- <a href="mailto:miawhite@gmail.com" class="profile-email">trinhvantrungnghia@gmail.com</a> --}}
    </div>
    
    <div class="menu">
        <div class="menu-section">
            {{-- <h4>Shop</h4> --}}
            <a href="{{ URL::to('/landlord/dashboard') }}" class="menu-item {{ request()->is('landlord/dashboard') ? 'active' : '' }}">
                <span class="icon">👨‍💻</span>
                <span class="text">Dashboard</span>
            </a>
            <a href="{{ URL::to('/landlord/myproperty') }}" class="menu-item {{ request()->is('landlord/myproperty') ? 'active' : '' }}">
                <span class="icon">🏠</span>
                <span class="text">My property</span>
            </a>
            <a href="{{ URL::to('/landlord/add_property_address') }}" class="menu-item">
                <span class="icon">📑</span>
                <span class="text">Property rental registration</span>
            </a>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
</div>
<div class="content">
    @yield('contentLandlord') 
</div>

   

@endsection