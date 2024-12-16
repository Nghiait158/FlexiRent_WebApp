@extends('Layout/header_landlord')

@section('contentLandlord')

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Property</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="/Frontend/css/Landlord/edit_property.css"> -->
     <style>
    body {
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
}

.panel {
    border-radius: 8px;
    background-color: #ffffff;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin-top: 40px;
}

.panel h2 {
    font-size: 1.8rem;
    font-weight: bold;
    color: #007bff;
    text-align: center;
    margin-bottom: 20px;
    line-height: 1.6;
}

.form-group label {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    line-height: 1.5;
}

.form-group input {
    font-size: 1.1rem;
    border-radius: 8px;
    padding: 15px;
    border: 1px solid #ccc;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
    line-height: 1.5;
    margin-bottom: 15px;
}

.form-group input:focus {
    border-color: #007bff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
}

.btn-info {
    background-color: #007bff;
    color: white;
    padding: 12px 25px;
    font-size: 1.2rem;
    border-radius: 8px;
    transition: background-color 0.3s ease, transform 0.2s ease;
    width: auto;
    margin-top: 10px;
    cursor: pointer;
    display: block;
    width: 100%;
}

.btn-info:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

.text-alert {
    color: red;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
    line-height: 1.5;
}

.position-center {
    max-width: 700px;
    margin: 0 auto;
}

@media (max-width: 768px) {
    .panel {
        padding: 20px;
    }

    .form-group input,
    .btn-info {
        font-size: 1rem;
    }

    .panel h2 {
        font-size: 1.5rem;
    }
}
</style>


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message', null);
                }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <h2>Add img for property: {{ $property->property_name ?? 'N/A' }} into database</h2>
                    <form role="form" action="{{ URL::to('/saveLandlordPropertyImg/' . $property->property_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="propertyImg_name">propertyImg_name</label>
                            <input type="text" class="form-control" name="propertyImg_name" id="propertyImg_name" required>
                        </div>
                        <div class="form-group">
                            <label for="property_id">(property_id)</label>
                            <input type="text" class="form-control" name="property_id" id="property_id" value="{{ $property->property_id }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="PropertyImgUrl">Enter image URL</label>
                            <input type="text" class="form-control" name="PropertyImgUrl" id="PropertyImgUrl" required>
                        </div>
                        <button type="submit" name="addPropertyImg" class="btn btn-info">Add Img</button>
                    </form>
                </div>
            </div>
        </section>
    </div>    
</div>

{{-- @yield('content') --}}

@endsection