
<div class="container">
    <h1>Property Details Summary</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">Address</div>
        <div class="card-body">
            <p>{{ $propertyData['address']['address-input'] ?? 'Not Provided' }}</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Details</div>
        <div class="card-body">
            @if(!empty($propertyData['details']))
                <ul>
                    <li>Area: {{ $propertyData['details']['area'] }}</li>
                    <li>Accommodation Type: {{ $propertyData['details']['accommodation_type'] }}</li>
                    <li>Floor: {{ $propertyData['details']['floor'] }}</li>
                    <li>Guest Capacity: {{ $propertyData['details']['guest_capacity'] }}</li>
                    <li>Rooms: {{ $propertyData['details']['room'] }}</li>
                </ul>
            @else
                <p>Not Provided</p>
            @endif
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Services</div>
        <div class="card-body">
            @if(!empty($propertyData['services']))
                <ul>
                    <li>WiFi: {{ $propertyData['services']['wifi'] ? 'Yes' : 'No' }}</li>
                    <li>Internet Speed: {{ $propertyData['services']['internetSpeed'] ?? 'Not Provided' }}</li>
                </ul>
            @else
                <p>Not Provided</p>
            @endif
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Amenities</div>
        <div class="card-body">
            @if(!empty($propertyData['amenities']))
                <ul>
                    @foreach($propertyData['amenities'] as $amenity => $value)
                        <li>{{ ucfirst($amenity) }}: {{ $value ? 'Yes' : 'No' }}</li>
                    @endforeach
                </ul>
            @else
                <p>Not Provided</p>
            @endif
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Images</div>
        <div class="card-body">
            @if(!empty($propertyData['images']))
                <ul>
                    <li>Image Path: {{ $propertyData['images']['propertyImg_name'] }}</li>
                </ul>
                @if(str_starts_with($propertyData['images']['propertyImg_name'], 'http'))
                    <img src="{{ $propertyData['images']['propertyImg_name'] }}" alt="Property Image" style="max-width: 100%;">
                @else
                    <img src="{{ asset($propertyData['images']['propertyImg_name']) }}" alt="Property Image" style="max-width: 100%;">
                @endif
            @else
                <p>Not Provided</p>
            @endif
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Description</div>
        <div class="card-body">
            <p>Title: {{ $propertyData['describe']['ListingTitle'] ?? 'Not Provided' }}</p>
            <p>Education and Community: {{ $propertyData['describe']['education_and_community'] ?? 'Not Provided' }}</p>
            <p>Description: {{ $propertyData['describe']['description'] ?? 'Not Provided' }}</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Price</div>
        <div class="card-body">
            <ul>
                <li>Price per Month: {{ $propertyData['price']['price_per_month'] ?? 'Not Provided' }}</li>
                <li>Security Deposit: {{ $propertyData['price']['security_deposit'] ?? 'Not Provided' }}</li>
                <li>Cleaning Fee: {{ $propertyData['price']['cleaning_fee'] ?? 'Not Provided' }}</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Rules</div>
        <div class="card-body">
            <ul>
                <li>Pets Allowed: {{ $propertyData['rules']['petsAllowed'] ?? 'No' }}</li>
                <li>Smoking Allowed: {{ $propertyData['rules']['smokingAllowed'] ?? 'No' }}</li>
                <li>Additional Rules: {{ $propertyData['rules']['rules'] ?? 'None' }}</li>
            </ul>
        </div>
    </div>

    <a href="{{ route('property.add.address') }}" class="btn btn-primary">Edit Details</a>
</div>
@endsection
