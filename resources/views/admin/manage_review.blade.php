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
            <th>review_id</th>
            <th>property_id </th>
            <th>guest_id </th>
            <th>rating</th>
            <th>comment</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allReview ?? [] as $review)
          <tr>
            <td><span class="text-ellipsis">{{ $review->review_id }} </span></td>
            {{-- <td><span class="text-ellipsis">{{ $review->property_id }}</span></td> --}}
            <td><span class="text-ellipsis">{{ $review->property ? $review->property->property_name:'N/A' }}</span></td>
            <td><span class="text-ellipsis">{{ $review->guest ? $review->guest->first_name:'N/A' }}</span></td>
            <td><span class="text-ellipsis">{{ $review->rating }}</span></td>
            <td><span class="text-ellipsis">{{ $review->comment }}</span></td>
            {{-- <td><span class="text-ellipsis">{{ $review->user ? $landlord->user->email : 'N/A' }}</span></td> --}}
            <td>
              <a href="{{ URL::to('/editReview/'.$review->review_id) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Are you sure to delete this landlord?')" href="{{ URL::to('/deleteReview/'.$review->review_id) }}" class="active styling-edit" ui-toggle-class="">
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