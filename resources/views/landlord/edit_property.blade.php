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

    <link rel="stylesheet" href="/Frontend/css/Landlord/edit_property.css">


</head>

<body class="bg-light">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Property Information</h3>
            </div>
            <div class="card-body">
                <form id="editPropertyForm" action="{{ URL::to('/updateLandlordProperty/'.$editProperty->property_id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <!-- Property Images Upload -->
                    <div class="input-container">
                        <label for="fileInput" class="mb-2">Upload Property Images</label>
                        <input type="file" class="form-control file-input" id="fileInput" name="property_images[]" multiple onchange="previewImages(event)">
                        <div class="image-preview-container" id="imagePreviewContainer"></div>
                    </div>

                    <!-- Property ID (Auto Generated) -->
                    <div class="form-group">
                        <label for="property_id">Property ID (Auto Generated)</label>
                        <input type="text" class="form-control" name="property_id" id="property_id" value="{{ $editProperty->property_id }}" disabled>
                    </div>

                    <!-- Property Name -->
                    <div class="form-group">
                        <label for="property_name">Property Name</label>
                        <input type="text" class="form-control" name="property_name" id="property_name" value="{{ $editProperty->property_name }}">
                    </div>

                    <!-- Landlord -->
                    <div class="form-group">
                        <label for="landlord_id">Landlord</label>
                        <select name="landlord_id" id="landlord_id" class="form-control">
                            <option value="">-- Select Landlord --</option>
                            @foreach ($landlords as $landlord)
                            <option value="{{ $landlord->landlord_id }}" {{ $editProperty->landlord_id == $landlord->landlord_id ? 'selected' : '' }}>
                                Name: {{ $landlord->first_name }} {{ $landlord->last_name }} (ID: {{ $landlord->landlord_id }})
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Amenities -->
                    <div class="form-group">
                        <label for="amenities">Amenities</label>
                        <br>
                        @foreach ($amenity as $amenity)
                        <input type="checkbox"
                            id="amenity_{{ $amenity->amenity_id }}"
                            name="amenities[]"
                            value="{{ $amenity->amenity_id }}"
                            {{ $editProperty->amenities->contains($amenity->amenity_id) ? 'checked' : '' }}>
                        <label for="amenity_{{ $amenity->amenity_id }}">{{ $amenity->amenity_name }}</label>
                        @endforeach
                    </div>

                    <!-- Location -->
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" id="location" value="{{ $editProperty->location }}">
                    </div>

                    <!-- Location Details -->
                    <div class="form-group">
                        <label for="location_details">Location Details</label>
                        <textarea class="form-control" name="location_details" id="location_details" rows="4">{{ $editProperty->location_details }}</textarea>
                    </div>

                    <!-- Education and Community -->
                    <div class="form-group">
                        <label for="education_and_community">Education and Community</label>
                        <textarea class="form-control" name="education_and_community" id="education_and_community" rows="4">{{ $editProperty->education_and_community }}</textarea>
                    </div>

                    <!-- Bedrooms -->
                    <div class="form-group">
                        <label for="nbedrooms">Bedrooms</label>
                        <input type="number" class="form-control" name="nbedrooms" id="nbedrooms" value="{{ $editProperty->nbedrooms }}">
                    </div>

                    <!-- Bathrooms -->
                    <div class="form-group">
                        <label for="nbathrooms">Bathrooms</label>
                        <input type="number" class="form-control" name="nbathrooms" id="nbathrooms" value="{{ $editProperty->nbathrooms }}">
                    </div>

                    <!-- Area -->
                    <div class="form-group">
                        <label for="area">Area (m²)</label>
                        <input type="number" class="form-control" name="area" id="area" value="{{ $editProperty->area }}">
                    </div>

                    <!-- View -->
                    <div class="form-group">
                        <label for="view">View</label>
                        <input type="text" class="form-control" name="view" id="view" value="{{ $editProperty->view }}">
                    </div>

                    <!-- Floor -->
                    <div class="form-group">
                        <label for="floor">Floor</label>
                        <input type="number" class="form-control" name="floor" id="floor" value="{{ $editProperty->floor }}">
                    </div>

                    <!-- Elevator -->
                    <div class="form-group">
                        <label for="elevator">Elevator</label>
                        <select name="elevator" id="elevator" class="form-control">
                            <option value="1" {{ $editProperty->elevator == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $editProperty->elevator == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Price per Month -->
                    <div class="form-group">
                        <label for="price_per_month">Price per Month (VND)</label>
                        <input type="number" class="form-control" name="price_per_month" id="price_per_month" value="{{ $editProperty->price_per_month }}">
                    </div>

                    <!-- Created At (disabled) -->
                    <div class="form-group">
                        <label for="created_at">Created At</label>
                        <input type="text" class="form-control" name="created_at" id="created_at" value="{{ $editProperty->created_at }}" disabled>
                    </div>

                    <!-- Updated At (disabled) -->
                    <div class="form-group">
                        <label for="updated_at">Updated At</label>
                        <input type="text" class="form-control" name="updated_at" id="updated_at" value="{{ $editProperty->updated_at }}" disabled>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="4">{{ $editProperty->description }}</textarea>
                    </div>

                    <!-- Available -->
                    <div class="form-group">
                        <label for="available">Available Date</label>
                        <input type="date" class="form-control" name="available" id="available" value="{{ $editProperty->available }}">
                    </div>

                    <!-- Guest Capacity -->
                    <div class="form-group">
                        <label for="guest_capacity">Guest Capacity</label>
                        <input type="number" class="form-control" name="guest_capacity" id="guest_capacity" value="{{ $editProperty->guest_capacity }}">
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ $editProperty->status == 1 ? 'selected' : '' }}>Available</option>
                            <option value="0" {{ $editProperty->status == 0 ? 'selected' : '' }}>Rented</option>
                        </select>
                    </div>

                    <!-- City -->
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" value="{{ $editProperty->city }}">
                    </div>

                    <!-- District -->
                    <div class="form-group">
                        <label for="district">District</label>
                        <input type="text" class="form-control" name="district" id="district" value="{{ $editProperty->district }}">
                    </div>

                    <!-- Accommodation Type -->
                    <div class="form-group">
                        <label for="accommodation_type">Accommodation Type</label>
                        <select name="accommodation_type" id="accommodation_type" class="form-control">
                            <option value="Entire Apartment" {{ $editProperty->accommodation_type == 'Entire Apartment' ? 'selected' : '' }}>Entire Apartment</option>
                            <option value="Private Room" {{ $editProperty->accommodation_type == 'Private Room' ? 'selected' : '' }}>Private Room</option>
                            <option value="Shared Place" {{ $editProperty->accommodation_type == 'Shared Place' ? 'selected' : '' }}>Shared Place</option>
                            <option value="Entire Room" {{ $editProperty->accommodation_type == 'Entire Room' ? 'selected' : '' }}>Entire Room</option>
                        </select>
                    </div>

                    <!-- Room -->
                    <div class="form-group">
                        <label for="room">Room</label>
                        <input type="number" class="form-control" name="room" id="room" value="{{ $editProperty->room }}">
                    </div>

                    <!-- Wifi -->
                    <div class="form-group">
                        <label for="wifi">Wifi</label>
                        <select name="wifi" id="wifi" class="form-control">
                            <option value="1" {{ $editProperty->wifi == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $editProperty->wifi == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Internet Speed -->
                    <div class="form-group">
                        <label for="internetSpeed">Internet Speed (Mbps)</label>
                        <input type="number" class="form-control" name="internetSpeed" id="internetSpeed" value="{{ $editProperty->internetSpeed }}">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-info">Update Property</button>
                </form>
            </div>
        </div>


        <!-- Cảnh báo -->
        <div id="confirmationDialog" class="dialog">
            <div class="dialog-content">
                <i class="fas fa-exclamation-triangle fa-3x mb-3 text-warning"></i>
                <p><strong>Are you sure you want to make changes?</strong></p>
                <button id="confirmBtn" class="btn btn-confirm"><i class="fas fa-check"></i> Confirm</button>
                <button id="cancelBtn" class="btn btn-cancel"><i class="fas fa-times"></i> Cancel</button>
            </div>
        </div>

        <!-- Thông báo thành công -->
        <div id="successAlert" class="alert alert-success mt-4">
            <i class="fas fa-check-circle"></i> Your changes have been successfully saved!
        </div>
    </div>

    <!-- Bootstrap 5 JS, Popper, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function previewImages(event) {
            const files = event.target.files; // Get the selected files
            const previewContainer = document.getElementById('imagePreviewContainer');
            previewContainer.innerHTML = ''; // Clear previous previews

            const maxFiles = 8;

            // Check if the number of files exceeds the max limit
            if (files.length > maxFiles) {
                alert(`You can only upload up to ${maxFiles} images.`);
                event.target.value = ''; // Reset the input value to prevent form submission
                return; // Stop the function if the number of files exceeds the limit
            }

            // Loop through the selected files and show the previews
            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                if (file && file.type.startsWith('image/')) { // Check if the file is an image
                    const reader = new FileReader(); // Create a FileReader object

                    reader.onload = function(e) {
                        const image = document.createElement('img'); // Create an img element
                        image.src = e.target.result; // Set the source to the file's data URL
                        previewContainer.appendChild(image); // Append the image to the container
                    };

                    reader.readAsDataURL(file); // Read the file as a data URL
                }
            }
        }

        $(document).ready(function() {
            // Bắt sự kiện khi nhấn Submit
            $('#submitBtn').on('click', function(event) {
                event.preventDefault(); // Ngừng hành động submit mặc định

                // Hiển thị bảng cảnh báo
                $('#confirmationDialog').fadeIn();
            });

            // Khi nhấn Confirm
            $('#confirmBtn').on('click', function() {
                // Ẩn cảnh báo
                $('#confirmationDialog').fadeOut();

                // Thực hiện submit form thực sự
                $('#editPropertyForm').submit();

                // Hiển thị thông báo thành công
                $('#successAlert').fadeIn();

                // Tạm thời ẩn thông báo thành công sau 3 giây
                setTimeout(function() {
                    $('#successAlert').fadeOut();
                }, 3000);
            });

            // Khi nhấn Cancel
            $('#cancelBtn').on('click', function() {
                // Ẩn bảng cảnh báo
                $('#confirmationDialog').fadeOut();
            });
        });
    </script>

</body>

</html>