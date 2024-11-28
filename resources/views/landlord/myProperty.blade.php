<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Information Table with Bootstrap 5 & DataTables</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="/Frontend/css/Landlord/myProperty.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize DataTables
            var table = $('#propertyTable').DataTable();

            // Function to calculate total properties
            function calculateTotalProperties() {
                var totalProperties = table.rows().count(); // Count all rows in the table
                $('#totalProperties').text(totalProperties);
            }

            // Function to calculate available properties
            function calculateAvailableProperties() {
                var availableProperties = 0;

                table.rows().every(function() {
                    var rowData = this.data();
                    var status = rowData[11]; // Status column is at index 3 (0-based)
                    if (status === "1") {
                        availableProperties++;
                    }
                });
                $('#availableProperties').text(availableProperties);
            }
            // Function to calculate rented properties
            function calculateRentedProperties() {
                var rentedProperties = 0;

                table.rows().every(function() {
                    var rowData = this.data();
                    var status = rowData[11]; // Status column is at index 3 (0-based)
                    if (status === "0") {
                        rentedProperties++;
                    }
                });
                $('#rentedProperties').text(rentedProperties);
            }

            // Function to calculate average price
            function calculateAveragePrice() {
                var totalPrice = 0;
                var totalCount = 0;
                table.rows().every(function() {
                    var rowData = this.data();
                    var price = parseFloat(rowData[12].replace(/[^0-9.-]+/g, "")); // Remove any non-numeric symbols
                    if (!isNaN(price)) {
                        totalPrice += price;
                        totalCount++;
                    }
                });
                var averagePrice = totalCount > 0 ? totalPrice / totalCount : 0;
                $('#averagePrice').text('$' + averagePrice.toFixed(2));
            }

            // Calculate statistics when the page loads
            calculateTotalProperties();
            calculateAvailableProperties();
            calculateRentedProperties();
            calculateAveragePrice();

            // Function to filter rows by status (Available, Rented, All)
            function filterByStatus(status) {
                // Filter the table based on status
                if (status === "All") {
                    table.column(11).search('').draw(); // Show all rows (clear search)
                    $('#statusFilterText').text('All');
                } else {
                    table.column(11).search(status).draw(); // Filter by Available (1) or Rented (0)
                    $('#statusFilterText').text(status === "1" ? 'Available' : 'Rented');
                }
            }

            // Status filter button click to show dropdown
            $('#statusFilterBtn').on('click', function() {
                $('#statusFilterDropdown').toggle();
            });

            // Status filter option click
            $('#statusFilterDropdown .dropdown-item').on('click', function() {
                var selectedStatus = $(this).data('status');
                filterByStatus(selectedStatus);
                $('#statusFilterDropdown').hide();
            });

            // Redraw stats after table is redrawn (e.g., after filtering)
            table.on('draw', function() {
                calculateTotalProperties();
                calculateAvailableProperties();
                calculateRentedProperties();
                calculateAveragePrice();
            });

            // Function to calculate total price for the current page
            function calculateTotalPrice() {
                var totalPrice = 0;
                // Loop through all rows in the current page
                table.rows({
                    search: 'applied'
                }).every(function(rowIdx, tableLoop, rowLoop) {
                    var rowData = this.data();
                    var price = parseFloat(rowData[12].replace(/[^0-9.-]+/g, "")); // Remove any currency symbols and convert to number
                    if (!isNaN(price)) {
                        totalPrice += price;
                    }
                });

                // Update the total price for the current page
                $('#totalPrice').text('$' + totalPrice.toFixed(2));
            }

            // Function to calculate total price for all properties (example: sum of all rows)
            function calculateTotalPriceAll() {
                var totalPriceAll = 0;
                // Loop through all rows in the table
                table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                    var rowData = this.data();
                    var price = parseFloat(rowData[12].replace(/[^0-9.-]+/g, "")); // Remove any currency symbols and convert to number
                    if (!isNaN(price)) {
                        totalPriceAll += price;
                    }
                });

                // Update the total price for all properties
                $('#totalPriceAll').text('$' + totalPriceAll.toFixed(2));
            }

            // Calculate total price whenever the table is drawn (page change, filter, etc.)
            table.on('draw', function() {
                calculateTotalPrice();
                calculateTotalPriceAll();
            });

            // Initial calculation after page load
            calculateTotalPrice();
            calculateTotalPriceAll();

            // Handle View button - open the modal popup
            $(document).on('click', '.view-btn', function() {
                var row = $(this).closest('tr');
                var rowData = table.row(row).data(); // Use DataTable API to get row data

                // Populate the modal with property details
                $('#propertyDetailsModal .modal-body').html(`
                        <div class="list-group">
            <div class="list-group-item"><strong>Property ID:</strong> <span id="propertyId">${rowData[0]}</span></div>
            <div class="list-group-item"><strong>Property Name:</strong> <span id="propertyName">${rowData[1]}</span></div>
            <div class="list-group-item"><strong>Landlord ID:</strong> <span id="landlordId">${rowData[2]}</span></div>
            <div class="list-group-item"><strong>Location:</strong> <span id="location">${rowData[3]}</span></div>
            <div class="list-group-item"><strong>Location Details:</strong> <span id="locationDetails">${rowData[4]}</span></div>
            <div class="list-group-item"><strong>Education and Community:</strong> <span id="educationAndCommunity">${rowData[5]}</span></div>
            <div class="list-group-item"><strong>Bedrooms:</strong> <span id="bedrooms">${rowData[6]}</span></div>
            <div class="list-group-item"><strong>Bathrooms:</strong> <span id="bathrooms">${rowData[7]}</span></div>
            <div class="list-group-item"><strong>Area:</strong> <span id="area">${rowData[8]}</span></div>
            <div class="list-group-item"><strong>View:</strong> <span id="view">${rowData[9]}</span></div>
            <div class="list-group-item"><strong>Floor:</strong> <span id="floor">${rowData[10]}</span></div>
            <div class="list-group-item"><strong>Status:</strong><span id="status">${rowData[11] === '1' ? 'Available' : 'Rented'}</span></div>
            <div class="list-group-item"><strong>Price per Month:</strong> <span id="pricePerMonth">${rowData[12]}</span></div>
            <div class="list-group-item"><strong>Created At:</strong> <span id="createdAt">${rowData[13]}</span></div>
            <div class="list-group-item"><strong>Updated At:</strong> <span id="updatedAt">${rowData[14]}</span></div>
            <div class="list-group-item"><strong>Description:</strong> <span id="description">${rowData[15]}</span></div>
            <div class="list-group-item"><strong>Available Date:</strong> <span id="availableDate">${rowData[16]}</span></div>
            <div class="list-group-item"><strong>Guest Capacity:</strong> <span id="guestCapacity">${rowData[17]}</span></div>
<div class="list-group-item"><strong>Elevator:</strong> <span id="elevator">${rowData[18]}</span></div>
            
            <div class="list-group-item"><strong>City:</strong> <span id="city">${rowData[19]}</span></div>
            <div class="list-group-item"><strong>District:</strong> <span id="district">${rowData[20]}</span></div>
            <div class="list-group-item"><strong>Accommodation Type:</strong> <span id="accommodationType">${rowData[21]}</span></div>
            <div class="list-group-item"><strong>Room:</strong> <span id="room">${rowData[22]}</span></div>
            <div class="list-group-item"><strong>Wifi:</strong> <span id="wifi">${rowData[23]}</span></div>
            <div class="list-group-item"><strong>Internet Speed:</strong> <span id="internetSpeed">${rowData[24]}</span></div>
        </div>
                    `);

                // Show the modal
                $('#propertyDetailsModal').fadeIn();
            });

            // Close modal popup
            $(document).on('click', '.cancelbtn, .close', function() {
                $('#propertyDetailsModal').fadeOut();
            });

            // Close the confirmation modal
            $(document).on('click', '.cancelDeleteBtn', function() {
                $('#confirmDeleteModal').fadeOut();
            });

            // Handle Edit button - allow inline editing
            $(document).on('blur', '.edit-property-name', function() {
                var newPropertyName = $(this).val();
                var row = $(this).closest('tr');
                var rowData = table.row(row).data();
                var propertyId = rowData[0]; // Property ID from row data

                // Simulate AJAX update (can replace with real AJAX)
                console.log('Updated Property ID:', propertyId, 'New Name:', newPropertyName);
                // Update the property name in the table
                rowData[1] = newPropertyName;
                table.row(row).data(rowData).draw();
            });

            // Filter data based on search input
            $('#filterBtn').on('click', function() {
                $('#filterSection').toggle(); // Toggle filter section visibility
            });

            // Apply filter on property name, price, city, district, etc.
            $('#searchPropertyName').on('input', function() {
                var propertyName = $(this).val();
                table.columns(1).search(propertyName).draw();
            });

            $('#searchMinPrice, #searchMaxPrice').on('input', function() {
                var minPrice = parseFloat($('#searchMinPrice').val());
                var maxPrice = parseFloat($('#searchMaxPrice').val());

                // Nếu minPrice hoặc maxPrice không phải là số hợp lệ, trả về NaN
                if (isNaN(minPrice)) minPrice = '';
                if (isNaN(maxPrice)) maxPrice = '';

                // Tạo bộ lọc tìm kiếm cho cột giá
                table.column(12).search(function(settings, data, dataIndex) {
                    var price = parseFloat(data[12]); // Lấy giá trị của cột price (giả sử là cột 12)

                    // Nếu có minPrice và maxPrice, lọc các giá trị nằm trong khoảng này
                    if (minPrice !== '' && maxPrice !== '') {
                        return price >= minPrice && price <= maxPrice;
                    }
                    // Nếu có chỉ minPrice, lọc các giá trị lớn hơn hoặc bằng minPrice
                    else if (minPrice !== '') {
                        return price >= minPrice;
                    }
                    // Nếu có chỉ maxPrice, lọc các giá trị nhỏ hơn hoặc bằng maxPrice
                    else if (maxPrice !== '') {
                        return price <= maxPrice;
                    }
                    // Nếu không có minPrice và maxPrice, không lọc gì cả
                    else {
                        return true;
                    }
                }).draw();
            });



            // Toggle column visibility
            $('#toggleColumnsBtn').on('click', function() {
                $('#columnToggleDropdown').toggle(); // Toggle dropdown visibility
            });

            // Handle column visibility checkbox change
            $('.toggle-column-checkbox').on('change', function() {
                var column = table.column($(this).data('column'));
                column.visible($(this).prop('checked'));
            });
        });
    </script>
