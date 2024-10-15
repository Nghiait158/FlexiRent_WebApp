@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List of images for {{ $property->property_name ?? 'N/A' }} in the database
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
            <th style="width:30px;"></th>
            <th>propertyImg_id</th>
            <th>propertyImg_name</th>
            <th>property_id</th>
            <th>path</th>
            <th>Add more img </th>
            
          </tr>
        </thead>
        <tbody>
        @foreach ($allImgOfProperty ?? [] as $img)
          <tr>
            <td>
                <a href="{{ URL::to('/editPropertyImg/'.$img->propertyImg_id) }}" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Are you sure to delete this img?')" href="{{ URL::to('/deletePropertyImg/'.$img->propertyImg_id) }}" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-times text-danger text"></i>
                </a>
            </td>
            <td><span class="text-ellipsis">{{ $img->propertyImg_id }} </span></td>
            <td><span class="text-ellipsis">{{ $img->propertyImg_name ?:'N/A'}}</span></td>
            <td><span class="text-ellipsis">{{ $img->property_id ?:'N/A'}}</span></td>
            <td><span class="text-ellipsis"><img class="imgShow" src="{{ $img->path ?:'N/A'}}"></span></td>
            <td>
              <a class="active styling-edit" ui-toggle-class="" href="{{URL::to('/addPropertyImg/'.$property->property_id)}}">
                  <i class="fa fa-plus text-danger text"></i>
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