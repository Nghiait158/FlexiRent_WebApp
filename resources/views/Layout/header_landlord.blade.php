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
    link.href = '/Frontend/css/landlordDashboard.css'; // Your CSS file path
    document.head.appendChild(link);

</script>
<div class="sidebar">

    <div class="menu">
        <div class="menu-section">
            {{-- <h4>Shop</h4> --}}
            <a href="#" class="menu-item">
                <span class="icon">👨‍💻</span>
                <span class="text">Dashboard</span>
            </a>
            <a href="#" class="menu-item">
                <span class="icon">🏠</span>
                <span class="text">My property</span>
            </a>
            <a href="#" class="menu-item">
                <span class="icon">📑</span>
                <span class="text">Property rental registration</span>
            </a>
        </div>
        
    </div>
</div>
<div class="content">
    @yield('contentLandlord') 
</div>

   

@endsection