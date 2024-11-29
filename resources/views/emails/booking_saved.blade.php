<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: "Lato";
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .email-header img {
            max-width: 150px;
        }
        .email-content h1 {
            font-size: 24px;
            color: #333;
        }
        .email-content p {
            font-size: 16px;
            color: #555;
        }
        .email-content ul {
            list-style: none;
            padding: 0;
        }
        .email-content ul li {
            font-size: 16px;
            color: #333;
            margin: 8px 0;
        }
        .email-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
            text-align: center;
        }
        .highlight {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            FlexiRent
        </div>
        <div class="email-content">
            <h1>Dear {{ $emailsContent['guestFname'] }},</h1>
            <p>Thank you for your booking. Below are your details:</p>
            <ul>
                <li>Property: <span class="highlight">{{ $emailsContent['propertyName'] }}</span></li>
                <li>Status: <span class="highlight">Pending</span></li>
                
                <li>Phone: <span class="highlight">{{ $emailsContent['guestPhone'] }}</span></li>
                <li>Check-in: <span class="highlight">{{ $emailsContent['check_in'] }}</span></li>
                <li>Check-out: <span class="highlight">{{ $emailsContent['check_out'] }}</span></li>
                <li>Number of Guests: <span class="highlight">{{ $emailsContent['nguests'] }}</span></li>
                <li>Total Cost: <span class="highlight">{{ $emailsContent['total_cost'] }}</span> 
                    <small>(Payment method will be sent to you soon.)</small>
                </li>
            </ul>
            <p>We will contact you shortly to confirm your booking from our Landlord.</p>
        </div>
        <div class="email-footer">
            <p>Thank you for choosing our service!</p>
            <p>If you have any questions, please contact us at <a href="mailto:supportFlexiRent@example.com">supportFlexiRent@example.com</a>.</p>
        </div>
    </div>
</body>
</html>
