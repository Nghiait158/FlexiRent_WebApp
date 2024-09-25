<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{('/frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{('/frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{('/frontend/css/all.min.css')}}" />


    {{-- --------------------- --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Pacifico&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet"><!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&family=Pacifico&display=swap" rel="stylesheet">

    <title>HomeUp App</title>
</head>
<body>

    {{--Header --}}
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="background-color: black">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">HomeUp</a>
        <span class="navbar-text">Solutions for house rentals</span>
        <button class="navbar-toggler" type="button" 
            data-toggle="collapse" 
            data-target="#navbarNavAltMarkup" 
            aria-controls="navbarNavAltMarkup" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
            <li class="nav-item custom-nav-item"><a href="house.php" class="nav-link">Home</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Renter</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Business Solution</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Manage Rentals(Landloards)</a></li>
            </ul>
            <div class="btn-group" role="group" aria-label="Basic example" float-end>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Clientllogin">
                    Login 
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ClientlSignUp">
                    Sign Up
                    </button>
            </div>
        </div>
        </div>
    </nav>
    <!-- End Navigation -->

    {{-- Body content --}}
    {{-- <h1>HomeUp App</h1> --}}
    
    {{--Footer --}}
        

</body>
</html>