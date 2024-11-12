@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Update booking into database
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
                        <form role="form" action="{{URL::to('/updateBooking/'.$editBooking-> booking_id)}}" method="post">
                            {{ csrf_field() }}
                        {{-- <div class="form-group">
                            <label for="booking_id">booking_id</label>
                            <input type="text" value="{{ $editBooking->booking_id }}" class="form-control" name="booking_id" id="booking_id">
                        </div> --}}
                        <div class="form-group">
                            @csrf
                            <label for="property_id">Property</label>
                            <select class="form-control" name="property_id">
                                @foreach($listProperty as $property)
                                    <option value="{{ $property->property_id }}" {{ $editBooking->property_id == $property->property_id ? 'selected' : '' }}>
                                        {{ $property->property_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>                        
                        <div class="form-group">
                            @csrf
                            <label for="guest_id">Guest</label>
                            <select class="form-control" name="guest_id">
                                @foreach($listGuest as $guest)
                                    <option value="{{ $guest->guest_id }}" {{ $editBooking->guest_id == $guest->guest_id ? 'selected' : '' }}>
                                        {{ $guest->first_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
   
                        <div class="form-group">
                            <label for="check_in">check_in</label>
                            <input type="text" value="{{ $editBooking->check_in }}" class="form-control" name="check_in" id="check_in">
                        </div> 
                        <div class="form-group">
                            <label for="check_out">check_out</label>
                            <input type="text"value="{{ $editBooking->check_out }}" class="form-control" name="check_out"  id="check_out" >
                        </div>                        
                        <div class="form-group">
                            <label for="nguests">nguests</label>
                            <input type="text"value="{{ $editBooking->nguests }}" class="form-control" name="nguests"  id="nguests" >
                        </div>                        
                        <div class="form-group">
                            <label for="total_cost">total_cost</label>
                            <input type="text"value="{{ $editBooking->total_cost }}" class="form-control" name="total_cost"  id="total_cost" >
                        </div>

                        <div class="form-group">
                            @csrf
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                <option value="confirmed" {{ $editBooking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="pending" {{ $editBooking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="cancelled" {{ $editBooking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            @csrf
                            <label for="payment_method">Payment Method</label>
                            <select class="form-control" name="payment_method">
                                <option value="credit_card" {{ $editBooking->payment_method == 'credit_card' ? 'selected' : '' }}>Credit Card</option>
                                <option value="paypal" {{ $editBooking->payment_method == 'paypal' ? 'selected' : '' }}>PayPal</option>
                                <option value="bank_transfer" {{ $editBooking->payment_method == 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
                                <option value="cash" {{ $editBooking->payment_method == 'cash' ? 'selected' : '' }}>Cash</option>
                            </select>
                        </div>
                        


                       
                        
                        <button type="submit" name="updateBooking" class="btn btn-info">Update booking</button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
