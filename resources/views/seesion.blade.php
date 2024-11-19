<h1>Stored Data</h1>

@if (!empty($data))
    @foreach( $data['rules'] as $rule)
        <p><strong>Rule:</strong> {{ $rule }}</p>
    @endforeach

    <p><strong>Rule:</strong> {{ $data['rules']['petsAllowed'] }}</p>


@else
    <p>No data found in session.</p>
@endif