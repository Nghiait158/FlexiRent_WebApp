@extends('Layout/header_footer')
@section('content')

<div class="headerContainerImage">
    <img class="mainImg" src="{{ ('/Frontend/Image/PropertyDetails/main.png') }}" alt="">
    <div class="VewAllPhoto">
        View all photos
    </div>
    <div class="fourImgNext">
        <img src="{{ ('/Frontend/Image/PropertyDetails/5.png') }}" alt="">
        <img src="{{ ('/Frontend/Image/PropertyDetails/2.png') }}" alt="">
        <img src="{{ ('/Frontend/Image/PropertyDetails/3.png') }}" alt="">
        <img src="{{ ('/Frontend/Image/PropertyDetails/4.png') }}" alt="">
    </div>
</div>

<div class="contentPropertyDetails">
    <div class="descriptionPropertyDetails">
        <h1>Rhoncus suspendisse</h1>
        <h6>London, Notting Hill</h6>
        <div class="infomation">
            <div class="bedAndBath">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M16.042 9.16683C16.6256 9.1668 17.1872 9.38941 17.6122 9.78924C18.0373 10.1891 18.2938 10.736 18.3295 11.3185L18.3337 11.4585V16.8752C18.3336 17.0335 18.2735 17.1859 18.1653 17.3017C18.0572 17.4174 17.9092 17.4877 17.7513 17.4985C17.5933 17.5093 17.4371 17.4597 17.3142 17.3598C17.1914 17.2599 17.1111 17.117 17.0895 16.9602L17.0837 16.8752V15.0002H2.91699V16.8752C2.91699 17.0262 2.86229 17.1721 2.76302 17.2859C2.66375 17.3998 2.52662 17.4738 2.37699 17.4943L2.29199 17.5002C2.14096 17.5002 1.99504 17.4455 1.88122 17.3462C1.76739 17.2469 1.69337 17.1098 1.67283 16.9602L1.66699 16.8752V11.4585C1.66696 10.8749 1.88957 10.3133 2.2894 9.88825C2.68924 9.46317 3.23618 9.20665 3.81866 9.171L3.95866 9.16683H16.042ZM5.62533 3.3335H14.3753C14.9589 3.33347 15.5205 3.55607 15.9456 3.95591C16.3707 4.35574 16.6272 4.90268 16.6628 5.48516L16.667 5.62516V8.3335H14.167L14.1612 8.236C14.1392 8.04998 14.0553 7.87678 13.9228 7.74434C13.7904 7.6119 13.6172 7.52793 13.4312 7.506L13.3337 7.50016H11.667C11.4629 7.50019 11.2659 7.57513 11.1133 7.71076C10.9608 7.84639 10.8634 8.03329 10.8395 8.236L10.8337 8.3335H9.16699L9.16116 8.236C9.13922 8.04998 9.05526 7.87678 8.92282 7.74434C8.79037 7.6119 8.61717 7.52793 8.43116 7.506L8.33366 7.50016H6.66699C6.46288 7.50019 6.26588 7.57513 6.11335 7.71076C5.96082 7.84639 5.86337 8.03329 5.83949 8.236L5.83366 8.3335H3.33366V5.62516C3.33363 5.04159 3.55624 4.47999 3.95607 4.05491C4.3559 3.62984 4.90284 3.37331 5.48533 3.33766L5.62533 3.3335Z" fill="#181A18"/>
                    </svg>
                    2 bedroom
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_0_2831)">
                          <path d="M1.25 15.0002C1.25108 15.525 1.36298 16.0437 1.57839 16.5222C1.7938 17.0008 2.10786 17.4284 2.5 17.7772V19.3752C2.5 19.541 2.56585 19.7 2.68306 19.8172C2.80027 19.9344 2.95924 20.0002 3.125 20.0002H4.375C4.54076 20.0002 4.69973 19.9344 4.81694 19.8172C4.93415 19.7 5 19.541 5 19.3752V18.7502H15V19.3752C15 19.541 15.0658 19.7 15.1831 19.8172C15.3003 19.9344 15.4592 20.0002 15.625 20.0002H16.875C17.0408 20.0002 17.1997 19.9344 17.3169 19.8172C17.4342 19.7 17.5 19.541 17.5 19.3752V17.7772C17.8921 17.4284 18.2062 17.0008 18.4216 16.5222C18.637 16.0437 18.7489 15.525 18.75 15.0002V13.1252H1.25V15.0002ZM19.375 10.0002H3.125V2.7053C3.12536 2.54127 3.17428 2.38101 3.26561 2.24475C3.35693 2.10848 3.48657 2.00232 3.63816 1.93964C3.78975 1.87697 3.95651 1.86059 4.1174 1.89257C4.27828 1.92456 4.4261 2.00347 4.54219 2.11936L5.29492 2.87171C4.78203 4.0389 4.99766 5.18069 5.63164 5.98616L5.625 5.9928C5.50824 6.10995 5.44267 6.26861 5.44267 6.43401C5.44267 6.59942 5.50824 6.75807 5.625 6.87522L6.0668 7.31702C6.12484 7.37507 6.19374 7.42112 6.26958 7.45254C6.34542 7.48396 6.4267 7.50013 6.50879 7.50013C6.59088 7.50013 6.67216 7.48396 6.748 7.45254C6.82384 7.42112 6.89274 7.37507 6.95078 7.31702L11.0668 3.20101C11.1248 3.14297 11.1709 3.07406 11.2023 2.99822C11.2337 2.92239 11.2499 2.8411 11.2499 2.75901C11.2499 2.67693 11.2337 2.59564 11.2023 2.5198C11.1709 2.44397 11.1248 2.37506 11.0668 2.31702L10.625 1.87522C10.5078 1.7581 10.3489 1.69231 10.1832 1.69231C10.0175 1.69231 9.8586 1.7581 9.74141 1.87522L9.73477 1.88186C8.9293 1.24788 7.78828 1.03226 6.62031 1.54515L5.86797 0.792412C5.48966 0.414055 5.00764 0.156385 4.48287 0.0519907C3.95811 -0.0524038 3.41418 0.00116618 2.91986 0.205926C2.42554 0.410685 2.00305 0.757436 1.70582 1.20232C1.40858 1.64721 1.24996 2.17026 1.25 2.7053V10.0002H0.625C0.45924 10.0002 0.300269 10.0661 0.183058 10.1833C0.065848 10.3005 0 10.4595 0 10.6252L0 11.2502C0 11.416 0.065848 11.575 0.183058 11.6922C0.300269 11.8094 0.45924 11.8752 0.625 11.8752H19.375C19.5408 11.8752 19.6997 11.8094 19.8169 11.6922C19.9342 11.575 20 11.416 20 11.2502V10.6252C20 10.4595 19.9342 10.3005 19.8169 10.1833C19.6997 10.0661 19.5408 10.0002 19.375 10.0002Z" fill="#181A18"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_0_2831">
                            <rect width="20" height="20" fill="white"/>
                          </clipPath>
                        </defs>
                    </svg>
                    2 bath
                </div>

            </div>
            <div class="TienIch">
                500 sq.ft | City view  |  3rd floor  |  Elevator 
            </div>
        </div>
        <div class="description">
            <h1>Description</h1>
            <p>A truly global city, London has long been considered a cutting-edge metropolis and hub for culture, style and finance. With each borough, Tube zone and neighborhood of London sporting its own vibe and lifestyle advantages, it can be downright difficult to settle on where to look for a furnished apartment in London . Whether you’re a digital nomad looking for a studio apartment in London or just seeking a month to month rental in London, Blueground has you covered.</p>
            <h1>In sed</h1>
            <p>In nullam eget urna suspendisse odio nunc. Eu sodales vestibulum, donec rutrum justo, amet porttitor vitae et. Interdum consectetur dictum mattis gravida sed vulputate. Tempus sagittis cras sagittis viverra erat proin duis enim. </p>
            <h1>Adipiscing risus, fermentum</h1>
            <p>Laoreet risus accumsan pellentesque lacus, in nulla eu elementum. Mollis enim fringilla aenean diam tellus diam morbi ipsum placerat. </p>
        </div>
        
    </div>
    <div class="BoxformBooking">
        <div class="formbooking">

        </div>
    </div>
</div>
@endsection