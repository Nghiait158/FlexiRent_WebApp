@extends('Layout/header_footer')
@section('content')

<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/contactPage.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'; // JavaScript file path
    script.type = 'text/javascript';
    // Append it to the head
    document.head.appendChild(script);

    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var script = document.createElement('script');
    script.src = '/Frontend/js/phone.js'; // JavaScript file path
    script.type = 'text/javascript';
    // Append it to the head
    document.head.appendChild(script);
</script>

<div class="page-container">
    <div class="contact-container">
        <h1>Please tell us a little about you</h1>

        <div class="blocks">
            <div class="left-block">
                <div class="purpose">
                    <h4>What would you like to contact us about?</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            I'm a Customer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            I'm a Landlord
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Something else
                        </label>
                    </div>
                </div>

                <form class="row g-3 input">

                    <div class="row align-items-center no-padding-margin">
                        <div class="col-sm-9 ps-2">
                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                        </div>
                    </div>
                    <div class="row align-items-center no-padding-margin">
                        <div class="col-sm-9 ps-2">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row align-items-center no-padding-margin">
                        <div class="col-sm-9 ps-2">
                            <input id="phone" type="tel" class="form-control" placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="form-group textarea-input" id="textareaInput">
                        <textarea class="form-control" id="otherDetails" rows="3" placeholder="Message"></textarea>
                    </div>
                </form>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
            </div>

            <div class="contacts">
                <div class="headlines">
                    <h4>Reservations:</h4>
                    <h4>For Landlords:</h4>
                    <h4>For Maintenance:</h4>
                </div>

                <div class="mail-phone">
                    <p>reservations@theflexliving.com<br>
                        0203 307 4477</p>
                    <p>supply@theflexliving.com<br>
                        0203 307 4477</p>
                    <p>maintenance@theflexliving.com<br>
                        0203 307 4477</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection