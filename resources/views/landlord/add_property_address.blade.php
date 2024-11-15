
<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/Landlord/addPropertiesAddress.css';
    document.head.appendChild(link);

    var title = document.createElement('title');
    title.textContent = 'Flexirent'; // Replace with your desired title
    document.head.appendChild(title);

    // Create a link element for the favicon
    var favicon = document.createElement('link');
    favicon.rel = 'icon';
    favicon.type = 'image/png'; // Change to 'image/x-icon' if using an .ico file
    favicon.href = '/Frontend/Image/favicon/FlexiRent.png'; // Replace with the path to your favicon
    document.head.appendChild(favicon);
</script>

<div class="container">
    <div class="quote-container">
        <div class="logo">
            <a href="{{URL::to('/HomePage')}}">FlexiRent</a>
        </div>

        <div class="quote">
            <h1>Becoming a FlexiRent Landlord is easy and fast.</h1>
            <p>List your rental property starting with the full address. Please make sure it matches the location on the map.</p>
        </div>
    </div>

    <form action="{{URL::to('landlord/add_property_details')}}">
        <div class="address-container">
            <div class="address-header">
                <h2 class="title">
                    Where is your apartment?
                </h2>
                <div class="note">
                    <svg width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 8.47826C5 11.4 8.54167 15.3768 10 17C11.4583 15.3768 15 11.4 15 8.47826C15 4.82609 12.5 3 10 3C7.5 3 5 4.82609 5 8.47826Z" fill="#575D64" stroke="#575D64" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                        <circle cx="10" cy="8" r="2" fill="#F7F9FA"></circle>
                    </svg>
                    <p>Please enter the full address.
                        <br>
                        Note: Be as detailed as possible and add features like area and address so tenants can find your apartment.
                    </p>
                </div>
            </div>

            <div class="address-input">
                <input type="text" name="address-input" id="address-input" class="form-control" placeholder="Please fill exactly street name, number, area" oninput="updateMap()" required>
            
                <div class="map">
                    {{-- <h1>Location</h1> --}}
                    <iframe id="google-map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBoA17lY0Ew39efGfTQp_jOqnD_z9o41uo&q=TPHCM" style="" width="940px" height="450px" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <script>
                function updateMap() {
                    var address = document.getElementById('address-input').value;                    
                    if (!address) {
                        return;
                    }            
                    var encodedAddress = encodeURIComponent(address);
                    var iframe = document.getElementById('google-map');
                    iframe.src = `https://www.google.com/maps/embed/v1/place?key=AIzaSyBoA17lY0Ew39efGfTQp_jOqnD_z9o41uo&q=${encodedAddress}`;
                }
            </script>            

            <div class="nextBtn" >
                <button type="submit">Next</button>
            </div>
        </div>
    </form>
</div>