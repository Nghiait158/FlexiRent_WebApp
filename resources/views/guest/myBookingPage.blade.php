@extends('Layout/header_sidebar_guest')
@section('contentGuest')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/Guest/myBookingPage.css';
    document.head.appendChild(link);
</script>
<?php
$message = Session::get('message');
if ($message) {
    echo "<script>
        alert('" . addslashes($message) . "');
    </script>";
    Session::put('message', null);
}
?>

<div class="main-container">
    <div class="title">
        <h1 style="font-weight: 600">My Bookings</h1>
        <p>Ready to jump back in?</p>
    </div>

    <div class="content-container">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Property Name</th>
                        <th>Guest</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Guests</th>
                        <th>Total Cost</th>
                        <th>Status</th>
                        <th>Payment Method</th>
                        <th>Purpose of Stay</th>
                        <th>Purpose Explain</th>
                        <th>Booking for Others</th>
                        <th>Other Name</th>
                        <th>Other Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->booking_id }}</td>
                        <td>{{ $booking->property->property_name }}</td>
                        <td>{{ $booking->guest->first_name }} {{ $booking->guest->last_name }}</td>
                        <td>{{ $booking->check_in }}</td>
                        <td>{{ $booking->check_out }}</td>
                        <td>{{ $booking->nguests }}</td>
                        <td>{{ $booking->total_cost }}</td>
                        <td>{{ $booking->status }}</td>
                        <td>{{ $booking->payment_method }}</td>
                        <td>{{ $booking->PurposeOfStay }}</td>
                        <td>{{ $booking->purposeExplain }}</td>
                        <td>{{ $booking->is_booking_for_other ? 'Yes' : 'No' }}</td>
                        <td>{{ $booking->other_name }}</td>
                        <td>{{ $booking->other_email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            Copyright &#169; 2024 Flexirent. All Right Reserved.
        </div>
    </footer>
</div>
@endsection