@extends('Layout/header_footer')
@section('content')
<div class="intro-video">
    <video autoplay loop muted>
        <source src="{{ ('/Frontend/Video/intro-video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="intro-video-text">
        <div class="text-container">
            <h1>
                Unlock Your Property's Potential
            </h1>
            <p>FlexiRent makes it easy and fast to find the right tenants, optimizes the management of property,
                and
                ensures that all transactions are safe and convenient</p>
        </div>
    </div>


    <div class="searchBar_booking">

        <div class="searchPart1">
            <div class="searchCity">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M17.2583 16.075L14.425 13.25C15.3392 12.0854 15.8352 10.6472 15.8333 9.16667C15.8333 7.84813 15.4423 6.5592 14.7098 5.46287C13.9773 4.36654 12.9361 3.51206 11.7179 3.00747C10.4997 2.50289 9.15927 2.37087 7.86607 2.6281C6.57286 2.88534 5.38497 3.52027 4.45262 4.45262C3.52027 5.38497 2.88534 6.57286 2.6281 7.86607C2.37087 9.15927 2.50289 10.4997 3.00747 11.7179C3.51206 12.9361 4.36654 13.9773 5.46287 14.7098C6.5592 15.4423 7.84813 15.8333 9.16667 15.8333C10.6472 15.8352 12.0854 15.3392 13.25 14.425L16.075 17.2583C16.1525 17.3364 16.2446 17.3984 16.3462 17.4407C16.4477 17.4831 16.5567 17.5048 16.6667 17.5048C16.7767 17.5048 16.8856 17.4831 16.9872 17.4407C17.0887 17.3984 17.1809 17.3364 17.2583 17.2583C17.3364 17.1809 17.3984 17.0887 17.4407 16.9872C17.4831 16.8856 17.5048 16.7767 17.5048 16.6667C17.5048 16.5567 17.4831 16.4477 17.4407 16.3462C17.3984 16.2446 17.3364 16.1525 17.2583 16.075ZM4.16667 9.16667C4.16667 8.17776 4.45991 7.21106 5.00932 6.38882C5.55873 5.56657 6.33962 4.92571 7.25325 4.54727C8.16688 4.16883 9.17222 4.06982 10.1421 4.26274C11.112 4.45567 12.0029 4.93187 12.7022 5.63114C13.4015 6.3304 13.8777 7.22131 14.0706 8.19122C14.2635 9.16112 14.1645 10.1665 13.7861 11.0801C13.4076 11.9937 12.7668 12.7746 11.9445 13.324C11.1223 13.8734 10.1556 14.1667 9.16667 14.1667C7.84059 14.1667 6.56882 13.6399 5.63114 12.7022C4.69345 11.7645 4.16667 10.4928 4.16667 9.16667Z"
                        fill="#181A18" />
                </svg>
                <p>Select a city</p>
            </div>
            <div class="vertical-line"></div>
            <div class="searchDate">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path
                        d="M15.2 3.33366H14.3667V2.50033C14.3667 2.27931 14.2789 2.06735 14.1226 1.91107C13.9663 1.75479 13.7544 1.66699 13.5333 1.66699C13.3123 1.66699 13.1004 1.75479 12.9441 1.91107C12.7878 2.06735 12.7 2.27931 12.7 2.50033V3.33366H7.70001V2.50033C7.70001 2.27931 7.61221 2.06735 7.45593 1.91107C7.29965 1.75479 7.08769 1.66699 6.86668 1.66699C6.64566 1.66699 6.4337 1.75479 6.27742 1.91107C6.12114 2.06735 6.03335 2.27931 6.03335 2.50033V3.33366H5.20001C4.53697 3.33366 3.90109 3.59705 3.43225 4.06589C2.9634 4.53473 2.70001 5.17062 2.70001 5.83366V15.8337C2.70001 16.4967 2.9634 17.1326 3.43225 17.6014C3.90109 18.0703 4.53697 18.3337 5.20001 18.3337H15.2C15.8631 18.3337 16.4989 18.0703 16.9678 17.6014C17.4366 17.1326 17.7 16.4967 17.7 15.8337V5.83366C17.7 5.17062 17.4366 4.53473 16.9678 4.06589C16.4989 3.59705 15.8631 3.33366 15.2 3.33366ZM6.86668 14.167C6.70186 14.167 6.54074 14.1181 6.4037 14.0266C6.26666 13.935 6.15985 13.8048 6.09678 13.6526C6.03371 13.5003 6.0172 13.3327 6.04936 13.1711C6.08151 13.0094 6.16088 12.8609 6.27742 12.7444C6.39397 12.6279 6.54245 12.5485 6.7041 12.5163C6.86575 12.4842 7.03331 12.5007 7.18558 12.5638C7.33785 12.6268 7.468 12.7336 7.55957 12.8707C7.65114 13.0077 7.70001 13.1688 7.70001 13.3337C7.70001 13.5547 7.61221 13.7666 7.45593 13.9229C7.29965 14.0792 7.08769 14.167 6.86668 14.167ZM13.5333 14.167H10.2C9.979 14.167 9.76704 14.0792 9.61076 13.9229C9.45448 13.7666 9.36668 13.5547 9.36668 13.3337C9.36668 13.1126 9.45448 12.9007 9.61076 12.7444C9.76704 12.5881 9.979 12.5003 10.2 12.5003H13.5333C13.7544 12.5003 13.9663 12.5881 14.1226 12.7444C14.2789 12.9007 14.3667 13.1126 14.3667 13.3337C14.3667 13.5547 14.2789 13.7666 14.1226 13.9229C13.9663 14.0792 13.7544 14.167 13.5333 14.167ZM16.0333 9.16699H4.36668V5.83366C4.36668 5.61265 4.45448 5.40068 4.61076 5.2444C4.76704 5.08812 4.979 5.00033 5.20001 5.00033H6.03335V5.83366C6.03335 6.05467 6.12114 6.26663 6.27742 6.42291C6.4337 6.5792 6.64566 6.66699 6.86668 6.66699C7.08769 6.66699 7.29965 6.5792 7.45593 6.42291C7.61221 6.26663 7.70001 6.05467 7.70001 5.83366V5.00033H12.7V5.83366C12.7 6.05467 12.7878 6.26663 12.9441 6.42291C13.1004 6.5792 13.3123 6.66699 13.5333 6.66699C13.7544 6.66699 13.9663 6.5792 14.1226 6.42291C14.2789 6.26663 14.3667 6.05467 14.3667 5.83366V5.00033H15.2C15.421 5.00033 15.633 5.08812 15.7893 5.2444C15.9455 5.40068 16.0333 5.61265 16.0333 5.83366V9.16699Z"
                        fill="#181A18" />
                </svg>
                <p>Move-in</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path
                        d="M4.36635 10.8337H14.2497L11.2247 14.467C11.1546 14.5513 11.1019 14.6485 11.0694 14.7531C11.037 14.8578 11.0254 14.9678 11.0355 15.0769C11.0558 15.2973 11.1628 15.5005 11.333 15.642C11.5032 15.7834 11.7226 15.8515 11.943 15.8312C12.1633 15.8109 12.3666 15.7038 12.508 15.5337L16.6747 10.5337C16.7027 10.4939 16.7278 10.4521 16.7497 10.4087C16.7497 10.367 16.7914 10.342 16.808 10.3003C16.8458 10.2048 16.8656 10.1031 16.8664 10.0003C16.8656 9.89759 16.8458 9.79588 16.808 9.70033C16.808 9.65866 16.7664 9.63366 16.7497 9.59199C16.7278 9.54854 16.7027 9.50676 16.6747 9.46699L12.508 4.46699C12.4297 4.37292 12.3316 4.29727 12.2206 4.24542C12.1097 4.19357 11.9888 4.16679 11.8664 4.16699C11.6716 4.16661 11.4829 4.23443 11.333 4.35866C11.2486 4.42862 11.1789 4.51454 11.1278 4.61149C11.0766 4.70845 11.0451 4.81454 11.0351 4.92368C11.025 5.03283 11.0366 5.14289 11.0691 5.24756C11.1017 5.35223 11.1545 5.44945 11.2247 5.53366L14.2497 9.16699H4.36635C4.14534 9.16699 3.93338 9.25479 3.7771 9.41107C3.62082 9.56735 3.53302 9.77931 3.53302 10.0003C3.53302 10.2213 3.62082 10.4333 3.7771 10.5896C3.93338 10.7459 4.14534 10.8337 4.36635 10.8337Z"
                        fill="#181A18" />
                </svg>
                <p>Move-out</p>
            </div>
            <div class="vertical-line"></div>
            <div class="searchGuest">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path
                        d="M7.90029 9.16667C8.55956 9.16667 9.20403 8.97117 9.75219 8.6049C10.3004 8.23863 10.7276 7.71803 10.9799 7.10895C11.2322 6.49986 11.2982 5.82964 11.1696 5.18303C11.041 4.53643 10.7235 3.94249 10.2573 3.47631C9.79114 3.01014 9.19719 2.69267 8.55059 2.56405C7.90399 2.43543 7.23376 2.50144 6.62468 2.75374C6.01559 3.00603 5.49499 3.43327 5.12872 3.98143C4.76245 4.5296 4.56696 5.17406 4.56696 5.83334C4.56696 6.71739 4.91814 7.56524 5.54327 8.19036C6.16839 8.81548 7.01623 9.16667 7.90029 9.16667ZM14.567 10.8333C15.0614 10.8333 15.5448 10.6867 15.9559 10.412C16.367 10.1373 16.6874 9.74686 16.8767 9.29004C17.0659 8.83323 17.1154 8.33056 17.0189 7.84561C16.9225 7.36066 16.6844 6.9152 16.3347 6.56557C15.9851 6.21594 15.5396 5.97784 15.0547 5.88137C14.5697 5.78491 14.0671 5.83442 13.6102 6.02364C13.1534 6.21286 12.763 6.53329 12.4883 6.94441C12.2136 7.35553 12.067 7.83888 12.067 8.33334C12.067 8.99638 12.3303 9.63226 12.7992 10.1011C13.268 10.5699 13.9039 10.8333 14.567 10.8333ZM17.9003 16.6667C18.1213 16.6667 18.3333 16.5789 18.4895 16.4226C18.6458 16.2663 18.7336 16.0543 18.7336 15.8333C18.733 15.0545 18.514 14.2914 18.1016 13.6307C17.6893 12.97 17.0999 12.4381 16.4006 12.0954C15.7012 11.7527 14.9198 11.6128 14.1449 11.6917C13.3701 11.7705 12.6329 12.065 12.017 12.5417C11.2007 11.7286 10.162 11.1755 9.03181 10.952C7.90162 10.7285 6.73056 10.8447 5.66631 11.2859C4.60207 11.7272 3.6923 12.4736 3.05174 13.4312C2.41118 14.3888 2.06851 15.5146 2.06696 16.6667C2.06696 16.8877 2.15475 17.0996 2.31103 17.2559C2.46731 17.4122 2.67928 17.5 2.90029 17.5H12.9003C13.1213 17.5 13.3333 17.4122 13.4895 17.2559C13.6458 17.0996 13.7336 16.8877 13.7336 16.6667"
                        fill="#181A18" />
                </svg>
                <p>Guest</p>
                <div class="buttonPlus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                        fill="none">
                        <path
                            d="M19.3999 11H13.3999V5C13.3999 4.73478 13.2945 4.48043 13.107 4.29289C12.9195 4.10536 12.6651 4 12.3999 4C12.1347 4 11.8803 4.10536 11.6928 4.29289C11.5053 4.48043 11.3999 4.73478 11.3999 5V11H5.3999C5.13469 11 4.88033 11.1054 4.6928 11.2929C4.50526 11.4804 4.3999 11.7348 4.3999 12C4.3999 12.2652 4.50526 12.5196 4.6928 12.7071C4.88033 12.8946 5.13469 13 5.3999 13H11.3999V19C11.3999 19.2652 11.5053 19.5196 11.6928 19.7071C11.8803 19.8946 12.1347 20 12.3999 20C12.6651 20 12.9195 19.8946 13.107 19.7071C13.2945 19.5196 13.3999 19.2652 13.3999 19V13H19.3999C19.6651 13 19.9195 12.8946 20.107 12.7071C20.2945 12.5196 20.3999 12.2652 20.3999 12C20.3999 11.7348 20.2945 11.4804 20.107 11.2929C19.9195 11.1054 19.6651 11 19.3999 11Z"
                            fill="#181A18" />
                    </svg>
                </div>
                <p class="numberGuest">1</p>
                <div class="buttonMinus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                        fill="none">
                        <path
                            d="M19.3999 13H5.3999C5.13469 13 4.88033 12.8946 4.6928 12.7071C4.50526 12.5196 4.3999 12.2652 4.3999 12C4.3999 11.7348 4.50526 11.4804 4.6928 11.2929C4.88033 11.1054 5.13469 11 5.3999 11H19.3999C19.6651 11 19.9195 11.1054 20.107 11.2929C20.2945 11.4804 20.3999 11.7348 20.3999 12C20.3999 12.2652 20.2945 12.5196 20.107 12.7071C19.9195 12.8946 19.6651 13 19.3999 13Z"
                            fill="#181A18" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="buttonSearch">
            <a href="">Search</a>
        </div>

    </div>
</div>

<div class="quote-container">
    <div class="home-quote">
        <div class="left-part">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/Eff1.png') }}" alt=""
                style="border-radius: 60px 0px 0px 0px;">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/eff2.png') }}" alt="">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/ef3.png') }}" alt=""
                style="border-radius: 0px 0px 0px 60px;">
            <img class="quote-img" src="{{ ('/Frontend/Image/Quote/ef4.png') }}" alt="">
        </div>

        <div class="right-part">
            <div class="text-container">
                <h1>Effortless Match</h1>
                <p>Our integrated solutions reduce friction and increase efficiency by matching the appropriate
                    renter with the correct property at the right moment.</p>
            </div>
        </div>
    </div>
</div>

<div class="strength-container">
    <div class="text">
        <h1>FlexiRent Makes Finding a Home Easy Right Away</h1>
        <p>We believe in a world where finding a home is just a click away. Whether you’re selling your home,
            travelling for work or moving to a new city. Just bring your bags, and we’ll handle the rest.</p>
    </div>

    <div class="strength">

        <!-- strength1 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M31.25 17.5C31.25 14.725 33.475 12.5 36.25 12.5H45C47.75 12.5 50 14.75 50 17.5V22.9C47.1 23.925 45 26.675 45 29.925V35H31.25V17.5ZM15 29.9V35H28.75V17.5C28.75 14.725 26.525 12.5 23.75 12.5H15C12.25 12.5 10 14.75 10 17.5V22.875C12.9 23.9 15 26.675 15 29.9ZM51.65 25.075C49.2 25.475 47.5 27.8 47.5 30.3V37.5H12.5V30C12.5 28.6739 11.9732 27.4021 11.0355 26.4645C10.0979 25.5268 8.82608 25 7.5 25C6.17392 25 4.90215 25.5268 3.96447 26.4645C3.02678 27.4021 2.5 28.6739 2.5 30V42.5C2.5 45.25 4.75 47.5 7.5 47.5V52.5H12.5V47.5H47.5V52.5H52.5V47.5C55.25 47.5 57.5 45.25 57.5 42.5V30C57.5 26.975 54.775 24.55 51.65 25.075Z"
                        fill="black" />
                </svg>
            </div>
            <h4>Flexible living</h4>
            <p>With month-to-month contracts, you can stay as long or as little as you need.</p>
        </div>

        <!-- strength2 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M45 10H42.5V7.5C42.5 6.83696 42.2366 6.20107 41.7678 5.73223C41.2989 5.26339 40.663 5 40 5C39.337 5 38.7011 5.26339 38.2322 5.73223C37.7634 6.20107 37.5 6.83696 37.5 7.5V10H22.5V7.5C22.5 6.83696 22.2366 6.20107 21.7678 5.73223C21.2989 5.26339 20.663 5 20 5C19.337 5 18.7011 5.26339 18.2322 5.73223C17.7634 6.20107 17.5 6.83696 17.5 7.5V10H15C13.0109 10 11.1032 10.7902 9.6967 12.1967C8.29018 13.6032 7.5 15.5109 7.5 17.5V47.5C7.5 49.4891 8.29018 51.3968 9.6967 52.8033C11.1032 54.2098 13.0109 55 15 55H45C46.9891 55 48.8968 54.2098 50.3033 52.8033C51.7098 51.3968 52.5 49.4891 52.5 47.5V17.5C52.5 15.5109 51.7098 13.6032 50.3033 12.1967C48.8968 10.7902 46.9891 10 45 10ZM20 42.5C19.5055 42.5 19.0222 42.3534 18.6111 42.0787C18.2 41.804 17.8795 41.4135 17.6903 40.9567C17.5011 40.4999 17.4516 39.9972 17.548 39.5123C17.6445 39.0273 17.8826 38.5819 18.2322 38.2322C18.5819 37.8826 19.0273 37.6445 19.5123 37.548C19.9972 37.4516 20.4999 37.5011 20.9567 37.6903C21.4135 37.8795 21.804 38.2 22.0787 38.6111C22.3534 39.0222 22.5 39.5055 22.5 40C22.5 40.663 22.2366 41.2989 21.7678 41.7678C21.2989 42.2366 20.663 42.5 20 42.5ZM40 42.5H30C29.337 42.5 28.7011 42.2366 28.2322 41.7678C27.7634 41.2989 27.5 40.663 27.5 40C27.5 39.337 27.7634 38.7011 28.2322 38.2322C28.7011 37.7634 29.337 37.5 30 37.5H40C40.663 37.5 41.2989 37.7634 41.7678 38.2322C42.2366 38.7011 42.5 39.337 42.5 40C42.5 40.663 42.2366 41.2989 41.7678 41.7678C41.2989 42.2366 40.663 42.5 40 42.5ZM47.5 27.5H12.5V17.5C12.5 16.837 12.7634 16.2011 13.2322 15.7322C13.7011 15.2634 14.337 15 15 15H17.5V17.5C17.5 18.163 17.7634 18.7989 18.2322 19.2678C18.7011 19.7366 19.337 20 20 20C20.663 20 21.2989 19.7366 21.7678 19.2678C22.2366 18.7989 22.5 18.163 22.5 17.5V15H37.5V17.5C37.5 18.163 37.7634 18.7989 38.2322 19.2678C38.7011 19.7366 39.337 20 40 20C40.663 20 41.2989 19.7366 41.7678 19.2678C42.2366 18.7989 42.5 18.163 42.5 17.5V15H45C45.663 15 46.2989 15.2634 46.7678 15.7322C47.2366 16.2011 47.5 16.837 47.5 17.5V27.5Z"
                        fill="#181A18" />
                </svg>
            </div>
            <h4>Move-in ready</h4>
            <p>Ready to move in with everything you need</p>
        </div>

        <!-- strength3 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M30 50C31.3807 50 32.5 48.8807 32.5 47.5C32.5 46.1193 31.3807 45 30 45C28.6193 45 27.5 46.1193 27.5 47.5C27.5 48.8807 28.6193 50 30 50Z"
                        fill="#181A18" />
                    <path
                        d="M29.9992 35.0002C26.7635 35.0001 23.6539 36.2547 21.3242 38.5002C20.8468 38.961 20.572 39.5926 20.5603 40.256C20.5486 40.9194 20.8009 41.5603 21.2617 42.0377C21.7225 42.5151 22.3541 42.7898 23.0175 42.8015C23.6809 42.8133 24.3218 42.561 24.7992 42.1002C26.219 40.8001 28.0742 40.0791 29.9992 40.0791C31.9242 40.0791 33.7795 40.8001 35.1992 42.1002C35.6766 42.561 36.3175 42.8133 36.9809 42.8015C37.6443 42.7898 38.2759 42.5151 38.7367 42.0377C39.1975 41.5603 39.4498 40.9194 39.4381 40.256C39.4264 39.5926 39.1516 38.961 38.6742 38.5002C36.3445 36.2547 33.2349 35.0001 29.9992 35.0002ZM29.9992 22.5002C26.9797 22.5021 23.9915 23.1119 21.2127 24.293C18.4338 25.4741 15.9211 27.2025 13.8242 29.3752C13.596 29.6165 13.4176 29.9003 13.2992 30.2106C13.1807 30.5209 13.1245 30.8514 13.1338 31.1834C13.1431 31.5153 13.2177 31.8422 13.3533 32.1454C13.4889 32.4485 13.6829 32.722 13.9242 32.9502C14.4115 33.411 15.062 33.6593 15.7324 33.6406C16.0644 33.6313 16.3913 33.5567 16.6944 33.4211C16.9976 33.2855 17.271 33.0915 17.4992 32.8502C19.1317 31.1565 21.0888 29.8093 23.2538 28.8891C25.4187 27.969 27.7469 27.4947 30.0992 27.4947C32.4516 27.4947 34.7798 27.969 36.9447 28.8891C39.1096 29.8093 41.0667 31.1565 42.6992 32.8502C42.9307 33.0864 43.2069 33.2743 43.5115 33.403C43.8162 33.5318 44.1434 33.5988 44.4742 33.6002C44.9628 33.5983 45.4401 33.4533 45.8471 33.1832C46.2542 32.913 46.5732 32.5295 46.7647 32.08C46.9562 31.6306 47.0118 31.1349 46.9246 30.6541C46.8374 30.1734 46.6113 29.7288 46.2742 29.3752C44.1657 27.1904 41.6367 25.4549 38.8397 24.2734C36.0427 23.0919 33.0355 22.4887 29.9992 22.5002Z"
                        fill="#181A18" />
                    <path
                        d="M54.2997 19.8252C47.7758 13.5316 39.0645 10.0146 29.9997 10.0146C20.9349 10.0146 12.2237 13.5316 5.69973 19.8252C5.27783 20.2943 5.04891 20.9056 5.05891 21.5365C5.0689 22.1674 5.31707 22.7711 5.75362 23.2266C6.19018 23.6822 6.78283 23.9558 7.41271 23.9926C8.04258 24.0294 8.66308 23.8267 9.14973 23.4252C14.7437 18.018 22.2196 14.9955 29.9997 14.9955C37.7799 14.9955 45.2557 18.018 50.8497 23.4252C51.3132 23.8719 51.9311 24.1226 52.5747 24.1252C52.9115 24.1239 53.2445 24.0546 53.5538 23.9214C53.8632 23.7882 54.1424 23.5939 54.3747 23.3502C54.8305 22.8719 55.0785 22.2327 55.0644 21.5722C55.0504 20.9117 54.7755 20.2836 54.2997 19.8252Z"
                        fill="#181A18" />
                </svg>
            </div>
            <h4>High-speed Wi-Fi</h4>
            <p>Best in class internet speeds suitable for working
                from home</p>
        </div>

        <!-- strength4 -->
        <div class="strength-block">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path
                        d="M47.6746 12.3248C43.5726 8.19606 38.1587 5.62784 32.3661 5.06292C26.5736 4.49799 20.7654 5.97176 15.943 9.23014C11.1206 12.4885 7.58615 17.3273 5.94897 22.9123C4.31179 28.4973 4.6745 34.4786 6.97456 39.8248C7.21429 40.3217 7.29295 40.8811 7.19956 41.4248L4.99956 51.9998C4.9148 52.4053 4.93211 52.8254 5.04993 53.2225C5.16775 53.6196 5.38239 53.9812 5.67456 54.2748C5.91407 54.5126 6.19925 54.6994 6.5129 54.824C6.82655 54.9486 7.16218 55.0084 7.49956 54.9998H7.99956L18.6996 52.8498C19.2434 52.7844 19.7949 52.862 20.2996 53.0748C25.6458 55.3749 31.627 55.7376 37.212 54.1004C42.797 52.4632 47.6358 48.9288 50.8942 44.1063C54.1526 39.2839 55.6264 33.4758 55.0615 27.6833C54.4965 21.8907 51.9283 16.4768 47.7996 12.3748L47.6746 12.3248ZM19.9996 32.4998C19.5051 32.4998 19.0218 32.3532 18.6106 32.0785C18.1995 31.8038 17.8791 31.4133 17.6899 30.9565C17.5006 30.4997 17.4511 29.997 17.5476 29.5121C17.6441 29.0271 17.8822 28.5817 18.2318 28.232C18.5814 27.8824 19.0269 27.6443 19.5118 27.5478C19.9968 27.4514 20.4995 27.5009 20.9563 27.6901C21.4131 27.8793 21.8035 28.1998 22.0782 28.6109C22.3529 29.022 22.4996 29.5054 22.4996 29.9998C22.4996 30.6629 22.2362 31.2987 21.7673 31.7676C21.2985 32.2364 20.6626 32.4998 19.9996 32.4998ZM29.9996 32.4998C29.5051 32.4998 29.0218 32.3532 28.6106 32.0785C28.1995 31.8038 27.8791 31.4133 27.6899 30.9565C27.5006 30.4997 27.4511 29.997 27.5476 29.5121C27.6441 29.0271 27.8822 28.5817 28.2318 28.232C28.5814 27.8824 29.0269 27.6443 29.5118 27.5478C29.9968 27.4514 30.4995 27.5009 30.9563 27.6901C31.4131 27.8793 31.8035 28.1998 32.0782 28.6109C32.3529 29.022 32.4996 29.5054 32.4996 29.9998C32.4996 30.6629 32.2362 31.2987 31.7673 31.7676C31.2985 32.2364 30.6626 32.4998 29.9996 32.4998ZM39.9996 32.4998C39.5051 32.4998 39.0218 32.3532 38.6106 32.0785C38.1995 31.8038 37.8791 31.4133 37.6899 30.9565C37.5006 30.4997 37.4511 29.997 37.5476 29.5121C37.6441 29.0271 37.8822 28.5817 38.2318 28.232C38.5814 27.8824 39.0269 27.6443 39.5118 27.5478C39.9968 27.4514 40.4995 27.5009 40.9563 27.6901C41.4131 27.8793 41.8035 28.1998 42.0782 28.6109C42.3529 29.022 42.4996 29.5054 42.4996 29.9998C42.4996 30.6629 42.2362 31.2987 41.7673 31.7676C41.2985 32.2364 40.6626 32.4998 39.9996 32.4998Z"
                        fill="#181A18" />
                </svg>
            </div>
            <h4>24/7 support</h4>
            <p>On hand team for any issues you have</p>
        </div>


    </div>
</div>

<div class="location-container">
    <h1>Choose your location</h1>
    <div class="location-choices">
        <!-- block1 -->
        <div class="location-block">
            <h4>District 1</h4>
            <a href=""><img class="location-img" src="{{ ('/Frontend/Image/Location/Distrit1.png') }}" alt=""></a>
        </div>

        <!-- block2 -->
        <div class="location-block">
            <h4>Binh Thanh District</h4>
            <a href=""><img class="location-img" src="{{ ('/Frontend/Image/Location/Binh Thanh.png') }}" alt=""></a>
        </div>

        <!-- block3 -->
        <div class="location-block">
            <h4>Thu Duc City</h4>
            <a href=""><img class="location-img" src="{{ ('/Frontend/Image/Location/Thu Duc.jfif') }}" alt=""></a>
        </div>

        <!-- block4 -->
        <div class="location-block">
            <h4>Go Vap District</h4>
            <a href=""><img class="location-img" src="{{ ('/Frontend/Image/Location/Go Vap.jfif') }}" alt=""></a>
        </div>

        <!-- block5 -->
        <div class="location-block">
            <h4>District 2</h4>
            <a href=""><img class="location-img" src="{{ ('/Frontend/Image/Location/District-2.jfif') }}" alt=""></a>
        </div>

        <!-- block6 -->
        <div class="location-block">
            <h4>District 7</h4>
            <a href=""><img class="location-img" src="{{ ('/Frontend/Image/Location/District-7.jfif') }}" alt=""></a>
        </div>
    </div>

    <div>
        <a class="location-btn" href="">View all spaces</a>
    </div>
