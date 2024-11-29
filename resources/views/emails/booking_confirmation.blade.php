<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .header h1 {
            color: #333;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
            color: #555;
        }
        .button {
            display: block;
            text-align: center;
            margin: 20px auto;
        }
        .button a {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 0.9em;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Booking Confirmed</h1>
        </div>
        <div class="content">
            <p>Dear {{ $booking->guest->first_name }},</p>
            <p>We are pleased to inform you that your booking has been confirmed. Here are the details:</p>
            <ul>
                <li><strong>Booking ID:</strong> {{ $booking->booking_id }}</li>
                <li><strong>Property Name:</strong> {{ $booking->property->property_name }}</li>
                <li><strong>Check-in Date:</strong> {{ $booking->check_in }}</li>
                <li><strong>Check-out Date:</strong> {{ $booking->check_out }}</li>
                <li><strong>Total Price:</strong> ${{ $booking->total_cost }}</li>
            </ul>
            <p>Please ensure to complete the payment by the due date to secure your booking.</p>
            <div class="button">
                <a href="{{ url('/guest/bookings') }}">View Booking Details</a>
            </div>
            <p>Thank you for choosing our service!</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 FlexiRent Platform. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
