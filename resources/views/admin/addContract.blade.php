@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Contract in db 
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">

                <div class="position-center">
                    <form role="form" action="{{URL::to('/saveContract')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="booking_id">Booking</label>
                            <select name="booking_id" id="booking_id" class="form-control">
                                <option value="">-- Select booking --</option>
                                @foreach ($listBooking as $booking)
                                    <option value="{{$booking->booking_id}}">Property: {{ $booking->property->property_name }} | Guest: {{ $booking->guest->first_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rent_amount">rent_amount</label>
                            <input type="number" class="form-control" name="rent_amount" id="rent_amount">
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
                            <label for="payment_due_date">payment_due_date)</label>
                            <input type="date" class="form-control" name="payment_due_date" id="payment_due_date">
                        </div> --}}
                        <div class="form-group">
                            <label for="start_date">start_date</label>
                            <input type="date" class="form-control" name="start_date" id="start_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">end_date</label>
                            <input type="date" class="form-control" name="end_date" id="end_date">
                        </div>
                        {{-- <div class="form-group">
                            <label for="deposit_amount">deposit_amount</label>
                            <input type="number" class="form-control" name="deposit_amount" id="deposit_amount">
                        </div> --}}

                        <div class="form-group">
                            <label for="landlord_responsibilities">landlord_responsibilities</label>
                            <textarea class="form-control" name="landlord_responsibilities" id="landlord_responsibilities"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tenant_responsibilities">tenant_responsibilities</label>
                            <textarea class="form-control" name="tenant_responsibilities" id="tenant_responsibilities"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="termination_conditions">termination_conditions</label>
                            <textarea class="form-control" name="termination_conditions" id="termination_conditions"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="usage_rules">usage_rules</label>
                            <textarea class="form-control" name="usage_rules" id="usage_rules"></textarea>
                        </div>

                        <button type="submit" name="addContract" class="btn btn-info">Add contract</button>
                    </form>
                </div>
                <script src="\backend\js\updateLocation.js"></script>
            </div>
        </section>
    </div>
    @endsection