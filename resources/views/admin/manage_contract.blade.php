@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List of contract in the database
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
                        <th>booking_id</th>
                        <th>rent_amount</th>
                        <th>start_date</th>
                        <th>end_date</th>
                        {{-- <th>landlord_responsibilities</th> --}}
                        {{-- <th>tenant_responsibilities</th> --}}
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allContract ?? [] as $contract)
                    <tr>
                        <td>
                            <a class="active styling-edit" ui-toggle-class="" href="{{URL::to('/editContract/'.$contract->contract_id)}}">
                                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                            <a class="active styling-edit" ui-toggle-class="" href="{{URL::to('/deleteAmenity/'.$contract->contract_id)}}">
                                <i class="fa fa-times text-danger text"></i></a>
                        </td>
                        <td><span class="text-ellipsis">{{ $contract->booking_id }} </span></td>
                        <td><span class="text-ellipsis">{{ $contract->rent_amount ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $contract->start_date ?:'N/A'}}</span></td>
                        <td><span class="text-ellipsis">{{ $contract->end_date ?:'N/A' }}</span></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection