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

<div> </div>

{{-- @yield('content') --}}

@endsection