</div>

<div class="bespoke-container">
    <div class="bespoke-content">
        <div class="bespoke-text">
            <h1>Bespoke spaces</h1>
            <p>Expertly designed to create extraordinary spaces with the flexible renter in mind</p>
        </div>

        <div>
            <a class="bespoke-btn" href="{{URL::to('/bookingPage')}}">Start booking</a>
        </div>
    </div>
</div>

<div class="partnership-container">
    <div class="partnership-content">
        <div class="partnership-text">
            <h1>Corporate Partnerships</h1>
            <p>
                We work with 100+ companies to meet accommodation needs in London. Offer a dedicated
                booking manager that can help to find properties for your needs.
            </p>
        </div>

        <div class="partnership-features">
            <div class="feature-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path d="M51.775 48.225L43.275 39.75C46.0175 36.2561 47.5055 31.9416 47.5 27.5C47.5 23.5444 46.327 19.6776 44.1294 16.3886C41.9318 13.0996 38.8082 10.5362 35.1537 9.02242C31.4992 7.50867 27.4778 7.1126 23.5982 7.8843C19.7186 8.65601 16.1549 10.5608 13.3579 13.3579C10.5608 16.1549 8.65601 19.7186 7.8843 23.5982C7.1126 27.4778 7.50867 31.4992 9.02242 35.1537C10.5362 38.8082 13.0996 41.9318 16.3886 44.1294C19.6776 46.327 23.5444 47.5 27.5 47.5C31.9416 47.5055 36.2561 46.0175 39.75 43.275L48.225 51.775C48.4574 52.0093 48.7339 52.1953 49.0386 52.3222C49.3432 52.4492 49.67 52.5145 50 52.5145C50.33 52.5145 50.6568 52.4492 50.9615 52.3222C51.2661 52.1953 51.5426 52.0093 51.775 51.775C52.0093 51.5426 52.1953 51.2661 52.3222 50.9615C52.4492 50.6568 52.5145 50.33 52.5145 50C52.5145 49.67 52.4492 49.3432 52.3222 49.0386C52.1953 48.7339 52.0093 48.4574 51.775 48.225ZM12.5 27.5C12.5 24.5333 13.3797 21.6332 15.028 19.1665C16.6762 16.6997 19.0189 14.7771 21.7598 13.6418C24.5007 12.5065 27.5166 12.2095 30.4264 12.7882C33.3361 13.367 36.0088 14.7956 38.1066 16.8934C40.2044 18.9912 41.633 21.6639 42.2118 24.5737C42.7906 27.4834 42.4935 30.4994 41.3582 33.2403C40.2229 35.9812 38.3003 38.3238 35.8336 39.9721C33.3668 41.6203 30.4667 42.5 27.5 42.5C23.5218 42.5 19.7065 40.9197 16.8934 38.1066C14.0804 35.2936 12.5 31.4783 12.5 27.5Z" fill="black" />
                </svg>
                <h4>
                    Booking manager
                </h4>
                <p>We do the searching for you</p>
            </div>

            <div class="feature-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                    <path d="M30.3335 27.5C32.3113 27.5 34.2447 26.9135 35.8892 25.8147C37.5337 24.7159 38.8154 23.1541 39.5723 21.3268C40.3292 19.4996 40.5272 17.4889 40.1413 15.5491C39.7555 13.6093 38.8031 11.8275 37.4046 10.4289C36.006 9.03041 34.2242 8.078 32.2844 7.69215C30.3446 7.3063 28.3339 7.50433 26.5067 8.26121C24.6794 9.01809 23.1176 10.2998 22.0188 11.9443C20.92 13.5888 20.3335 15.5222 20.3335 17.5C20.3335 20.1522 21.3871 22.6957 23.2624 24.5711C25.1378 26.4464 27.6813 27.5 30.3335 27.5ZM45.3335 52.5C45.9965 52.5 46.6324 52.2366 47.1013 51.7678C47.5701 51.2989 47.8335 50.663 47.8335 50C47.8335 45.3587 45.9897 40.9075 42.7079 37.6256C39.426 34.3438 34.9748 32.5 30.3335 32.5C25.6922 32.5 21.241 34.3438 17.9591 37.6256C14.6772 40.9075 12.8335 45.3587 12.8335 50C12.8335 50.663 13.0969 51.2989 13.5657 51.7678C14.0346 52.2366 14.6705 52.5 15.3335 52.5H45.3335Z" fill="black" />
                </svg>
                <h4>
                    Account manager
                </h4>
                <p>Preferred partner rates</p>
            </div>

            <div class="feature-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                    <path d="M50.0165 18.3255L38.9165 5.82545C38.6828 5.56647 38.3974 5.35927 38.0788 5.21719C37.7602 5.0751 37.4154 5.00127 37.0665 5.00045H17.0665C16.2359 4.99054 15.4114 5.14435 14.6403 5.45309C13.8691 5.76183 13.1663 6.21946 12.572 6.79983C11.9777 7.38021 11.5035 8.07197 11.1765 8.83562C10.8496 9.59926 10.6763 10.4198 10.6665 11.2505V48.7505C10.6763 49.5811 10.8496 50.4016 11.1765 51.1653C11.5035 51.9289 11.9777 52.6207 12.572 53.2011C13.1663 53.7814 13.8691 54.2391 14.6403 54.5478C15.4114 54.8566 16.2359 55.0104 17.0665 55.0005H44.2665C45.0971 55.0104 45.9216 54.8566 46.6928 54.5478C47.4639 54.2391 48.1667 53.7814 48.761 53.2011C49.3554 52.6207 49.8295 51.9289 50.1565 51.1653C50.4834 50.4016 50.6567 49.5811 50.6665 48.7505V20.0005C50.6649 19.3809 50.4332 18.7839 50.0165 18.3255ZM23.1665 30.0005H30.6665C31.3295 30.0005 31.9654 30.2638 32.4343 30.7327C32.9031 31.2015 33.1665 31.8374 33.1665 32.5005C33.1665 33.1635 32.9031 33.7994 32.4343 34.2682C31.9654 34.7371 31.3295 35.0005 30.6665 35.0005H23.1665C22.5035 35.0005 21.8676 34.7371 21.3987 34.2682C20.9299 33.7994 20.6665 33.1635 20.6665 32.5005C20.6665 31.8374 20.9299 31.2015 21.3987 30.7327C21.8676 30.2638 22.5035 30.0005 23.1665 30.0005ZM38.1665 45.0005H23.1665C22.5035 45.0005 21.8676 44.7371 21.3987 44.2682C20.9299 43.7994 20.6665 43.1635 20.6665 42.5005C20.6665 41.8374 20.9299 41.2015 21.3987 40.7327C21.8676 40.2638 22.5035 40.0005 23.1665 40.0005H38.1665C38.8295 40.0005 39.4654 40.2638 39.9343 40.7327C40.4031 41.2015 40.6665 41.8374 40.6665 42.5005C40.6665 43.1635 40.4031 43.7994 39.9343 44.2682C39.4654 44.7371 38.8295 45.0005 38.1665 45.0005ZM37.4415 20.0005C36.9261 19.9497 36.4513 19.6985 36.1193 19.3011C35.7873 18.9036 35.6247 18.3916 35.6665 17.8755V10.0005L45.0165 20.0005H37.4415Z" fill="#181A18" />
                </svg>
                <h4>
                    Flexible terms
                </h4>
                <p>Extend on short notice</p>
            </div>
        </div>
    </div>
