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
            <th>landlord_id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allLandlord ?? [] as $landlord)
          <tr>
            <td><span class="text-ellipsis">{{ $landlord->landlord_id }} </span></td>
            <td><span class="text-ellipsis">{{ $landlord->first_name }}</span></td>
            <td><span class="text-ellipsis">{{ $landlord->last_name }}</span></td>
            <td><span class="text-ellipsis">{{ $landlord->user ? $landlord->user->email : 'N/A' }}</span></td>
            <td>
              <a href="{{ URL::to('/editLandlord/'.$landlord->landlord_id) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Are you sure to delete this admin?')" href="{{ URL::to('/deleteLandlord/'.$landlord->landlord_id) }}" class="active styling-edit" ui-toggle-class="">
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