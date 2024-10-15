@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                add-property-amenity-into-DB
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">

                <div class="position-center">
                    <form role="form" action="{{URL::to('/savePropertyAmenity')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="property_id">property_id</label>
                            <select name="property_id" id="property_id" class="form-control">
                                <option value="">-- Select Property --</option>
                                @foreach ($properties as $property)
                                <option value="{{$property->property_id}}">Name: {{$property -> property_name}} (ID: {{$property -> property_id}} || Location: {{$property -> location}} ||
                                    Owner:
                                    @php
                                    $landlord = $landlords->where('landlord_id', $property->landlord_id)->first();
                                    echo $landlord ? ($landlord->first_name . ' ' . $landlord->last_name) : 'N/A';
                                    @endphp

                                    )</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amenity_id">amenity_id</label>
                            <select name="amenity_id" id="amenity_id" class="form-control">
                                <option value="">-- Select Amenity --</option>
                                @foreach ($amenities as $amenity)
                                <option value="{{$amenity->amenity_id}}">{{$amenity->amenity_name}}</option>

                                @endforeach
                            </select>
                        </div>

                        <button type="submit" name="addPropertyAmenity" class="btn btn-info">Add property amenity</button>
                    </form>
                </div>

            </div>
        </section>
    </div>
    @endsection