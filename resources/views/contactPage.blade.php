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
        <h1>We Value Your Feedback</h1>
        <div class="blocks">
            <form role="form" action="{{URL::to('/saveFeedback')}}" method="post">
                {{ csrf_field() }}
                <div class="left-block">
                    <div class="purpose">
                        <h4>How can we assist you today?</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="Guest">
                            <label class="form-check-label" for="flexRadioDefault1">
                                I'm a Customer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="Landlord">
                            <label class="form-check-label" for="flexRadioDefault2">
                                I'm a Landlord
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3" value="Other">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Something else
                            </label>
                        </div>
                    </div>
    
                    <form class="row g-3 input">
                        <div class="row align-items-center no-padding-margin">
                            <div class="col-sm-9 ps-2">
                                <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row align-items-center no-padding-margin">
                            <div class="col-sm-9 ps-2">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row align-items-center no-padding-margin">
                            <div class="col-sm-9 ps-2">
                                <input id="phone" type="tel" name="phone_number" class="form-control" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="form-group textarea-input" id="textareaInput">
                            <textarea class="form-control" id="otherDetails" name="message" rows="3" placeholder="Write your feedback here, including any suggestions or issues you have encountered."></textarea>
                        </div>
                        <button type="submit" class="Send-btn">Send</button>
                    </form>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                </div>
            </form>


            <div class="contacts">
                <div class="headlines">
                    <h4>Reservations:</h4>
                    <h4>For Landlords:</h4>
                    <h4>For Maintenance:</h4>
                </div>

                <div class="mail-phone">
                    <p>reservations@FlexiRent.com<br>
                        0203 307 4477</p>
                    <p>supply@FlexiRent.com<br>
                        0203 307 4477</p>
                    <p>maintenance@FlexiRent.com<br>
                        0203 307 4477</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection