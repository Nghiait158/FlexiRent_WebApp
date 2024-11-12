@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Update guest into database
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
                        <form role="form" action="{{URL::to('/updateGuest/'.$editGuest-> guest_id)}}" method="post">
                            {{ csrf_field() }}
                        {{-- <div class="form-group">
                            <label for="guest_id">guest_id</label>
                            <input type="text" value="{{ $editGuest->guest_id }}" class="form-control" name="guest_id" id="guest_id">
                        </div> --}}

                        <div class="form-group">
                            <label for="first_name">(first_name)</label>
                            <input type="text" value="{{ $editGuest->first_name }}" class="form-control" name="first_name" id="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">(last_name)</label>
                            <input type="text" value="{{ $editGuest->last_name }}" class="form-control" name="last_name" id="last_name">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">phone_number</label>
                            <input type="text" value="{{ $editGuest->phone_number ?:'N/A' }}" class="form-control" name="phone_number" id="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="purpose_of_stay">(purpose_of_stay)</label>
                            <input type="text" value="{{ $editGuest->purpose_of_stay ?:'N/A'  }}" class="form-control" name="purpose_of_stay" id="purpose_of_stay">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="{{ $editGuest->user->email ?:'N/A'  }}" class="form-control" name="email" id="email">
                        </div>
                        
                        <button type="submit" name="updateGuest" class="btn btn-info">Update guest</button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
