@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List of landlord in the database
    </div>
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
                Session::put('message',null);
            }
        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>booking_id</th>
            <th>property_id</th>
            <th>guest_id </th>
            <th>check_in </th>
            <th>check_out</th>
            <th>nguests</th>
            <th>total_cost</th>
            <th>status</th>
            <th>payment_method</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allBooking ?? [] as $booking)
          <tr>
            <td><span class="text-ellipsis">{{ $booking->booking_id }} </span></td>
            <td><span class="text-ellipsis">{{ $booking->property ? $booking->property->property_name:'N/A' }}</span></td>
            <td><span class="text-ellipsis">{{ $booking->guest ? $booking->guest->first_name:'N/A' }}</span></td>
            <td><span class="text-ellipsis">{{ $booking->check_in }}</span></td>
            <td><span class="text-ellipsis">{{ $booking->check_out }}</span></td>
            <td><span class="text-ellipsis">{{ $booking->nguests }}</span></td>
            <td><span class="text-ellipsis">{{ $booking->total_cost }}</span></td>
            <td><span class="text-ellipsis">{{ $booking->status }}</span></td>
            <td><span class="text-ellipsis">{{ $booking->payment_method }}</span></td>
            <td>
              <a href="{{ URL::to('/editBooking/'.$booking->booking_id) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Are you sure to delete this booking?')" href="{{ URL::to('/deletebooking/'.$booking->booking_id) }}" class="active styling-edit" ui-toggle-class="">
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