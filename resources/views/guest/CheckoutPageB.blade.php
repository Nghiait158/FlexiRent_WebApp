@extends('Layout/header_footer')
@section('content')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/checkoutPageB.bootstrap.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/checkoutPageB.css'; // Your CSS file path
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
    script.src = '/Frontend/js/checkoutPageB.js'; // JavaScript file path
    script.type = 'text/javascript';
    // Append it to the head
    document.head.appendChild(script);


    var script = document.createElement('script');
    script.src = '/Frontend/js/phone.js'; // JavaScript file path
    script.type = 'text/javascript';
    // Append it to the head
    document.head.appendChild(script);


    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/calendar-jquery-ui.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    var script = document.createElement('script');
    script.src = '/Frontend/js/calendar.js'; // JavaScript file path
    script.type = 'text/javascript';
    // Append it to the head
    document.head.appendChild(script);


    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/resources/demos/style.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);
</script>
<form id="rentForm" action="{{ URL::to('/savedBooking/'.$propertyDetail-> property_id.'/'.$currentGuest->guest_id) }}" method="POST">
    {{ csrf_field() }}
    <div class="page-container">
        <div class="guest-container">
            <h2>Guest details</h2>
            <div class="field">
                <div class="input">
                    {{-- <form class="row g-3"> --}}
                    <div class="row mb-3 align-items-center no-padding-margin">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fName" name="fName" placeholder="First name">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center no-padding-margin">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lName" name="lName" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center no-padding-margin">
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email to receive booking information">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center no-padding-margin">
                        <div class="col-sm-9">
                            <input id="phone" type="tel" name="phone_number" class="form-control" placeholder="Enter phone number">
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


                <div class="purpose">
                    <h3>Purpose of stay</h3>

                    <div class="form-check mb-2 pl-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Business Travel/ Work">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Bussiness Travel/ Work
                        </label>
                    </div>
                    <div class="form-check mb-2 pl-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Moving to this city or country">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Moving to this city or country
                        </label>
                    </div>
                    <div class="form-check mb-2 pl-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Holiday">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Holiday
                        </label>
                    </div>
                    <div class="form-check mb-2 pl-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="Other">
                        <label class="form-check-label" for="flexRadioDefault4">
                            Other
                        </label>
                    </div>

                    <div class="form-group additional-input" id="additionalInput">
                        <input type="text" class="form-control" id="additionalInfo" name="purposeExplain" placeholder="Name of Employer/ Organization">
                    </div>

                    <div class="form-group textarea-input" id="textareaInput">
                        <textarea class="form-control" id="otherDetails" name="purposeExplain" rows="3" placeholder="Give me more details"></textarea>
                    </div>
                </div>

                <div class="booking-other-person">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_booking_for_other" value="1" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            I’m booking on behalf of someone else </label>
                    </div>
                    <div class="row mb-3 align-items-center no-padding-margin">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Name" name="other_name" placeholder="Name">
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center no-padding-margin">
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email-guest" name="other_email" placeholder="Email of the guest">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="detail-container">
            <div class="image"></div>
            <div class="points">
                <div class="moves">
                    <div class="from move">
                        <label for="from">Move in:</label>
                        <div class="pick-date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M15 3.33317H14.1667V2.49984C14.1667 2.27882 14.0789 2.06686 13.9226 1.91058C13.7663 1.7543 13.5543 1.6665 13.3333 1.6665C13.1123 1.6665 12.9004 1.7543 12.7441 1.91058C12.5878 2.06686 12.5 2.27882 12.5 2.49984V3.33317H7.5V2.49984C7.5 2.27882 7.4122 2.06686 7.25592 1.91058C7.09964 1.7543 6.88768 1.6665 6.66667 1.6665C6.44565 1.6665 6.23369 1.7543 6.07741 1.91058C5.92113 2.06686 5.83333 2.27882 5.83333 2.49984V3.33317H5C4.33696 3.33317 3.70107 3.59656 3.23223 4.0654C2.76339 4.53424 2.5 5.17013 2.5 5.83317V15.8332C2.5 16.4962 2.76339 17.1321 3.23223 17.6009C3.70107 18.0698 4.33696 18.3332 5 18.3332H15C15.663 18.3332 16.2989 18.0698 16.7678 17.6009C17.2366 17.1321 17.5 16.4962 17.5 15.8332V5.83317C17.5 5.17013 17.2366 4.53424 16.7678 4.0654C16.2989 3.59656 15.663 3.33317 15 3.33317ZM6.66667 14.1665C6.50185 14.1665 6.34073 14.1176 6.20369 14.0261C6.06665 13.9345 5.95984 13.8043 5.89677 13.6521C5.83369 13.4998 5.81719 13.3322 5.84935 13.1706C5.8815 13.0089 5.96087 12.8605 6.07741 12.7439C6.19395 12.6274 6.34244 12.548 6.50409 12.5159C6.66574 12.4837 6.8333 12.5002 6.98557 12.5633C7.13784 12.6263 7.26799 12.7332 7.35956 12.8702C7.45113 13.0072 7.5 13.1684 7.5 13.3332C7.5 13.5542 7.4122 13.7661 7.25592 13.9224C7.09964 14.0787 6.88768 14.1665 6.66667 14.1665ZM13.3333 14.1665H10C9.77899 14.1665 9.56702 14.0787 9.41074 13.9224C9.25446 13.7661 9.16667 13.5542 9.16667 13.3332C9.16667 13.1122 9.25446 12.9002 9.41074 12.7439C9.56702 12.5876 9.77899 12.4998 10 12.4998H13.3333C13.5543 12.4998 13.7663 12.5876 13.9226 12.7439C14.0789 12.9002 14.1667 13.1122 14.1667 13.3332C14.1667 13.5542 14.0789 13.7661 13.9226 13.9224C13.7663 14.0787 13.5543 14.1665 13.3333 14.1665ZM15.8333 9.1665H4.16667V5.83317C4.16667 5.61216 4.25446 5.4002 4.41074 5.24392C4.56702 5.08764 4.77899 4.99984 5 4.99984H5.83333V5.83317C5.83333 6.05418 5.92113 6.26615 6.07741 6.42243C6.23369 6.57871 6.44565 6.6665 6.66667 6.6665C6.88768 6.6665 7.09964 6.57871 7.25592 6.42243C7.4122 6.26615 7.5 6.05418 7.5 5.83317V4.99984H12.5V5.83317C12.5 6.05418 12.5878 6.26615 12.7441 6.42243C12.9004 6.57871 13.1123 6.6665 13.3333 6.6665C13.5543 6.6665 13.7663 6.57871 13.9226 6.42243C14.0789 6.26615 14.1667 6.05418 14.1667 5.83317V4.99984H15C15.221 4.99984 15.433 5.08764 15.5893 5.24392C15.7455 5.4002 15.8333 5.61216 15.8333 5.83317V9.1665Z" fill="#181A18" />
                            </svg>
                            <input
                                type="date"
                                id="from"
                                name="from"
                                value="{{ $from }}"
                                readonly
                                class="form-control" />
                        </div>

                    </div>
                    <div class="to move">
                        <label for="to">Move out:</label>
                        <div class="pick-date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M15 3.33317H14.1667V2.49984C14.1667 2.27882 14.0789 2.06686 13.9226 1.91058C13.7663 1.7543 13.5543 1.6665 13.3333 1.6665C13.1123 1.6665 12.9004 1.7543 12.7441 1.91058C12.5878 2.06686 12.5 2.27882 12.5 2.49984V3.33317H7.5V2.49984C7.5 2.27882 7.4122 2.06686 7.25592 1.91058C7.09964 1.7543 6.88768 1.6665 6.66667 1.6665C6.44565 1.6665 6.23369 1.7543 6.07741 1.91058C5.92113 2.06686 5.83333 2.27882 5.83333 2.49984V3.33317H5C4.33696 3.33317 3.70107 3.59656 3.23223 4.0654C2.76339 4.53424 2.5 5.17013 2.5 5.83317V15.8332C2.5 16.4962 2.76339 17.1321 3.23223 17.6009C3.70107 18.0698 4.33696 18.3332 5 18.3332H15C15.663 18.3332 16.2989 18.0698 16.7678 17.6009C17.2366 17.1321 17.5 16.4962 17.5 15.8332V5.83317C17.5 5.17013 17.2366 4.53424 16.7678 4.0654C16.2989 3.59656 15.663 3.33317 15 3.33317ZM6.66667 14.1665C6.50185 14.1665 6.34073 14.1176 6.20369 14.0261C6.06665 13.9345 5.95984 13.8043 5.89677 13.6521C5.83369 13.4998 5.81719 13.3322 5.84935 13.1706C5.8815 13.0089 5.96087 12.8605 6.07741 12.7439C6.19395 12.6274 6.34244 12.548 6.50409 12.5159C6.66574 12.4837 6.8333 12.5002 6.98557 12.5633C7.13784 12.6263 7.26799 12.7332 7.35956 12.8702C7.45113 13.0072 7.5 13.1684 7.5 13.3332C7.5 13.5542 7.4122 13.7661 7.25592 13.9224C7.09964 14.0787 6.88768 14.1665 6.66667 14.1665ZM13.3333 14.1665H10C9.77899 14.1665 9.56702 14.0787 9.41074 13.9224C9.25446 13.7661 9.16667 13.5542 9.16667 13.3332C9.16667 13.1122 9.25446 12.9002 9.41074 12.7439C9.56702 12.5876 9.77899 12.4998 10 12.4998H13.3333C13.5543 12.4998 13.7663 12.5876 13.9226 12.7439C14.0789 12.9002 14.1667 13.1122 14.1667 13.3332C14.1667 13.5542 14.0789 13.7661 13.9226 13.9224C13.7663 14.0787 13.5543 14.1665 13.3333 14.1665ZM15.8333 9.1665H4.16667V5.83317C4.16667 5.61216 4.25446 5.4002 4.41074 5.24392C4.56702 5.08764 4.77899 4.99984 5 4.99984H5.83333V5.83317C5.83333 6.05418 5.92113 6.26615 6.07741 6.42243C6.23369 6.57871 6.44565 6.6665 6.66667 6.6665C6.88768 6.6665 7.09964 6.57871 7.25592 6.42243C7.4122 6.26615 7.5 6.05418 7.5 5.83317V4.99984H12.5V5.83317C12.5 6.05418 12.5878 6.26615 12.7441 6.42243C12.9004 6.57871 13.1123 6.6665 13.3333 6.6665C13.5543 6.6665 13.7663 6.57871 13.9226 6.42243C14.0789 6.26615 14.1667 6.05418 14.1667 5.83317V4.99984H15C15.221 4.99984 15.433 5.08764 15.5893 5.24392C15.7455 5.4002 15.8333 5.61216 15.8333 5.83317V9.1665Z" fill="#181A18" />
                            </svg>
                            <input
                                type="date"
                                id="to"
                                name="to"
                                value="{{ $to }}"
                                readonly
                                class="form-control" />
                        </div>
                    </div>

                </div>
                <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
                <div class="guests">
                    <h4><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.50033 9.16667C8.1596 9.16667 8.80406 8.97117 9.35223 8.6049C9.90039 8.23863 10.3276 7.71803 10.5799 7.10895C10.8322 6.49986 10.8982 5.82964 10.7696 5.18303C10.641 4.53643 10.3235 3.94249 9.85735 3.47631C9.39117 3.01014 8.79723 2.69267 8.15063 2.56405C7.50402 2.43543 6.8338 2.50144 6.22471 2.75374C5.61563 3.00603 5.09503 3.43327 4.72876 3.98143C4.36249 4.5296 4.16699 5.17406 4.16699 5.83334C4.16699 6.71739 4.51818 7.56524 5.1433 8.19036C5.76842 8.81548 6.61627 9.16667 7.50033 9.16667ZM14.167 10.8333C14.6614 10.8333 15.1448 10.6867 15.5559 10.412C15.967 10.1373 16.2875 9.74686 16.4767 9.29004C16.6659 8.83323 16.7154 8.33056 16.619 7.84561C16.5225 7.36066 16.2844 6.9152 15.9348 6.56557C15.5851 6.21594 15.1397 5.97784 14.6547 5.88137C14.1698 5.78491 13.6671 5.83442 13.2103 6.02364C12.7535 6.21286 12.363 6.53329 12.0883 6.94441C11.8136 7.35553 11.667 7.83888 11.667 8.33334C11.667 8.99638 11.9304 9.63226 12.3992 10.1011C12.8681 10.5699 13.504 10.8333 14.167 10.8333ZM17.5003 16.6667C17.7213 16.6667 17.9333 16.5789 18.0896 16.4226C18.2459 16.2663 18.3337 16.0543 18.3337 15.8333C18.333 15.0545 18.114 14.2914 17.7017 13.6307C17.2893 12.97 16.7 12.4381 16.0006 12.0954C15.3012 11.7527 14.5198 11.6128 13.745 11.6917C12.9702 11.7705 12.2329 12.065 11.617 12.5417C10.8008 11.7286 9.76204 11.1755 8.63185 10.952C7.50165 10.7285 6.33059 10.8447 5.26635 11.2859C4.2021 11.7272 3.29234 12.4736 2.65178 13.4312C2.01122 14.3888 1.66855 15.5146 1.66699 16.6667C1.66699 16.8877 1.75479 17.0996 1.91107 17.2559C2.06735 17.4122 2.27931 17.5 2.50033 17.5H12.5003C12.7213 17.5 12.9333 17.4122 13.0896 17.2559C13.2459 17.0996 13.3337 16.8877 13.3337 16.6667" fill="#181A18" />
                        </svg>Guests</h4>
                    <input type="text" name="guest_count" value="{{ $guestCount }}" readonly style="border: none; background: transparent; color: var(--Text, #181A18);
                        font-family: Lato;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: 24px;
                        display: flex;
                        align-items: center;
                        gap: 8px;">

                </div>
                <p>All utilities are included</p>
            </div>

            <div class="costs">
                <div class="cost">
                    <div class="payment">
                        <p>Average daily rent</p>
                    </div>
                    <div class="number">
                        <p id="averageDailyRent">{{ $propertyDetail->price_per_month ? round($propertyDetail->price_per_month / 30, 2) : 'N/A' }}$</p>
                        <p>incl. VAT</p>
                    </div>
                </div>

                <div class="cost">
                    <div class="payment" style="font-weight: 700;">
                        <p>Pay upon booking (50% of Total)</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.0003 1.6665C8.35215 1.6665 6.74099 2.15525 5.37058 3.07092C4.00017 3.9866 2.93206 5.28809 2.30133 6.81081C1.6706 8.33353 1.50558 10.0091 1.82712 11.6256C2.14866 13.2421 2.94234 14.727 4.10777 15.8924C5.27321 17.0578 6.75807 17.8515 8.37458 18.173C9.99109 18.4946 11.6666 18.3296 13.1894 17.6988C14.7121 17.0681 16.0136 16 16.9292 14.6296C17.8449 13.2592 18.3337 11.648 18.3337 9.99984C18.3337 8.90549 18.1181 7.82186 17.6993 6.81081C17.2805 5.79976 16.6667 4.8811 15.8929 4.10728C15.1191 3.33346 14.2004 2.71963 13.1894 2.30084C12.1783 1.88205 11.0947 1.6665 10.0003 1.6665ZM10.0003 14.1665C9.83551 14.1665 9.67439 14.1176 9.53735 14.0261C9.40031 13.9345 9.2935 13.8043 9.23043 13.6521C9.16736 13.4998 9.15085 13.3322 9.18301 13.1706C9.21516 13.0089 9.29453 12.8605 9.41107 12.7439C9.52762 12.6274 9.6761 12.548 9.83775 12.5159C9.9994 12.4837 10.167 12.5002 10.3192 12.5633C10.4715 12.6263 10.6017 12.7332 10.6932 12.8702C10.7848 13.0072 10.8337 13.1684 10.8337 13.3332C10.8337 13.5542 10.7459 13.7661 10.5896 13.9224C10.4333 14.0787 10.2213 14.1665 10.0003 14.1665ZM10.8337 10.8332C10.8337 11.0542 10.7459 11.2661 10.5896 11.4224C10.4333 11.5787 10.2213 11.6665 10.0003 11.6665C9.77932 11.6665 9.56735 11.5787 9.41107 11.4224C9.25479 11.2661 9.167 11.0542 9.167 10.8332V6.6665C9.167 6.44549 9.25479 6.23353 9.41107 6.07725C9.56735 5.92097 9.77932 5.83317 10.0003 5.83317C10.2213 5.83317 10.4333 5.92097 10.5896 6.07725C10.7459 6.23353 10.8337 6.44549 10.8337 6.6665V10.8332Z" fill="#181A18" />
                        </svg>
                    </div>
                    <div class="number">
                        <p style="font-weight: 700;">{{ $Reserve }}$</p>
                        <p>incl. VAT</p>
                    </div>
                </div>

                <div class="cost">
                    <div class="payment" style="font-weight: 700;">
                        <p>Total base rent</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.0003 1.6665C8.35215 1.6665 6.74099 2.15525 5.37058 3.07092C4.00017 3.9866 2.93206 5.28809 2.30133 6.81081C1.6706 8.33353 1.50558 10.0091 1.82712 11.6256C2.14866 13.2421 2.94234 14.727 4.10777 15.8924C5.27321 17.0578 6.75807 17.8515 8.37458 18.173C9.99109 18.4946 11.6666 18.3296 13.1894 17.6988C14.7121 17.0681 16.0136 16 16.9292 14.6296C17.8449 13.2592 18.3337 11.648 18.3337 9.99984C18.3337 8.90549 18.1181 7.82186 17.6993 6.81081C17.2805 5.79976 16.6667 4.8811 15.8929 4.10728C15.1191 3.33346 14.2004 2.71963 13.1894 2.30084C12.1783 1.88205 11.0947 1.6665 10.0003 1.6665ZM10.0003 14.1665C9.83551 14.1665 9.67439 14.1176 9.53735 14.0261C9.40031 13.9345 9.2935 13.8043 9.23043 13.6521C9.16736 13.4998 9.15085 13.3322 9.18301 13.1706C9.21516 13.0089 9.29453 12.8605 9.41107 12.7439C9.52762 12.6274 9.6761 12.548 9.83775 12.5159C9.9994 12.4837 10.167 12.5002 10.3192 12.5633C10.4715 12.6263 10.6017 12.7332 10.6932 12.8702C10.7848 13.0072 10.8337 13.1684 10.8337 13.3332C10.8337 13.5542 10.7459 13.7661 10.5896 13.9224C10.4333 14.0787 10.2213 14.1665 10.0003 14.1665ZM10.8337 10.8332C10.8337 11.0542 10.7459 11.2661 10.5896 11.4224C10.4333 11.5787 10.2213 11.6665 10.0003 11.6665C9.77932 11.6665 9.56735 11.5787 9.41107 11.4224C9.25479 11.2661 9.167 11.0542 9.167 10.8332V6.6665C9.167 6.44549 9.25479 6.23353 9.41107 6.07725C9.56735 5.92097 9.77932 5.83317 10.0003 5.83317C10.2213 5.83317 10.4333 5.92097 10.5896 6.07725C10.7459 6.23353 10.8337 6.44549 10.8337 6.6665V10.8332Z" fill="#181A18" />
                        </svg>
                    </div>
                    <div class="number">
                        {{-- <p id="totalBaseRent" name="total_cost" style="font-weight: 700;">0.00$</p> --}}
                        <input type="text" id="totalBaseRent" name="total_cost" value="0.00$"
                            style="border: none; background: transparent; font-weight: 700;">


                        <p>incl. VAT</p>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Lấy các giá trị từ HTML
                    const averageDailyRentEl = document.getElementById("averageDailyRent");
                    const fromInput = document.getElementById("from");
                    const toInput = document.getElementById("to");
                    const totalBaseRentEl = document.getElementById("totalBaseRent");

                    // Chuyển đổi giá trị
                    const averageDailyRent = parseFloat(averageDailyRentEl.textContent.replace('$', ''));
                    const fromDate = new Date(fromInput.value);
                    const toDate = new Date(toInput.value);

                    if (isNaN(averageDailyRent) || !fromDate || !toDate || fromDate >= toDate) {
                        totalBaseRentEl.textContent = "0.00$";
                        return;
                    }

                    // Tính số ngày
                    const days = (toDate - fromDate) / (1000 * 60 * 60 * 24);

                    // Tính toán Total Base Rent
                    const totalBaseRent = (averageDailyRent * days).toFixed(2);
                    totalBaseRentEl.value = `${totalBaseRent}$`; // Cập nhật giá trị cho input

                });
                document.getElementById("rentForm").addEventListener("submit", function(event) {
                    const totalBaseRentEl = document.getElementById("totalBaseRent");
                    totalBaseRentEl.value = totalBaseRentEl.value.replace('$', '');
                });
            </script>
            <div class="payment-timeline">
                <h4>Payment timeline</h4>

                <div class="steps">
                    <div class="timeline">
                        <!-- First SVG with Circle -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="300" viewBox="0 0 13 300" fill="none">
                            <line x1="6.5" y1="4" x2="6.5" y2="300" stroke="#181A18" />
                            <circle cx="6.5" cy="6.5" r="6.5" fill="#181A18" />
                            <circle cx="6.5" cy="293.5" r="6.5" fill="#181A18" />
                        </svg>


                    </div>

                    <div class="point">
                        <div class="content">
                            <div class="text">
                                <h4 style="font-weight:400">Reserve this apaptment</h4>
                                <p style="font-weight:400; font-size: 14px;">Due now</p>
                            </div>
                            <input type="text" id="Reserve" name="Reserve" value="{{ $Reserve }}$" readonly
                                style="border: none; background: transparent; color: var(--Text, #181A18);
                                   font-family: Lato; font-size: 18px; font-style: normal; 
                                   font-weight: 700; line-height: 24px; display: flex; 
                                   align-items: center; gap: 8px;">

                            {{-- <p id="Reserve">0.00$</p> --}}
                        </div>
                        <div class="content">
                            <div class="text">
                                <h4 style="font-weight:400">Receive email about booking information</h4>
                                <p style="font-weight:400; font-size: 14px;">Waiting for confirmation from the host<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10.0003 1.6665C8.35215 1.6665 6.74099 2.15525 5.37058 3.07092C4.00017 3.9866 2.93206 5.28809 2.30133 6.81081C1.6706 8.33353 1.50558 10.0091 1.82712 11.6256C2.14866 13.2421 2.94234 14.727 4.10777 15.8924C5.27321 17.0578 6.75807 17.8515 8.37458 18.173C9.99109 18.4946 11.6666 18.3296 13.1894 17.6988C14.7121 17.0681 16.0136 16 16.9292 14.6296C17.8449 13.2592 18.3337 11.648 18.3337 9.99984C18.3337 8.90549 18.1181 7.82186 17.6993 6.81081C17.2805 5.79976 16.6667 4.8811 15.8929 4.10728C15.1191 3.33346 14.2004 2.71963 13.1894 2.30084C12.1783 1.88205 11.0947 1.6665 10.0003 1.6665ZM10.0003 14.1665C9.83551 14.1665 9.67439 14.1176 9.53735 14.0261C9.40031 13.9345 9.2935 13.8043 9.23043 13.6521C9.16736 13.4998 9.15085 13.3322 9.18301 13.1706C9.21516 13.0089 9.29453 12.8605 9.41107 12.7439C9.52762 12.6274 9.6761 12.548 9.83775 12.5159C9.9994 12.4837 10.167 12.5002 10.3192 12.5633C10.4715 12.6263 10.6017 12.7332 10.6932 12.8702C10.7848 13.0072 10.8337 13.1684 10.8337 13.3332C10.8337 13.5542 10.7459 13.7661 10.5896 13.9224C10.4333 14.0787 10.2213 14.1665 10.0003 14.1665ZM10.8337 10.8332C10.8337 11.0542 10.7459 11.2661 10.5896 11.4224C10.4333 11.5787 10.2213 11.6665 10.0003 11.6665C9.77932 11.6665 9.56735 11.5787 9.41107 11.4224C9.25479 11.2661 9.167 11.0542 9.167 10.8332V6.6665C9.167 6.44549 9.25479 6.23353 9.41107 6.07725C9.56735 5.92097 9.77932 5.83317 10.0003 5.83317C10.2213 5.83317 10.4333 5.92097 10.5896 6.07725C10.7459 6.23353 10.8337 6.44549 10.8337 6.6665V10.8332Z" fill="#181A18" />
                                    </svg></p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h4 style="font-weight:400">Receive email confirmation successfully</h4>
                                <p style="font-weight:400; font-size: 14px;">Then pay deposit<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10.0003 1.6665C8.35215 1.6665 6.74099 2.15525 5.37058 3.07092C4.00017 3.9866 2.93206 5.28809 2.30133 6.81081C1.6706 8.33353 1.50558 10.0091 1.82712 11.6256C2.14866 13.2421 2.94234 14.727 4.10777 15.8924C5.27321 17.0578 6.75807 17.8515 8.37458 18.173C9.99109 18.4946 11.6666 18.3296 13.1894 17.6988C14.7121 17.0681 16.0136 16 16.9292 14.6296C17.8449 13.2592 18.3337 11.648 18.3337 9.99984C18.3337 8.90549 18.1181 7.82186 17.6993 6.81081C17.2805 5.79976 16.6667 4.8811 15.8929 4.10728C15.1191 3.33346 14.2004 2.71963 13.1894 2.30084C12.1783 1.88205 11.0947 1.6665 10.0003 1.6665ZM10.0003 14.1665C9.83551 14.1665 9.67439 14.1176 9.53735 14.0261C9.40031 13.9345 9.2935 13.8043 9.23043 13.6521C9.16736 13.4998 9.15085 13.3322 9.18301 13.1706C9.21516 13.0089 9.29453 12.8605 9.41107 12.7439C9.52762 12.6274 9.6761 12.548 9.83775 12.5159C9.9994 12.4837 10.167 12.5002 10.3192 12.5633C10.4715 12.6263 10.6017 12.7332 10.6932 12.8702C10.7848 13.0072 10.8337 13.1684 10.8337 13.3332C10.8337 13.5542 10.7459 13.7661 10.5896 13.9224C10.4333 14.0787 10.2213 14.1665 10.0003 14.1665ZM10.8337 10.8332C10.8337 11.0542 10.7459 11.2661 10.5896 11.4224C10.4333 11.5787 10.2213 11.6665 10.0003 11.6665C9.77932 11.6665 9.56735 11.5787 9.41107 11.4224C9.25479 11.2661 9.167 11.0542 9.167 10.8332V6.6665C9.167 6.44549 9.25479 6.23353 9.41107 6.07725C9.56735 5.92097 9.77932 5.83317 10.0003 5.83317C10.2213 5.83317 10.4333 5.92097 10.5896 6.07725C10.7459 6.23353 10.8337 6.44549 10.8337 6.6665V10.8332Z" fill="#181A18" />
                                    </svg></p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="text">
                                <h4 style="font-weight:400">After move-out</h4>
                                <p style="font-weight:400; font-size: 14px;">Receive your 50$ deposit back within 30 days<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10.0003 1.6665C8.35215 1.6665 6.74099 2.15525 5.37058 3.07092C4.00017 3.9866 2.93206 5.28809 2.30133 6.81081C1.6706 8.33353 1.50558 10.0091 1.82712 11.6256C2.14866 13.2421 2.94234 14.727 4.10777 15.8924C5.27321 17.0578 6.75807 17.8515 8.37458 18.173C9.99109 18.4946 11.6666 18.3296 13.1894 17.6988C14.7121 17.0681 16.0136 16 16.9292 14.6296C17.8449 13.2592 18.3337 11.648 18.3337 9.99984C18.3337 8.90549 18.1181 7.82186 17.6993 6.81081C17.2805 5.79976 16.6667 4.8811 15.8929 4.10728C15.1191 3.33346 14.2004 2.71963 13.1894 2.30084C12.1783 1.88205 11.0947 1.6665 10.0003 1.6665ZM10.0003 14.1665C9.83551 14.1665 9.67439 14.1176 9.53735 14.0261C9.40031 13.9345 9.2935 13.8043 9.23043 13.6521C9.16736 13.4998 9.15085 13.3322 9.18301 13.1706C9.21516 13.0089 9.29453 12.8605 9.41107 12.7439C9.52762 12.6274 9.6761 12.548 9.83775 12.5159C9.9994 12.4837 10.167 12.5002 10.3192 12.5633C10.4715 12.6263 10.6017 12.7332 10.6932 12.8702C10.7848 13.0072 10.8337 13.1684 10.8337 13.3332C10.8337 13.5542 10.7459 13.7661 10.5896 13.9224C10.4333 14.0787 10.2213 14.1665 10.0003 14.1665ZM10.8337 10.8332C10.8337 11.0542 10.7459 11.2661 10.5896 11.4224C10.4333 11.5787 10.2213 11.6665 10.0003 11.6665C9.77932 11.6665 9.56735 11.5787 9.41107 11.4224C9.25479 11.2661 9.167 11.0542 9.167 10.8332V6.6665C9.167 6.44549 9.25479 6.23353 9.41107 6.07725C9.56735 5.92097 9.77932 5.83317 10.0003 5.83317C10.2213 5.83317 10.4333 5.92097 10.5896 6.07725C10.7459 6.23353 10.8337 6.44549 10.8337 6.6665V10.8332Z" fill="#181A18" />
                                    </svg></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="payment-method-container">
        <div class="payment-method">
            <h3>Payment method</h3>

            <div class="selection-container">

                <select class="form-select" name="payment_method" aria-label="Default select example">
                    <option selected>Select payment method</option>
                    <option class="options" value="paypal">Paypal</option>
                    <option class="options" value="bank_transfer">Bank Transfer</option>
                    <option class="options" value="cash">Cash</option>
                    <option class="options" value="credit_card">Credit card</option>

                </select>

                <div class="ToS">
                    <p>By clicking "Book" below, I have read and agreed to the <a href="">key contract terms</a>, <a href="">cancellation policy and apartment & building rules</a> , and to pay the total amount shown.</p>
                    <p>Please check all information carefully before clicking this button!!!</p>
                </div>

                <div>
                    {{-- <button></button> --}}
                    <button type="submit" class="book-btn">Book</button>
                </div>
            </div>
        </div>

        <div class="adjust"></div>
    </div>


</form>



@endsection