</div>





<!-- carousel -->
<div class="carousel">
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="\Frontend\Image\house\house2.jpeg">
            <div class="content">
                <div class="author">BEVERLY HILLS, CALIFORNIA, USA</div>
                <div class="title">SUBURBS MODERN</div>
                <div class="topic">HOUSE</div>
                <div class="des">
                    <!-- lorem 50 -->
                    Known for its luxury real estate, Beverly Hills and its surrounding suburbs have many famous rental homes. These properties often feature sprawling lawns, large pools, and celebrity appeal.
                </div>
                <div class="buttons">
                    <a href=""><button>RENT NOW</button></a>
                    <a href=""><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house3.jpg">
            <div class="content">
                <div class="author">BINH THANH, HCMC, VN</div>
                <div class="title">CENTRAL MODERN</div>
                <div class="topic">APARTMENT</div>
                <div class="des">
                    Prime location with modern apartments with swimming pools, fitness centers, and 24/7 security.Landmark 81, the tallest building in Vietnam, is also part of the development, offering high-end retail and dining options, enhancing the luxurious lifestyle available at Vinhomes Central Park.
                </div>
                <div class="buttons">
                    <a href=""><button>RENT NOW</button></a>
                    <a href=""><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house4.jpg">
            <div class="content">
                <div class="author">MALIBU, CALIFORNIA, USA</div>
                <div class="title">LUXURY BEACHFRONT</div>
                <div class="topic">VILLA</div>
                <div class="des">

                    Malibu, California, is renowned for its luxurious beachfront rentals that offer stunning ocean views and private beach access. The area features a diverse range of properties, from modern villas to classic estates, catering to those seeking an upscale lifestyle. Residents and visitors enjoy proximity to beautiful beaches like Zuma Beach and El Matador State Beach, perfect for sunbathing and surfing. Many of these rentals boast upscale amenities, including infinity pools, outdoor entertainment spaces, and spa facilities, making Malibu an ideal destination for luxury living by the coast.
                </div>
                <div class="buttons">
                    <a href=""><button>RENT NOW</button></a>
                    <a href=""><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house5.webp">
            <div class="content">
                <div class="author">MARAIS, PARIS, FRANCE</div>
                <div class="title">CENTRAL MODERN</div>
                <div class="topic">HOUSE</div>
                <div class="des">

                    The Marais district in Paris, France, is a famous rental location known for its historic charm and vibrant atmosphere. Characterized by narrow streets, beautiful architecture, and trendy boutiques, it is home to attractions like the Picasso Museum and Hôtel de Ville. The area features lively cafes, bistros, and the Marché des Enfants Rouges, one of the oldest covered markets in Paris. Centrally located, the Marais offers easy access to iconic landmarks such as Notre-Dame Cathedral and the Louvre Museum, making it an ideal choice for those seeking an authentic Parisian experience.
                </div>
                <div class="buttons">
                    <a href=""><button>RENT NOW</button></a>
                    <a href=""><button>SEE MORE</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- list thumnail -->
    <div class="thumbnail">
        <div class="item">
            <img src="\Frontend\Image\house\house2.jpeg">
            <div class="content">
                <div class="title">
                    Suburbs house
                </div>
                <div class="description">
                    Beverly Hills, USA
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house3.jpg">
            <div class="content">
                <div class="title">
                    Central apartment
                </div>
                <div class="description">
                    Binh Thanh, VN
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house4.jpg">
            <div class="content">
                <div class="title">
                    Luxury Villa
                </div>
                <div class="description">
                    Malibu, USA
                </div>
            </div>
        </div>
        <div class="item">
            <img src="\Frontend\Image\house\house5.webp">
            <div class="content">
                <div class="title">
                    Central House
                </div>
                <div class="description">
                    Marais, France
                </div>
            </div>
        </div>
    </div>
    <!-- next prev -->


    <!-- time running -->
    <div class="time"></div>
    <div class="arrows">
        <button id="prev">
            << /button>
                <button id="next">></button>
    </div>
</div>


<script src="\Frontend\js\houseSlider.js"></script>

<div class="partner-container">
    <div class="partner-text">
        <h1>What our partners think</h1>
        <p>See what our partners say about us</p>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profile">

                    <img class="profile-picture" src="\Frontend\Image\Homepage Profile\profile1.jpg" alt="">

                    <div class="profile-content">
                        <h4>Annie</h4>
                        <p>Landlord in SE1</p>
                    </div>
                </div>

                <div class="comment">
                    Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum
                    eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate
                    volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                </div>
            </div>
        </div>

    </div>

    <div class="button">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
    <div class="swiper-pagination"></div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="\Frontend\js\commentSlider.js"></script>
    <!-- Initialize Swiper -->
</div>



@endsection