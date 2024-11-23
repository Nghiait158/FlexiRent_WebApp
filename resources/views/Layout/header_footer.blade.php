<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlexiRent</title>
    <link rel="stylesheet" href="{{('/Frontend/css/footer.css')}}" />
    <link rel="stylesheet" href="{{('/Frontend/css/header.css')}}" />
    <link rel="icon" type="image/x-icon" href="{{('/Frontend/Image/favicon/FlexiRent.png')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->

    {{-- Boostrapp --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</head>

<body>
    <header>

        <div class="header-container">
            <div class="header-logo">
                <a href="{{URL::to('/HomePage')}}">FlexiRent</a>
            </div>

            <div class="header-nav">
                <nav>
                    <ul>
                        <a href="{{URL::to('/HomePage')}}">Home</a>

                        <div class="custom-dropdown">
                            <button class="custom-dropdown-toggle" type="button">
                                <a class="custom-dropdown-item" href="{{ URL::to('/Landlord') }}">Landlords</a>
                            </button>
                            <ul class="custom-dropdown-menu">
                                <li><a class="custom-dropdown-link" href="{{ URL::to('/landlord/dashboard') }}">Manage Rental</a></li>
                            </ul>
                        </div>

                        <a href="{{URL::to('/Blog')}}">Blog</a>
                        <a href="{{URL::to('/Contact')}}">Contacts</a>


                        {{-- @if (Route::has('register'))
                        <form action="{{ route('register') }}">
                            
                            <button class="animated-dark-green-btn" style="color: white">Join Us!</button>

                        </form>
                        @endif --}}
                        @if (Route::has('login'))
                            <nav class="">
                                @auth
                                    {{-- <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a> --}}
                                    <form action="{{ url('/dashboard') }}">
                            
                                        <button class="animated-dark-green-btn" style="color: white; width: 100%;">Dashboard</button>
            
                                    </form>
                                @else

                                    @if (Route::has('register'))
                                        <form action="{{ route('register') }}">
                                
                                            <button class="animated-dark-green-btn" style="color: white; width: 100%;">Join Us!</button>
                
                                        </form>
                                    @endif
                                @endauth
                            </nav>
                        @endif


            </div>

            </ul>
            </nav>
        </div>


        </div>

    </header>

    <main>
        @yield('content')

    </main>
    {{-- <div style="height: 550px; background-color:red;" > --}}



    {{-- </div> --}}



    <footer>
        <div class="containerFooter">
            <!-- Logo and Contact Info -->
            <div>
                <a href="/" target="_blank" rel="noopener noreferrer" class="footerLogo">FlexiRent</a>
                <p style="margin-top: 26px;">Contact number: +84 77889999</p>


                <div class="social-icons">
                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15.1508 8.39994C14.3843 8.39731 13.6249 8.54583 12.9159 8.83701C12.2069 9.12819 11.5623 9.55632 11.019 10.0969C10.4756 10.6375 10.0442 11.2799 9.74934 11.9873C9.45452 12.6948 9.30209 13.4535 9.30078 14.2199V20.0999C9.30078 20.3386 9.3956 20.5676 9.56439 20.7363C9.73317 20.9051 9.96209 20.9999 10.2008 20.9999H12.3008C12.5395 20.9999 12.7684 20.9051 12.9372 20.7363C13.106 20.5676 13.2008 20.3386 13.2008 20.0999V14.2199C13.2006 13.9473 13.2578 13.6778 13.3688 13.4288C13.4798 13.1798 13.642 12.957 13.8448 12.7749C14.0477 12.5928 14.2867 12.4555 14.5461 12.3719C14.8056 12.2884 15.0798 12.2604 15.3508 12.2899C15.8368 12.3512 16.2834 12.5886 16.606 12.9572C16.9286 13.3259 17.1046 13.8001 17.1008 14.2899V20.0999C17.1008 20.3386 17.1956 20.5676 17.3644 20.7363C17.5332 20.9051 17.7621 20.9999 18.0008 20.9999H20.1008C20.3395 20.9999 20.5684 20.9051 20.7372 20.7363C20.906 20.5676 21.0008 20.3386 21.0008 20.0999V14.2199C20.9995 13.4535 20.847 12.6948 20.5522 11.9873C20.2574 11.2799 19.826 10.6375 19.2826 10.0969C18.7393 9.55632 18.0946 9.12819 17.3857 8.83701C16.6767 8.54583 15.9172 8.39731 15.1508 8.39994Z" fill="#064749" />
                            <path d="M6.6 9.2998H3.9C3.40294 9.2998 3 9.70275 3 10.1998V20.0998C3 20.5969 3.40294 20.9998 3.9 20.9998H6.6C7.09706 20.9998 7.5 20.5969 7.5 20.0998V10.1998C7.5 9.70275 7.09706 9.2998 6.6 9.2998Z" fill="#064749" />
                            <path d="M5.25 7.5C6.49264 7.5 7.5 6.49264 7.5 5.25C7.5 4.00736 6.49264 3 5.25 3C4.00736 3 3 4.00736 3 5.25C3 6.49264 4.00736 7.5 5.25 7.5Z" fill="#064749" />
                        </svg></a>
                    <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17 3.50005C17 3.36745 16.9473 3.24027 16.8536 3.1465C16.7598 3.05273 16.6326 3.00005 16.5 3.00005H14C12.7411 2.93734 11.5086 3.37544 10.5717 4.21863C9.63485 5.06182 9.06978 6.24155 9 7.50005V10.2001H6.5C6.36739 10.2001 6.24021 10.2527 6.14645 10.3465C6.05268 10.4403 6 10.5674 6 10.7001V13.3001C6 13.4327 6.05268 13.5598 6.14645 13.6536C6.24021 13.7474 6.36739 13.8001 6.5 13.8001H9V20.5001C9 20.6327 9.05268 20.7598 9.14645 20.8536C9.24021 20.9474 9.36739 21.0001 9.5 21.0001H12.5C12.6326 21.0001 12.7598 20.9474 12.8536 20.8536C12.9473 20.7598 13 20.6327 13 20.5001V13.8001H15.62C15.7312 13.8017 15.8397 13.7661 15.9285 13.6991C16.0172 13.6321 16.0811 13.5374 16.11 13.4301L16.83 10.8301C16.8499 10.7562 16.8526 10.6787 16.8378 10.6036C16.8231 10.5286 16.7913 10.4579 16.7449 10.397C16.6985 10.3362 16.6388 10.2868 16.5704 10.2526C16.5019 10.2185 16.4265 10.2005 16.35 10.2001H13V7.50005C13.0249 7.25253 13.1411 7.02317 13.326 6.85675C13.5109 6.69033 13.7512 6.59881 14 6.60005H16.5C16.6326 6.60005 16.7598 6.54737 16.8536 6.45361C16.9473 6.35984 17 6.23266 17 6.10005V3.50005Z" fill="#064749" />
                        </svg></a>
                    <a href="https://www.x.com" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M8.08029 19.9998C9.55898 20.0493 11.0326 19.8018 12.414 19.2721C13.7955 18.7424 15.0567 17.9411 16.1232 16.9156C17.1897 15.8901 18.0398 14.6613 18.6233 13.3017C19.2067 11.9421 19.5118 10.4793 19.5203 8.9998C20.1979 8.16121 20.7011 7.19563 21.0003 6.1598C21.0226 6.07796 21.0208 5.99141 20.9951 5.91057C20.9694 5.82974 20.9208 5.75806 20.8553 5.70417C20.7898 5.65027 20.7101 5.61647 20.6258 5.60683C20.5416 5.59718 20.4563 5.6121 20.3803 5.6498C20.0258 5.82045 19.6266 5.87558 19.2391 5.80741C18.8516 5.73923 18.4953 5.5512 18.2203 5.2698C17.8692 4.88538 17.4446 4.57533 16.9715 4.35803C16.4985 4.14072 15.9866 4.02059 15.4662 4.00473C14.9459 3.98888 14.4276 4.07763 13.9422 4.26574C13.4568 4.45384 13.0141 4.73746 12.6403 5.0998C12.1285 5.59546 11.7536 6.21509 11.5521 6.89847C11.3506 7.58186 11.3293 8.30575 11.4903 8.9998C8.14029 9.1998 5.84029 7.6098 4.00029 5.4298C3.94501 5.3672 3.8727 5.32205 3.79219 5.29987C3.71168 5.27769 3.62645 5.27943 3.54691 5.30488C3.46737 5.33033 3.39697 5.37839 3.34429 5.4432C3.29162 5.508 3.25895 5.58674 3.25029 5.6698C2.89976 7.61422 3.15261 9.61935 3.9749 11.4159C4.79719 13.2124 6.14953 14.7143 7.85029 15.7198C6.70992 17.0276 5.10849 17.8445 3.38029 17.9998C3.2877 18.0152 3.20223 18.0591 3.13584 18.1254C3.06945 18.1917 3.02546 18.2772 3.01003 18.3698C2.9946 18.4623 3.0085 18.5574 3.04979 18.6417C3.09108 18.726 3.15768 18.7952 3.24029 18.8398C4.74381 19.5912 6.39952 19.988 8.08029 19.9998Z" fill="#064749" />
                        </svg></a>
                </div>
                <p>©2024 FlexiRent LLC</p>
            </div>

            <div class="link-section">
                <!-- Company Links -->
                <div>
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our team</a></li>
                    </ul>
                </div>

                <!-- Guests Links -->
                <div>
                    <h4>Guests</h4>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Career</a></li>
                    </ul>
                </div>

                <!-- Privacy Links -->
                <div>
                    <h4>Privacy</h4>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>

            <!-- Subscribe -->
            <div class="stayup-section">
                <div class="textField">
                    <h4>Stay up to date</h4>
                    <p>Be the first to know about our newest apartments</p>
                </div>
                <form>
                    <input type="email" placeholder="Email address">
                    <button type="submit" style="margin-top: 18px;">Subscribe</button>
                </form>
            </div>
        </div>
    </footer>
</body>

</html>