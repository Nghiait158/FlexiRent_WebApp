@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   add-property-into-DB
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
                        <form role="form" action="{{URL::to('/saveProperty')}}" method="post">
                            {{ csrf_field() }}
                         
                        <div class="form-group">
                            <label for="property_name">property_name</label>
                            <input type="text" class="form-control" name="property_name"  id="property_name"  >
                        </div>
                        <div class="form-group">
                            <label for="landlord_id">landlord</label>
                            <select name="landlord_id" id="landlord_id" class="form-control">
                                <option value="">-- Select Landlord --</option>
                                @foreach ($landlords as $landlord)
                                    <option value="{{$landlord->landlord_id}}">Name: {{$landlord -> first_name}}  {{$landlord -> last_name}} (ID: {{$landlord -> landlord_id}})</option>
                                
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">location</label>
                            <input type="text" class="form-control" name="location"  id="location" >
                        </div>
                        <div class="form-group">
                            <label for="nbedrooms">nbedrooms</label>
                            <input type="text" class="form-control" name="nbedrooms"  id="nbedrooms" >
                        </div>
                        <div class="form-group">
                            <label for="nbathrooms">nbathrooms</label>
                            <input type="text" class="form-control" name="nbathrooms"  id="nbathrooms" >
                        </div>
                        <div class="form-group">
                            <label for="area">area</label>
                            <input type="text" class="form-control" name="area"  id="area" >
                        </div>
                        
                        <div class="form-group">
                            <label for="view">view</label>
                            <input type="text" class="form-control" name="view"  id="view" >
                        </div>
                        <div class="form-group">
                            <label for="floor">floor</label>
                            <input type="text" class="form-control" name="floor"  id="floor" >
                        </div>
                        <div class="form-group">
                            <label for="elevator">elevator</label>
                            <input type="text" class="form-control" name="elevator"  id="elevator" >
                        </div>
                        <div class="form-group">
                            <label for="price_per_month">price_per_month</label>
                            <input type="text" class="form-control" name="price_per_month"  id="price_per_month" >
                        </div>
                        
                        <button type="submit" name="addProperty" class="btn btn-info">Add property</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection