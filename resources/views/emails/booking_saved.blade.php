<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Dear {{ $emailsContent['guestFname'] }},</h1>
    <p>Thank you for your booking. Below are your details:</p>
    <ul>
        <li>Property: {{ $emailsContent['propertyName'] }}</li>
        <li>Phone: {{ $emailsContent['guestPhone'] }}</li>
        <li>Check in: {{ $emailsContent['check_in'] }}</li>
        <li>Check out: {{ $emailsContent['check_out'] }}</li>
        <li>Number of Guests:  {{ $emailsContent['nguests'] }}</li>
        <li>Total Cost:  {{ $emailsContent['total_cost'] }}</li>
    </ul>
    <p>We will contact you shortly to confirm your booking.</p>
</body>
</html>
