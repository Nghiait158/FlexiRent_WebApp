@extends('Layout/header_landlord')
@section('contentLandlord')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            <h2 class="mb-0">Landlord Profile.</h2>
            <p class="text-muted">Manage your personal information and login settings</p>
        </div>

        <!-- Personal Information Section -->
        <form action="{{URL::to('/updateLandlordDashboard/'.$currentLandlord-> landlord_id)}}" method="post"> 
            {{ csrf_field() }}
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="lastName" value="{{ $currentLandlord->last_name ?:'N/A'}}" >
                </div>
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="firstName" value="{{ $currentLandlord->first_name ?:''}}" >
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>           
                    <input id="phone" type="tel"name="phonenumber" class="form-control" placeholder="Please fill phone number" value="{{ $currentLandlord->phonenumber ?:''}}">
                </div>
                <div class="col-md-6">
                    <label for="nationality" class="form-label">Nationality</label>
                    {{-- <input type="tel" class="form-control" id="nationality" value="{{ $currentLandlord->nationality ?:'Please fill your nationality'}}" > --}}
                    <select id="nationality" class="form-control" name="nationality">
                        <option value="" disabled {{ !$currentLandlord->nationality ? 'selected' : '' }}>Please select your nationality</option>
                        @php
                            $countries = [
                                'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua and Barbuda', 'Argentina', 
                                'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 
                                'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 
                                'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 
                                'Canada', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo (Congo-Brazzaville)', 
                                'Costa Rica', 'Croatia', 'Cuba', 'Cyprus', 'Czechia (Czech Republic)', 'Denmark', 'Djibouti', 
                                'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 
                                'Estonia', 'Eswatini (fmr. "Swaziland")', 'Ethiopia', 'Fiji', 'Finland', 'France', 'Gabon', 'Gambia', 
                                'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 
                                'Haiti', 'Honduras', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 
                                'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Korea (North)', 'Korea (South)', 
                                'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 
                                'Lithuania', 'Luxembourg', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 
                                'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Morocco', 
                                'Mozambique', 'Myanmar (formerly Burma)', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 
                                'Nicaragua', 'Niger', 'Nigeria', 'North Macedonia (formerly Macedonia)', 'Norway', 'Oman', 'Pakistan', 
                                'Palau', 'Palestine State', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 
                                'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 
                                'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 
                                'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'Spain', 'Sri Lanka', 'Sudan', 
                                'Sudan (South)', 'Suriname', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 
                                'Timor-Leste', 'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 
                                'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'Uruguay', 'Uzbekistan', 'Vanuatu', 
                                'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
                            ];
                        @endphp
                        @foreach($countries as $country)
                            <option value="{{ $country }}" {{ $currentLandlord->nationality == $country ? 'selected' : '' }}>
                                {{ $country }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>    
            <button type="submit" name="updateinfoLandlord" class="btn btn-info">Save</button>
        </form>
        
        <!-- Login Settings Section -->
        <div class="login-settings">
            <h5 class="mb-3">Login Settings</h5>
            <div class="row align-items-center mb-3">
                <div class="col-md-6 d-flex align-items-center">
                    <label for="email" class="form-label me-2">Email</label>
                    
                    <form action="{{ URL::to('/updateEmailLandlord/' . $currentLandlord->landlord_id) }}" method="POST" style="display: inline;">
                        {{ csrf_field() }}
                        <input id="email" name="email" class="form-control" value="{{ $currentLandlord->user->email}}">
                        <button type="submit" class="btn btn-change ms-3" style="cursor: pointer;">Change</button>
                    </form>
                    
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <label for="password" class="form-label me-2">Password</label>
                    <button onclick="window.location.href='{{ route('password.request') }}'" class="btn btn-change-full" style="cursor: pointer;">
                        Change my password
                    </button>
                    
                </div>
            </div>
        </div>
       
        
    </div>
    
    <div class="QuoteDashboardLandlord"> 
        <p>
            FlexiRent makes mid-term rentals easy for landlords. Connect to thousands of verified tenants looking for furnished apartments.
        </p>
    </div>
</div>
<div class="container12">
    <!-- Tenant Requests Section -->
    <div class="tenant-requests">
        <h2>Booking Request</h2>
        @foreach ($properties as $property)
            <h3>Property: {{ $property->property_name }}</h3>
            @if (isset($bookings[$property->property_id]) && $bookings[$property->property_id]->isNotEmpty())
                @foreach ($bookings[$property->property_id] as $index => $booking)
                    @if ($booking->status == 'pending')
                        <div class="tenant-card">
                            <img src="https://cdn-icons-png.flaticon.com/512/2558/2558089.png" alt="Profile" class="profile-pic">
                            <div class="tenant-info">
                                <p class="name">{{ $booking->guest->last_name ?? 'Guest not available' }}</p>
                                <p class="property-type">Check-in: {{ $booking->check_in }}</p>
                                <p class="property-type">Check-out: {{ $booking->check_out }}</p>
                                <p class="date">Cost: {{ $booking->total_cost }}</p>
                            </div>
                            <!-- Unique ID using property_id and index -->
                            <button class="view-btn" data-modal-id="modal-{{ $property->property_id }}-{{ $index }}">View</button>
                            <div class="modal" id="modal-{{ $property->property_id }}-{{ $index }}">
                                <div class="modal-content">
                                    <div class="booking-container">
                                        <span class="close" data-modal-id="modal-{{ $property->property_id }}-{{ $index }}">Close</span>
                                        <h2>Booking Details</h2>
                                        <!-- Booking Card -->
                                        <div class="booking-card">
                                            <div class="header">
                                                <h3>Booking for {{ $booking->guest->last_name ?? 'Guest not available' }}</h3>
                                                <p>Property ID: {{ $booking->property->property_name ?? 'Property not available' }}</p>
                                            </div>
                                            <div class="contentBookingcard">
                                                <p><strong>Check-in:</strong> {{ $booking->check_in }}</p>
                                                <p><strong>Check-out:</strong> {{ $booking->check_out }}</p>
                                                <p><strong>Total Cost:</strong> {{ $booking->total_cost }}</p>
                                                <p><strong>Purpose of Stay:</strong> {{ $booking->PurposeOfStay }}</p>
                                                <p><strong>Explanation:</strong> {{ $booking->purposeExplain }}</p>
                                                <hr>
                                                <h4>Booking on behalf of someone else</h4>
                                                <p><strong>Other Name:</strong> {{ $booking->other_name ?? 'Customers book for themselves' }}</p>
                                                <p><strong>Other Email:</strong> {{ $booking->other_email ?? 'Customers book for themselves' }}</p>
                                                <hr>
                                                <p><strong>Status:</strong> {{ $booking->status ?? 'N/A' }}</p>
                                                <p><strong>Payment Method:</strong> {{ $booking->payment_method ?? 'N/A' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p>No bookings available for this property.</p>
            @endif
        @endforeach
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.view-btn').forEach(button => {
                const modalId = button.dataset.modalId;
                const modal = document.getElementById(modalId);
                const closeButton = modal.querySelector('.close');
    
                // Open the modal when the button is clicked
                button.onclick = () => modal.style.display = "block";
    
                // Close the modal when the close button is clicked
                closeButton.onclick = () => modal.style.display = "none";
    
                // Close the modal when clicking outside of it
                window.onclick = event => {
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                };
            });
        });
    </script>
    
    
    

    <!-- Lease Status Section -->
    <div class="lease-status">
      <h2>Property Status</h2>
      <div class="lease-card">
        <img src="apartment1.jpg" alt="Apartment" class="apartment-pic">
        <div class="lease-info">
          <p class="property-type">5BHK Apartment</p>
          <p>Ending: <span class="date">23 Mar 2019</span></p>
          <p>Tenants: <span class="count">12</span></p>
          <p>Rent: <span class="rent">KES 15,000</span></p>
          <p>Left: <span class="days-left">1 Day</span></p>
        </div>
      </div>
      <!-- Repeat .lease-card for other apartments -->
    </div>
  </div>
</div>

{{-- @yield('content') --}}

@endsection