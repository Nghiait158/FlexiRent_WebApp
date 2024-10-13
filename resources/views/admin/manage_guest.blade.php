@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List of guest in the database
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
            <th>guest_id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>phone_number</th>
            <th>purpose_of_stay</th>
            <th>email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allGuest ?? [] as $guest)
          <tr>
            <td><span class="text-ellipsis">{{ $guest->guest_id }} </span></td>
            <td><span class="text-ellipsis">{{ $guest->first_name ?:'N/A'}}</span></td>
            <td><span class="text-ellipsis">{{ $guest->last_name ?:'N/A'}}</span></td>
            <td><span class="text-ellipsis">{{ $guest->phone_number ?:'N/A'}}</span></td>
            <td><span class="text-ellipsis">{{ $guest->purpose_of_stay ?:'N/A' }}</span></td>
            <td><span class="text-ellipsis">{{ $guest->user ? $guest->user->email : 'N/A' }}</span></td>
            <td>
              <a href="{{ URL::to('/editGuest/'.$guest->guest_id) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Are you sure to delete this guest?')" href="{{ URL::to('/deleteGuest/'.$guest->guest_id) }}" class="active styling-edit" ui-toggle-class="">
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