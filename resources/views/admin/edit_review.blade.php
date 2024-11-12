@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Update review into database
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/updateReview/'.$editReview-> review_id)}}" method="post">
                            {{ csrf_field() }}
                        {{-- <div class="form-group">
                            <label for="review_id">review_id</label>
                            <input type="text" value="{{ $editReview->review_id }}" class="form-control" name="review_id" id="review_id">
                        </div> --}}
                        <div class="form-group">
                            @csrf
                            <label for="property_id">property_id</label>
                            <select class="form-control" name="property_id">
                                @foreach($listProperty as $key =>$property)
                                 <option value="{{ $property->property_id }}">{{ $property->property_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @csrf
                        
                            <label for="guest_id">guest_id</label>
                            <select class="form-control" name="guest_id">
                                @foreach($listGuest as $key =>$guest)
                                 <option value="{{ $guest->guest_id }}">{{ $guest->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rating">rating</label>
                            <input type="text" value="{{ $editReview->rating }}" class="form-control" name="rating" id="rating">
                        </div>
                        <div class="form-group">
                            <label for="comment">comment</label>
                            <input type="text" value="{{ $editReview->comment }}" class="form-control" name="comment" id="comment">
                        </div>
                        <button type="submit" name="updateReview" class="btn btn-info">Update review</button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
