@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List of amenity in the database
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
                        <th>amenity_id</th>
                        <th>amenity_name</th>
                        <th>icon</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allAmenity ?? [] as $amenity)
                    <tr>
                        <td><span class="text-ellipsis">{{ $amenity->amenity_id }} </span></td>
                        <td><span class="text-ellipsis">{{ $amenity->amenity_name ?:'N/A'}}</span></td>
                        
                        {{-- <td><span class="text-ellipsis">{{ $amenity->icon ?:'N/A'}}</span></td> --}}
                        <td><span class="text-ellipsis"><?php echo $amenity->icon ?></span></td>

                        <td><span class="text-ellipsis">{{ $amenity->created_at ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $amenity->updated_at ?:'N/A' }}</span></td>
                        <td>
                            <a class="active styling-edit" ui-toggle-class="" href="{{URL::to('/editAmenity/'.$amenity->amenity_id)}}">

                                <i class="fa fa-pencil-square-o text-success text-active"></i></a>

                            <a class="active styling-edit" ui-toggle-class="" href="{{URL::to('/deleteAmenity/'.$amenity->amenity_id)}}">
                                <i class="fa fa-times text-danger text"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection