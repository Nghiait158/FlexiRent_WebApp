@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Update property amenity into database
            </header>
            @if ($message = Session::get('message'))
            <span class="text-alert">{{ $message }}</span>
            {{ Session::forget('message') }}
            @endif
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/updatePropertyAmenity/' . $editPropertyAmenity->property_id . '/' . $editPropertyAmenity->amenity_id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="property_id">Property ID</label>
                            <select name="property_id" id="property_id" class="form-control" required>
                                <option value="">-- Select Property --</option>
                                @foreach ($properties as $property)
                                <option value="{{ $editPropertyAmenity->property_id }}">{{ $property->property_name }} (ID: {{ $property->property_id }} || Location: {{ $property->location }} ||
                                    Owner: {{ $landlords->where('landlord_id', $property->landlord_id)->first() ? ($landlords->where('landlord_id', $property->landlord_id)->first()->first_name . ' ' . $landlords->where('landlord_id', $property->landlord_id)->first()->last_name) : 'N/A' }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="amenity_id">Amenity ID</label>
                            <select name="amenity_id" id="amenity_id" class="form-control" required>
                                <option value="">-- Select Amenity --</option>
                                @foreach ($amenities as $amenity)
                                <option value="{{ $editPropertyAmenity->amenity_id }}">{{ $amenity->amenity_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" name="updatePropertyAmenity" class="btn btn-info">Update Property Amenity</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection