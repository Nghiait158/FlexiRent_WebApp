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
    .panel-heading {
        padding: 15px;
    }
    
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table-responsive {
        margin-top: 20px;
    }

    .img-thumbnail {
        max-width: 100px;
        height: auto;
    }

    .alert-info {
        margin-bottom: 20px;
    }

    .btn {
        padding: 6px 12px;
        font-size: 14px;
    }

    .btn-sm {
        padding: 4px 10px;
    }

    .btn i {
        margin-right: 5px;
    }

    .table th {
        text-align: center;
    }

    .thead-dark th {
        background-color: #343a40;
        color: white;
    }

    .table-bordered {
        border: 1px solid #ddd;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>


</head>

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading bg-primary text-white">
            <h4 class="m-0">List of Images for {{ $property->property_name ?? 'N/A' }} in the Database</h4>
        </div>
        <div class="table-responsive">
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<div class="alert alert-info">'.$message.'</div>';
                    Session::put('message',null);
                }
            ?>
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 30px;" class="text-center">Actions</th>
                        <th>Property Image ID</th>
                        <th>Image Name</th>
                        <th>Property ID</th>
                        <th>Image</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allImgOfProperty ?? [] as $img)
                        <tr>
                            <td class="text-center">
                                <a href="{{ URL::to('/editLandlordPropertyImg/'.$img->propertyImg_id) }}" class="btn btn-success btn-sm" title="Edit">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this image?')" href="{{ URL::to('/deleteLandlordPropertyImg/'.$img->propertyImg_id) }}" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td><span class="text-ellipsis">{{ $img->propertyImg_id ?? 'N/A' }}</span></td>
                            <td><span class="text-ellipsis">{{ $img->propertyImg_name ?? 'N/A' }}</span></td>
                            <td><span class="text-ellipsis">{{ $img->property_id ?? 'N/A' }}</span></td>
                            <td>
                                <span class="text-ellipsis">
                                    @if($img->path)
                                        <img class="img-thumbnail" src="{{ $img->path }}" alt="Property Image" style="max-width: 100px;">
                                    @else
                                        N/A
                                    @endif
                                </span>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center mt-3">
                <a class="btn btn-primary btn-sm" href="{{ URL::to('/addLandlordPropertyImg/'.$property->property_id) }}" title="Add More Images">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>
        </div>
        <div class="text-left mt-3">
            <a class="btn btn-secondary btn-sm" href="{{ URL::to('/editLandlordProperty/'.$property->property_id) }}" title="Back to Edit Property">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</div>

    {{-- @yield('content') --}}

@endsection