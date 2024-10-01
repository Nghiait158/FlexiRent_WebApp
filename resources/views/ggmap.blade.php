<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bản đồ {{$address}}</title>
</head>
<body>
    <h1>Bản đồ {{$address}}</h1>

    @php
        // Tạo URL Google Maps từ địa chỉ
        $encodedAddress = urlencode($address);
    @endphp

    <iframe 
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBoA17lY0Ew39efGfTQp_jOqnD_z9o41uo&q={{$encodedAddress}}" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy"></iframe>
</body>
</html>
