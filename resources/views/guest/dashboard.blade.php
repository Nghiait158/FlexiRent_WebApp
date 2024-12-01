@extends('Layout/header_sidebar_guest')
@section('contentGuest')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/Guest/dashboard_guest.css';
    document.head.appendChild(link);
</script>
<?php
$message = Session::get('message');
if ($message) {
    echo "<script>
        alert('" . addslashes($message) . "');
    </script>";
    Session::put('message', null);
}
?>

<div class="main-container">
    <div class="title">
        <h1 style="font-weight: 600">My Profile</h1>
        <p>Ready to jump back in?</p>
    </div>

    <div class="content-container">
        <div class="profile-container">
            <div class="recent-profile-container">
                <div class="info-container">
                    <p style="margin-bottom:40px"><b>Contact Information</b></p>
                    <form action="{{URL::to('/updateGuestDashboard/'.$currentGuest-> guest_id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="input-container">
                            <div class="left-input-container">
                                <div class="input-form">
                                    <input type="text" class="input-field" name="first_name" id="firstName" value="{{ $currentGuest->first_name ?:''}}" placeholder=" " required>
                                    <label for="input" class="label">First Name</label>
                                    <div class="underline"></div>
                                </div>

                                <div class="input-form">
                                    <input type="text" class="input-field" name="phone_number" id="phone" value="{{ $currentGuest->phone_number ?:'N/A'}}" placeholder=" " required>
                                    <label for="input" class="label">Phone</label>
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="right-input-container">
                                <div class="input-form">
                                    <input type="text" class="input-field" name="last_name" id="lastName" value="{{ $currentGuest->last_name ?:'N/A'}}" placeholder=" " required>
                                    <label for="input" class="label">Last Name</label>
                                    <div class="underline"></div>
                                </div>

                                <div class="input-form">
                                    <input type="text" class="input-field" name="purpose_of_stay" id="purposeOfStay" value="{{ $currentGuest->purpose_of_stay ?:''}}" placeholder=" ">
                                    <label for="input" class="label">Purpose of stay</label>
                                    <div class="underline"></div>
                                </div>
                            </div>

                        </div>

                        <div class="button-container">
                            <button type="submit" class="btn btn-update">Update Profile</button>
                        </div>
                    </form>
                </div>

                <hr class="solid-line">

                <div class="info-container">
                    <p style="margin-bottom:40px"><b>Change Email</b></p>
                    <form
                        action="{{ URL::to('/updateEmailGuest/' . $currentGuest->guest_id) }}"
                        method="post"
                        onsubmit="return validateEmails()">
                        {{ csrf_field() }}

                        <div class="input-container">
                            <div class="left-input-container">
                                <!-- New Email Input -->
                                <div class="input-form">
                                    <input type="text" id="new-email" name="new_email" class="input-field" placeholder=" " required>
                                    <label for="new-email" class="label">New Email</label>
                                    <div class="underline"></div>
                                </div>

                                <!-- Old Email Input -->
                                <div class="input-form">
                                    <input type="text" id="old-email" name="old_email" class="input-field" name="email" value="{{ $currentGuest->user->email}}" placeholder=" " readonly>
                                    <label for="old-email" class="label">Current Email</label>
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="right-input-container">
                                <!-- Confirm New Email Input -->
                                <div class="input-form">
                                    <input type="text" id="confirm-new-email" name="confirm_new_email" class="input-field" placeholder=" " required>
                                    <label for="confirm-new-email" class="label">Confirm New Email</label>
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Error Message -->
                        <div id="error-message" class="error" style="display: none; color: red; text-align: center; margin-top: 10px;">
                            Emails do not match.
                        </div>

                        <div class="button-container">
                            <button type="submit" class="btn btn-update">Change Email</button>
                        </div>
                    </form>
                </div>

                <script>
                    function validateEmails() {
                        const newEmail = document.getElementById('new-email').value;
                        const confirmNewEmail = document.getElementById('confirm-new-email').value;
                        const errorMessage = document.getElementById('error-message');

                        if (newEmail !== confirmNewEmail) {
                            errorMessage.style.display = 'block';
                            errorMessage.textContent = 'New Email and Confirm New Email must match.';
                            return false; // Prevent form submission
                        }

                        errorMessage.style.display = 'none';
                        return true; // Allow form submission
                    }
                </script>
            </div>


            <div class="modify-profile-container">
                <div class="info-container">
                    <p style="margin-bottom:40px"><b>Change Password</b></p>
                    <div class="button-container">
                        <button onclick="window.location.href='{{ route('password.request')}}'" class="btn btn-update">
                            Click here to change your password
                        </button>
                    </div>
                </div>
            </div>


        </div>
        <div class="avatar-container">
            <p><b>Photo</b></p>
            <div class="avatar-img">
                <img src="/Frontend/Image/Guest/avatar.png" alt="">
            </div>
            <div class="image-input-container">
                <input type="file" id="image-input" accept="image/*">
                <div class="image-input-content">
                    <span class="image-input-icon">&#128247;</span> <!-- Camera emoji as an example -->
                    <span class="image-input-text">Upload Profile Photo</span>
                </div>
            </div>

            <p style="display:flex; justify-content:center; font-size:12px; color: gray">*minimum 500px x 500px</p>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            Copyright &#169; 2024 Flexirent. All Right Reserved.
        </div>
    </footer>
</div>
@endsection