@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List of property amenity in the database
        </div>
        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>property_id</th>
                        <th>amenity_id</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allPropertyAmenity ?? [] as $propertyAmenity)
                    <tr>
                        <td><span class="text-ellipsis">{{ $propertyAmenity->property_id }} </span></td>
                        <td><span class="text-ellipsis">{{ $propertyAmenity->amenity_id ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $propertyAmenity->created_at ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $propertyAmenity->updated_at ?:'N/A' }}</span></td>
                        <td>
                            <a class="active styling-edit" ui-toggle-class="" href="{{ URL::to('/editPropertyAmenity/'.$propertyAmenity->property_id.'/'.$propertyAmenity->amenity_id) }}">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>

                            <a class="active styling-edit" ui-toggle-class="" href="{{ URL::to('/deletePropertyAmenity/'.$propertyAmenity->property_id.'/'.$propertyAmenity->amenity_id) }}">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection