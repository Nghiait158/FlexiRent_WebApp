@extends('Layout/header_landlord')
@section('contentLandlord')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/landlordDashboard.css'; 
    document.head.appendChild(link);

    
</script>
<div class="container1 my-5">
    <div class="profile-card2 shadow p-4 rounded">
        <!-- Header -->
        <div class="profile-header text-center mb-4">
            <h2 class="mb-0">Landlord Profile</h2>
            <p class="text-muted">Manage your personal information and login settings</p>
        </div>

        <!-- Personal Information Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter last name" >
            </div>
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter first name" >
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>           
                <input id="phone" type="tel" class="form-control" placeholder="Enter phone number">
            </div>
            <div class="col-md-6">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="tel" class="form-control" id="nationality" placeholder="Enter nationality" >
            </div>
        </div>

        <!-- Login Settings Section -->
        <div class="login-settings">
            <h5 class="mb-3">Login Settings</h5>
            <div class="row align-items-center mb-3">
                <div class="col-md-6 d-flex align-items-center">
                    <label for="email" class="form-label me-2">Email</label>
                    <span id="email">trinhvantrungnghiabusiness@gmail.com</span>
                    <button class="btn btn-change ms-3">Change</button>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <label for="password" class="form-label me-2">Password</label>
                    <button class="btn btn-change-full">Change my password</button>
                </div>
            </div>
        </div>
        
        
    </div>
</div>



<h1>dasboard</h1>
<h1>dasboard</h1>
{{-- @yield('content') --}}
<a href="{{URL::to('landlord/add_property_address')}}">Go to add property</a>

@endsection