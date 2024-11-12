@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Update landlord into database
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
                        <form role="form" action="{{URL::to('/updateLandlord/'.$editLandlord-> landlord_id)}}" method="post">
                            {{ csrf_field() }}
                        {{-- <div class="form-group">
                            <label for="landlord_id">landlord_id</label>
                            <input type="text" value="{{ $editLandlord->landlord_id }}" class="form-control" name="landlord_id" id="landlord_id">
                        </div> --}}

                        <div class="form-group">
                            <label for="first_name">(first_name)</label>
                            <input type="text" value="{{ $editLandlord->first_name }}" class="form-control" name="first_name" id="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">(last_name)</label>
                            <input type="text" value="{{ $editLandlord->last_name }}" class="form-control" name="last_name" id="last_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="{{ $editLandlord->user->email }}" class="form-control" name="email" id="email">
                        </div>
                        
                        <button type="submit" name="updateLandlord" class="btn btn-info">Update landlord</button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
