@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List of admins in the database
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
            <th>admin_id</th>
            <th>name</th>
            <th>email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($Alladmins ?? [] as $admin)
          <tr>
            <td><span class="text-ellipsis">{{ $admin->admin_id }} </span></td>
            <td><span class="text-ellipsis">{{ $admin->name }}</span></td>
            <td><span class="text-ellipsis">{{ $admin->user ? $admin->user->email : 'N/A' }}</span></td>
            
            <td>
              <a href="{{ URL::to('/editAdmin/'.$admin->admin_id) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Are you sure to delete this admin?')" href="{{ URL::to('/deleteAdmin/'.$admin->admin_id) }}" class="active styling-edit" ui-toggle-class="">
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