</head>

<body>

    <div class="container">
        <h2 class="my-3">Property Information Table</h2>
        <!-- 3 Cards Above the Table -->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Total Properties</strong>
                    </div>
                    <div class="card-body">
                        <p id="totalProperties">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Available Properties</strong>
                    </div>
                    <div class="card-body">
                        <p id="availableProperties">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Rented Properties</strong>
                    </div>
                    <div class="card-body">
                        <p id="rentedProperties">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Average Price</strong>
                    </div>
                    <div class="card-body">
                        <p id="averagePrice">$0.00</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Filter Dropdown -->
        <div class="my-3">
            <button class="btn btn-primary " id="statusFilterBtn"> <i class="fas fa-filter"></i> Filter by Status: <span id="statusFilterText">All</span></button>
            <div id="statusFilterDropdown" class="dropdown-menu" style="display: none;">
                <a class="dropdown-item" href="#" data-status="All">All</a>
                <a class="dropdown-item" href="#" data-status="1">Available</a>
                <a class="dropdown-item" href="#" data-status="0">Rented</a>
            </div>
        </div>

        <!-- Toggle Columns Button -->
        <button id="toggleColumnsBtn" class="btn btn-secondary toggle-columns">
            <i class="fas fa-columns"></i> Toggle Columns
        </button>
        <div id="columnToggleDropdown" class="dropdown-menu" style="display: none;">
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="0" checked> Property ID</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="1" checked> Property Name</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="2" checked> Landlord ID</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="3" checked> Location</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="4" checked> Location Details</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="5" checked> Education and Community</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="6" checked> Bedrooms</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="7" checked> Bathrooms</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="8" checked> Area</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="9" checked> View</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="10" checked> Floor</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="11" checked> Status</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="12" checked> Price per Month</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="13" checked> Created At</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="14" checked> Updated At</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="15" checked> Description</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="16" checked> Available Date</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="17" checked> Guest Capacity</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="18" checked> Elevator</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="19" checked> City</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="20" checked> District</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="21" checked> Accommodation Type</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="22" checked> Room</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="23" checked> Wifi</label><br>
            <label><input type="checkbox" class="toggle-column-checkbox" data-column="24" checked> Internet Speed</label><br>
        </div>

        <!-- Filter Section -->
        <button id="filterBtn" class="btn btn-primary">
            <i class="fas fa-filter"></i> Filter
        </button>
        <div id="filterSection" class="filter-section">
            <input id="searchPropertyName" class="form-control my-2" type="text" placeholder="Search by Property Name">
            <input id="searchMinPrice" class="form-control my-2" type="number" placeholder="Min Price">
            <input id="searchMaxPrice" class="form-control my-2" type="number" placeholder="Max Price">
        </div>


        <!-- Property Table -->
        <div class="table-container">
            <table id="propertyTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Property ID</th>
                        <th>Property Name</th>
                        <th>Landlord ID</th>
                        <th>Location</th>
                        <th>Location Details</th>
                        <th>Education and Community</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Area</th>
                        <th>View</th>
                        <th>Floor</th>
                        <th>Status</th>
                        <th>Price per Month</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Description</th>
                        <th>Available Date</th>
                        <th>Guest Capacity</th>
                        <th>Elevator</th>
                        <th>City</th>
                        <th>District</th>
                        <th>Accommodation Type</th>
                        <th>Room</th>
                        <th>Wifi</th>
                        <th>Internet Speed</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($properties ?? [] as $property)
                    <tr>
                        <td>{{ $property->property_id ?:'N/A'}}</td>
                        <td contenteditable="true">{{ $property->property_name ?:'N/A'}}</td>
                        <td>{{ $property->landlord_id ?:'N/A'}}</td>
                        <td>{{ $property->location ?:'N/A'}}</td>
                        <td>{{ $property->location_details ?:'N/A'}}</td>
                        <td>{{ $property->education_and_community ?:'N/A'}}</td>
                        <td>{{ $property->nbedrooms ?:'N/A'}}</td>
                        <td>{{ $property->nbathrooms ?:'N/A'}}</td>
                        <td>{{ $property->area ?:'N/A'}} m²</td>
                        <td>{{ $property->view ?:'N/A'}}</td>
                        <td>{{ $property->floor ?:'N/A'}}</td>
                        <td>{{ $property->status ?:'N/A'}}</td>
                        <td>{{ $property->price_per_month ?:'N/A'}}</td>
                        <td>{{ optional($property->created_at)->format('Y-m-d') ?? 'N/A' }}</td>
                        <td>{{ optional($property->updated_at)->format('Y-m-d') ?? 'N/A' }}</td>
                        <td>{{ $property->description ?:'N/A'}}</td>
                        <td>{{ $property->available ?:'N/A'}}</td>
                        <td>{{ $property->guest_capacity ?:'N/A'}}</td>
                        <td>{{ $property->elevator ?:'N/A'}}</td>
                        <td>{{ $property->city ?:'N/A'}}</td>
                        <td>{{ $property->district ?:'N/A'}}</td>
                        <td>{{ $property->accommodation_type ?:'N/A'}}</td>
                        <td>{{ $property->room ?:'N/A'}}</td>
                        <td>{{ $property->wifi ?:'N/A'}}</td>
                        <td>{{ $property->internetSpeed ?:'N/A'}}</td>
                        <td>
                            <button class="btn btn-info view-btn">
                                <i class="fas fa-eye"></i> View
                            </button>

                            <a href="{{URL::to('/editLandlordProperty/'.$property->property_id)}}">
                                <button class="btn btn-warning edit-btn">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                            </a>

                            <!-- Delete button -->
                            <a href="{{ URL::to('/deleteLandlordProperty/'.$property->property_id) }}"
                                onclick="return confirm('Are you sure you want to delete this property?');">
                                <button class="btn btn-danger delete-btn">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </a>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="12"><strong>This page</strong></td>
                        <td><strong>Total price:</strong> <span id="totalPrice">$0.00</span></td>
                    </tr>
                    <tr>
                        <td colspan="12"><strong>All properties</strong></td>
                        <td><strong>Total price:</strong> <span id="totalPriceAll">$0.00</span></td>
                    </tr>
                </tfoot>

            </table>
        </div>


        <!-- Modal for Property Details -->
        <div id="propertyDetailsModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h4>Property Details</h4>
                <div class="modal-body"></div>
                <button class="cancelbtn">Close</button>
            </div>
        </div>

        <!-- Confirmation Modal for Delete -->
        <div id="confirmDeleteModal" class="modal">
            <div class="modal-content">
                <h4>Are you sure you want to delete this property?</h4>
                <button id="confirmDeleteBtn" class="btn btn-danger">Delete</button>
                <button class="btn btn-secondary cancelDeleteBtn">Cancel</button>
            </div>
        </div>
    </div>


</body>

</html>