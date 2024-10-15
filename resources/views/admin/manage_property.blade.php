@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List of property in the database
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
                        <th style="width:30px;"></th>
                        <th>property_id</th>
                        <th>property_name</th>
                        <th>landlord_id</th>
                        <th>location</th>
                        <th>nbedrooms</th>
                        <th>nbathrooms</th>
                        <th>area</th>
                        <th>description</th>
                        <th>view</th>
                        <th>floor</th>
                        <th>elevator</th>
                        <th>price_per_month</th>
                        {{-- <th>created_at</th>
                        <th>updated_at</th> --}}

                    </tr>
                </thead>
                <tbody>
                    @foreach ($allProperty ?? [] as $property)
                    <tr>
                        <td>
                            <a class="active styling-edit" ui-toggle-class="" href="{{URL::to('/editProperty/'.$property->property_id)}}">

                                <i class="fa fa-pencil-square-o text-success text-active"></i></a>

                            <a class="active styling-edit" ui-toggle-class="" href="{{URL::to('/deleteProperty/'.$property->property_id)}}">
                                <i class="fa fa-times text-danger text"></i></a>
                        </td>
                        <td><span class="text-ellipsis">{{ $property->property_id }} </span></td>
                        <td><span class="text-ellipsis">{{ $property->property_name ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $property->landlord_id ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $property->location }} </span></td>
                        <td><span class="text-ellipsis">{{ $property->nbedrooms ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $property->nbathrooms ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $property->area }} </span></td>
                        <td><span class="text-ellipsis">{{ $property->description }} </span></td>
                        <td><span class="text-ellipsis">{{ $property->view ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $property->floor ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $property->elevator }} </span></td>
                        <td><span class="text-ellipsis">{{ $property->price_per_month ?:'N/A'}}</span></td>
                        {{-- <td><span class="text-ellipsis">{{ $property->created_at ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $property->updated_at ?:'N/A' }}</span></td> --}}
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection