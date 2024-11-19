<h1>Stored Data</h1>

@if (!empty($data))
    <p><strong>Name:</strong> {{ $data['petsAllowed'] }}</p>
    <p><strong>Email:</strong> {{ $data['smokingAllowed'] }}</p>
@else
    <p>No data found in session.</p>
@endif