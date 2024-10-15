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
                        <form role="form" action="{{URL::to('/saveBooking')}}" method="post">
                            {{ csrf_field() }}

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
                            <label for="check_in">check_in</label>
                            <input type="text" class="form-control" name="check_in"  id="check_in" >
                        </div>
                        <div class="form-group">
                            <label for="check_out">check_out</label>
                            <input type="text" class="form-control" name="check_out"  id="check_out" >
                        </div>                        
                        <div class="form-group">
                            <label for="nguests">nguests</label>
                            <input type="text" class="form-control" name="nguests"  id="nguests" >
                        </div>                        
                        <div class="form-group">
                            <label for="total_cost">total_cost</label>
                            <input type="text" class="form-control" name="total_cost"  id="total_cost" >
                        </div>
                        {{-- <div class="form-group">
                            <label for="status">status</label>
                            <input type="text" class="form-control" name="status"  id="status" >
                        </div> --}}
                        <div class="form-group">
                            @csrf
                            <label for="status">status</label>
                            <select class="form-control" name="status">
                                 <option value="confirmed">confirmed</option>
                                 <option value="pending">pending</option>
                                 <option value="cancelled">cancelled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            @csrf
                            <label for="payment_method">payment_method</label>
                            <select class="form-control" name="payment_method">
                                 <option value="credit_card">credit_card</option>
                                 <option value="paypal">paypal</option>
                                 <option value="bank_transfer">bank_transfer</option>
                                 <option value="cash">cash</option>                          
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="payment_method">payment_method</label>
                            <input type="text" class="form-control" name="payment_method"  id="payment_method" >
                        </div> --}}

                        <button type="submit" name="addBooking" class="btn btn-info">Add Booking</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection