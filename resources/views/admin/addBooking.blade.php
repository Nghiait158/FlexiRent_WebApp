@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Add booking in database
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
                        <form role="form" action="{{URL::to('/saveReview')}}" method="post">
                            {{ csrf_field() }}

                        {{-- <div class="form-group">
                            <label for="property_id">property_id  </label>
                            <input type="text" class="form-control" name="property_id"  id="property_id"  >
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
                        {{-- <div class="form-group">
                            <label for="guest_id">guest_id </label>
                            <input type="text" class="form-control" name="guest_id"  id="guest_id"  >
                        </div> --}}
                        <div class="form-group">
                            @csrf
                        
                            <label for="guest_id">guest_id</label>
                            <select class="form-control" name="guest_id">
                                @foreach($listGuest as $key =>$guest)
                                 <option value="{{ $guest->guest_id }}">{{ $guest->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="rating">rating </label>
                            <input type="text" class="form-control" name="rating"  id="rating"  >
                        </div> --}}
                        <div class="form-group">
                            @csrf
                        
                            <label for="rating">rating</label>
                            <select class="form-control" name="rating">
                                @for ($i = 0; $i <= 10; $i++)
                                 <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="comment">comment</label>
                            <input type="text" class="form-control" name="comment"  id="comment" >
                        </div>

                        <button type="submit" name="addReview" class="btn btn-info">Add Review</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection