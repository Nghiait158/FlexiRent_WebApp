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
            <h1>£3990 / Month</h1>
            <div class="checkInfo">
                <div class="checkmoveInOut">
                    <div class="moveIncheck">
                        <p>Move in</p>
                        <div class="checkDateMove">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M15 3.33317H14.1667V2.49984C14.1667 2.27882 14.0789 2.06686 13.9226 1.91058C13.7663 1.7543 13.5543 1.6665 13.3333 1.6665C13.1123 1.6665 12.9004 1.7543 12.7441 1.91058C12.5878 2.06686 12.5 2.27882 12.5 2.49984V3.33317H7.5V2.49984C7.5 2.27882 7.4122 2.06686 7.25592 1.91058C7.09964 1.7543 6.88768 1.6665 6.66667 1.6665C6.44565 1.6665 6.23369 1.7543 6.07741 1.91058C5.92113 2.06686 5.83333 2.27882 5.83333 2.49984V3.33317H5C4.33696 3.33317 3.70107 3.59656 3.23223 4.0654C2.76339 4.53424 2.5 5.17013 2.5 5.83317V15.8332C2.5 16.4962 2.76339 17.1321 3.23223 17.6009C3.70107 18.0698 4.33696 18.3332 5 18.3332H15C15.663 18.3332 16.2989 18.0698 16.7678 17.6009C17.2366 17.1321 17.5 16.4962 17.5 15.8332V5.83317C17.5 5.17013 17.2366 4.53424 16.7678 4.0654C16.2989 3.59656 15.663 3.33317 15 3.33317ZM6.66667 14.1665C6.50185 14.1665 6.34073 14.1176 6.20369 14.0261C6.06665 13.9345 5.95984 13.8043 5.89677 13.6521C5.83369 13.4998 5.81719 13.3322 5.84935 13.1706C5.8815 13.0089 5.96087 12.8605 6.07741 12.7439C6.19395 12.6274 6.34244 12.548 6.50409 12.5159C6.66574 12.4837 6.8333 12.5002 6.98557 12.5633C7.13784 12.6263 7.26799 12.7332 7.35956 12.8702C7.45113 13.0072 7.5 13.1684 7.5 13.3332C7.5 13.5542 7.4122 13.7661 7.25592 13.9224C7.09964 14.0787 6.88768 14.1665 6.66667 14.1665ZM13.3333 14.1665H10C9.77899 14.1665 9.56702 14.0787 9.41074 13.9224C9.25446 13.7661 9.16667 13.5542 9.16667 13.3332C9.16667 13.1122 9.25446 12.9002 9.41074 12.7439C9.56702 12.5876 9.77899 12.4998 10 12.4998H13.3333C13.5543 12.4998 13.7663 12.5876 13.9226 12.7439C14.0789 12.9002 14.1667 13.1122 14.1667 13.3332C14.1667 13.5542 14.0789 13.7661 13.9226 13.9224C13.7663 14.0787 13.5543 14.1665 13.3333 14.1665ZM15.8333 9.1665H4.16667V5.83317C4.16667 5.61216 4.25446 5.4002 4.41074 5.24392C4.56702 5.08764 4.77899 4.99984 5 4.99984H5.83333V5.83317C5.83333 6.05418 5.92113 6.26615 6.07741 6.42243C6.23369 6.57871 6.44565 6.6665 6.66667 6.6665C6.88768 6.6665 7.09964 6.57871 7.25592 6.42243C7.4122 6.26615 7.5 6.05418 7.5 5.83317V4.99984H12.5V5.83317C12.5 6.05418 12.5878 6.26615 12.7441 6.42243C12.9004 6.57871 13.1123 6.6665 13.3333 6.6665C13.5543 6.6665 13.7663 6.57871 13.9226 6.42243C14.0789 6.26615 14.1667 6.05418 14.1667 5.83317V4.99984H15C15.221 4.99984 15.433 5.08764 15.5893 5.24392C15.7455 5.4002 15.8333 5.61216 15.8333 5.83317V9.1665Z" fill="#181A18"/>
                            </svg>
                            31.12.2021
                        </div>
                    </div>
                    <div class="moveOutcheck">
                        <p>Move out</p>
                        <div class="checkDateMove">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M15 3.33317H14.1667V2.49984C14.1667 2.27882 14.0789 2.06686 13.9226 1.91058C13.7663 1.7543 13.5543 1.6665 13.3333 1.6665C13.1123 1.6665 12.9004 1.7543 12.7441 1.91058C12.5878 2.06686 12.5 2.27882 12.5 2.49984V3.33317H7.5V2.49984C7.5 2.27882 7.4122 2.06686 7.25592 1.91058C7.09964 1.7543 6.88768 1.6665 6.66667 1.6665C6.44565 1.6665 6.23369 1.7543 6.07741 1.91058C5.92113 2.06686 5.83333 2.27882 5.83333 2.49984V3.33317H5C4.33696 3.33317 3.70107 3.59656 3.23223 4.0654C2.76339 4.53424 2.5 5.17013 2.5 5.83317V15.8332C2.5 16.4962 2.76339 17.1321 3.23223 17.6009C3.70107 18.0698 4.33696 18.3332 5 18.3332H15C15.663 18.3332 16.2989 18.0698 16.7678 17.6009C17.2366 17.1321 17.5 16.4962 17.5 15.8332V5.83317C17.5 5.17013 17.2366 4.53424 16.7678 4.0654C16.2989 3.59656 15.663 3.33317 15 3.33317ZM6.66667 14.1665C6.50185 14.1665 6.34073 14.1176 6.20369 14.0261C6.06665 13.9345 5.95984 13.8043 5.89677 13.6521C5.83369 13.4998 5.81719 13.3322 5.84935 13.1706C5.8815 13.0089 5.96087 12.8605 6.07741 12.7439C6.19395 12.6274 6.34244 12.548 6.50409 12.5159C6.66574 12.4837 6.8333 12.5002 6.98557 12.5633C7.13784 12.6263 7.26799 12.7332 7.35956 12.8702C7.45113 13.0072 7.5 13.1684 7.5 13.3332C7.5 13.5542 7.4122 13.7661 7.25592 13.9224C7.09964 14.0787 6.88768 14.1665 6.66667 14.1665ZM13.3333 14.1665H10C9.77899 14.1665 9.56702 14.0787 9.41074 13.9224C9.25446 13.7661 9.16667 13.5542 9.16667 13.3332C9.16667 13.1122 9.25446 12.9002 9.41074 12.7439C9.56702 12.5876 9.77899 12.4998 10 12.4998H13.3333C13.5543 12.4998 13.7663 12.5876 13.9226 12.7439C14.0789 12.9002 14.1667 13.1122 14.1667 13.3332C14.1667 13.5542 14.0789 13.7661 13.9226 13.9224C13.7663 14.0787 13.5543 14.1665 13.3333 14.1665ZM15.8333 9.1665H4.16667V5.83317C4.16667 5.61216 4.25446 5.4002 4.41074 5.24392C4.56702 5.08764 4.77899 4.99984 5 4.99984H5.83333V5.83317C5.83333 6.05418 5.92113 6.26615 6.07741 6.42243C6.23369 6.57871 6.44565 6.6665 6.66667 6.6665C6.88768 6.6665 7.09964 6.57871 7.25592 6.42243C7.4122 6.26615 7.5 6.05418 7.5 5.83317V4.99984H12.5V5.83317C12.5 6.05418 12.5878 6.26615 12.7441 6.42243C12.9004 6.57871 13.1123 6.6665 13.3333 6.6665C13.5543 6.6665 13.7663 6.57871 13.9226 6.42243C14.0789 6.26615 14.1667 6.05418 14.1667 5.83317V4.99984H15C15.221 4.99984 15.433 5.08764 15.5893 5.24392C15.7455 5.4002 15.8333 5.61216 15.8333 5.83317V9.1665Z" fill="#181A18"/>
                            </svg>
                            31.02.2022
                        </div>
                    </div>
                </div>
                <div class="checkGuest">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7.50033 9.16667C8.1596 9.16667 8.80406 8.97117 9.35223 8.6049C9.90039 8.23863 10.3276 7.71803 10.5799 7.10895C10.8322 6.49986 10.8982 5.82964 10.7696 5.18303C10.641 4.53643 10.3235 3.94249 9.85735 3.47631C9.39117 3.01014 8.79723 2.69267 8.15063 2.56405C7.50402 2.43543 6.8338 2.50144 6.22471 2.75374C5.61563 3.00603 5.09503 3.43327 4.72876 3.98143C4.36249 4.5296 4.16699 5.17406 4.16699 5.83334C4.16699 6.71739 4.51818 7.56524 5.1433 8.19036C5.76842 8.81548 6.61627 9.16667 7.50033 9.16667ZM14.167 10.8333C14.6614 10.8333 15.1448 10.6867 15.5559 10.412C15.967 10.1373 16.2875 9.74686 16.4767 9.29004C16.6659 8.83323 16.7154 8.33056 16.619 7.84561C16.5225 7.36066 16.2844 6.9152 15.9348 6.56557C15.5851 6.21594 15.1397 5.97784 14.6547 5.88137C14.1698 5.78491 13.6671 5.83442 13.2103 6.02364C12.7535 6.21286 12.363 6.53329 12.0883 6.94441C11.8136 7.35553 11.667 7.83888 11.667 8.33334C11.667 8.99638 11.9304 9.63226 12.3992 10.1011C12.8681 10.5699 13.504 10.8333 14.167 10.8333ZM17.5003 16.6667C17.7213 16.6667 17.9333 16.5789 18.0896 16.4226C18.2459 16.2663 18.3337 16.0543 18.3337 15.8333C18.333 15.0545 18.114 14.2914 17.7017 13.6307C17.2893 12.97 16.7 12.4381 16.0006 12.0954C15.3012 11.7527 14.5198 11.6128 13.745 11.6917C12.9702 11.7705 12.2329 12.065 11.617 12.5417C10.8008 11.7286 9.76204 11.1755 8.63185 10.952C7.50165 10.7285 6.33059 10.8447 5.26635 11.2859C4.2021 11.7272 3.29234 12.4736 2.65178 13.4312C2.01122 14.3888 1.66855 15.5146 1.66699 16.6667C1.66699 16.8877 1.75479 17.0996 1.91107 17.2559C2.06735 17.4122 2.27931 17.5 2.50033 17.5H12.5003C12.7213 17.5 12.9333 17.4122 13.0896 17.2559C13.2459 17.0996 13.3337 16.8877 13.3337 16.6667" fill="#181A18"/>
                    </svg>
                    Guests
                    <button style="text-decoration: none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18.9999 11H12.9999V5C12.9999 4.73478 12.8945 4.48043 12.707 4.29289C12.5194 4.10536 12.2651 4 11.9999 4C11.7347 4 11.4803 4.10536 11.2928 4.29289C11.1052 4.48043 10.9999 4.73478 10.9999 5V11H4.99988C4.73466 11 4.48031 11.1054 4.29277 11.2929C4.10523 11.4804 3.99988 11.7348 3.99988 12C3.99988 12.2652 4.10523 12.5196 4.29277 12.7071C4.48031 12.8946 4.73466 13 4.99988 13H10.9999V19C10.9999 19.2652 11.1052 19.5196 11.2928 19.7071C11.4803 19.8946 11.7347 20 11.9999 20C12.2651 20 12.5194 19.8946 12.707 19.7071C12.8945 19.5196 12.9999 19.2652 12.9999 19V13H18.9999C19.2651 13 19.5194 12.8946 19.707 12.7071C19.8945 12.5196 19.9999 12.2652 19.9999 12C19.9999 11.7348 19.8945 11.4804 19.707 11.2929C19.5194 11.1054 19.2651 11 18.9999 11Z" fill="#181A18"/>
                        </svg>
                    </button>
                    1
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18.9999 13H4.99988C4.73466 13 4.48031 12.8946 4.29277 12.7071C4.10523 12.5196 3.99988 12.2652 3.99988 12C3.99988 11.7348 4.10523 11.4804 4.29277 11.2929C4.48031 11.1054 4.73466 11 4.99988 11H18.9999C19.2651 11 19.5194 11.1054 19.707 11.2929C19.8945 11.4804 19.9999 11.7348 19.9999 12C19.9999 12.2652 19.8945 12.5196 19.707 12.7071C19.5194 12.8946 19.2651 13 18.9999 13Z" fill="#181A18"/>
                        </svg>
                    </button>
                    
                </div>
                <p class="alluliti">All utilities are included</p>
            </div>
            <div class="totalPrice">
                <div class="Aver">
                    <div>
                        <p>Average monthy rent</p>

                    </div>
                    <div>
                        <div class="price">£3700</div>
                        incl. VAT
                    </div>
                </div>
                <div class="PayBooking">
                    <div>
                        <p>Pay upon booking</p>

                    </div>

                    <div>
                        <div class="price">£3700</div>
                        incl. VAT
                    </div>
                </div>
                <div class="totalCosts">
                    <p>Total costs</p>
                    <div>
                        <div class="price">£3700</div>
                        incl. VAT
                    </div>
                </div>
            </div>
            <div class="ContinueBooking">
                <a href="{{URL::to('/CheckoutPage')}}" style="text-decoration: none">Continue booking</a>
            </div>

        </div>
    </div>
</div>
<div class="Amenities">
    <h1>Amenities</h1>
    <div class="iconAmenities">
        <div class="iconAmenitiesColumn1">
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>TV</h5>
                    <p>Flatscreen TV</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M35.0003 28.3333H5.00033V8.33333H35.0003V28.3333ZM35.0003 5H5.00033C4.11627 5 3.26842 5.35119 2.6433 5.97631C2.01818 6.60143 1.66699 7.44928 1.66699 8.33333V28.3333C1.66699 29.2174 2.01818 30.0652 2.6433 30.6904C3.26842 31.3155 4.11627 31.6667 5.00033 31.6667H13.3337V35H26.667V31.6667H35.0003C35.8844 31.6667 36.7322 31.3155 37.3573 30.6904C37.9825 30.0652 38.3337 29.2174 38.3337 28.3333V8.33333C38.3337 7.44928 37.9825 6.60143 37.3573 5.97631C36.7322 5.35119 35.8844 5 35.0003 5Z" fill="#181A18"/>
                </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Fireplace</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M36.6663 36.6667H3.33301V33.3333H36.6663V36.6667ZM36.6663 10H3.33301V5H36.6663V10ZM33.333 11.6667V31.6667H28.333V18.3333C28.333 18.3333 24.1663 16.6667 19.9997 16.6667C15.833 16.6667 11.6663 18.3333 11.6663 18.3333V31.6667H6.66634V11.6667H33.333ZM24.1663 24.45H24.1163L24.683 25.3667L24.783 25.5667C25.483 27.25 24.9997 29.1667 23.683 30.4C22.4997 31.5 20.833 31.7833 19.2997 31.5833C17.8497 31.4 16.4997 30.4833 15.7497 29.2167C15.4997 28.8333 15.3163 28.3833 15.2163 27.95L14.9997 26.85C14.933 25.25 15.5663 23.5667 16.7663 22.5667C16.2163 23.7667 16.3497 25.2667 17.1663 26.3167L17.2663 26.45C17.3997 26.5667 17.583 26.6167 17.733 26.5333C17.883 26.4833 17.9997 26.3333 17.9997 26.1667L17.933 25.9333C17.0497 23.6167 17.7997 20.9167 19.6497 19.3833C20.1663 18.9667 20.833 18.5833 21.4497 18.4167C20.7663 19.7833 21.0163 21.55 22.083 22.6167L23.5663 23.8333L24.1663 24.45ZM21.8497 29.0667C22.283 28.6667 22.5497 28 22.4997 27.4V27.0833C22.2997 26.0833 21.4163 25.7667 20.833 25L20.433 24.25C20.2163 24.75 20.1997 25.2167 20.283 25.7667C20.383 26.3333 20.6163 26.8167 20.483 27.4C20.333 28.05 19.833 28.7 18.9497 28.9167C19.4497 29.4 20.2497 29.7833 21.0663 29.5167L21.8497 29.0667Z" fill="#181A18"/>
                </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Phone</h5>
                    <p>Flatscreen TV</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M20 5.00001C12.4333 5.00001 5.56667 7.96667 0.483333 12.7833C0.183333 13.0833 0 13.5 0 13.9667C0 14.4333 0.183333 14.85 0.483333 15.15L4.61667 19.2833C4.92885 19.592 5.34927 19.7665 5.78828 19.7696C6.22728 19.7727 6.65014 19.6042 6.96667 19.3C8.28333 18.0667 9.78333 17.0333 11.4 16.2167C11.95 15.95 12.3333 15.3833 12.3333 14.7167V9.55001C14.75 8.75001 17.3167 8.33334 20 8.33334C22.65 8.33334 25.2333 8.75001 27.65 9.53334V14.7C27.65 15.35 28.0333 15.9333 28.5833 16.2C30.2167 17.0167 31.6667 18.0667 33.0333 19.2833C33.3333 19.5833 33.75 19.75 34.1667 19.75C34.6667 19.75 35.0833 19.5667 35.3833 19.2667L39.5167 15.1333C39.8167 14.8333 40 14.4167 40 13.95C40 13.4833 39.8 13.0833 39.5 12.7833C34.2399 7.78228 27.2581 4.99551 20 5.00001ZM15 11.6667V16.6667C15 16.6667 5 25 5 30V36.6667H35V30C35 25 25 16.6667 25 16.6667V11.6667H21.6667V15H18.3333V11.6667H15ZM20 20C21.7681 20 23.4638 20.7024 24.714 21.9526C25.9643 23.2029 26.6667 24.8986 26.6667 26.6667C26.6667 28.4348 25.9643 30.1305 24.714 31.3807C23.4638 32.631 21.7681 33.3333 20 33.3333C18.2319 33.3333 16.5362 32.631 15.286 31.3807C14.0357 30.1305 13.3333 28.4348 13.3333 26.6667C13.3333 24.8986 14.0357 23.2029 15.286 21.9526C16.5362 20.7024 18.2319 20 20 20ZM20 22.5C18.8949 22.5 17.8351 22.939 17.0537 23.7204C16.2723 24.5018 15.8333 25.5616 15.8333 26.6667C15.8333 27.7717 16.2723 28.8315 17.0537 29.613C17.8351 30.3944 18.8949 30.8333 20 30.8333C21.1051 30.8333 22.1649 30.3944 22.9463 29.613C23.7277 28.8315 24.1667 27.7717 24.1667 26.6667C24.1667 25.5616 23.7277 24.5018 22.9463 23.7204C22.1649 22.939 21.1051 22.5 20 22.5Z" fill="#181A18"/>
                </svg>
            </div>            
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Work desk</h5>
                    <p>With computer</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M35.0003 23.3335V6.66683H5.00033V23.3335H35.0003ZM35.0003 3.3335C35.8844 3.3335 36.7322 3.68469 37.3573 4.30981C37.9825 4.93493 38.3337 5.78277 38.3337 6.66683V26.6668C38.3337 27.5509 37.9825 28.3987 37.3573 29.0239C36.7322 29.649 35.8844 30.0002 35.0003 30.0002H23.3337L26.667 35.0002V36.6668H13.3337V35.0002L16.667 30.0002H5.00033C4.11627 30.0002 3.26842 29.649 2.6433 29.0239C2.01818 28.3987 1.66699 27.5509 1.66699 26.6668V6.66683C1.66699 4.81683 3.15033 3.3335 5.00033 3.3335H35.0003ZM6.66699 8.3335H25.0003V16.6668H6.66699V8.3335ZM26.667 8.3335H33.3337V11.6668H26.667V8.3335ZM33.3337 13.3335V21.6668H26.667V13.3335H33.3337ZM6.66699 18.3335H15.0003V21.6668H6.66699V18.3335ZM16.667 18.3335H25.0003V21.6668H16.667V18.3335Z" fill="#181A18"/>
                </svg>
            </div>
        </div>
        
        <div class="iconAmenitiesColumn1">
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Fridge</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M11.6663 3.3335H28.333C29.2171 3.3335 30.0649 3.68469 30.69 4.30981C31.3152 4.93493 31.6663 5.78277 31.6663 6.66683V15.0002H8.33301V6.66683C8.33301 5.78277 8.6842 4.93493 9.30932 4.30981C9.93444 3.68469 10.7823 3.3335 11.6663 3.3335ZM31.6663 31.6668C31.6663 32.5509 31.3152 33.3987 30.69 34.0239C30.0649 34.649 29.2171 35.0002 28.333 35.0002V36.6668H24.9997V35.0002H14.9997V36.6668H11.6663V35.0002C10.7823 35.0002 9.93444 34.649 9.30932 34.0239C8.6842 33.3987 8.33301 32.5509 8.33301 31.6668V16.6668H31.6663V31.6668ZM13.333 8.3335V11.6668H16.6663V8.3335H13.333ZM13.333 20.0002V25.0002H16.6663V20.0002H13.333Z" fill="#181A18"/>
                  </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Kettle</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M20.8337 5C13.017 5 6.66699 9.48333 6.66699 15C6.66699 16.9833 7.50033 18.9 9.06699 20.55C7.51651 22.5354 6.67201 24.9809 6.66699 27.5V33.3333C6.66699 35.1833 8.15033 36.6667 10.0003 36.6667H31.667C33.517 36.6667 35.0003 35.1833 35.0003 33.3333V27.5C35.0003 25.4667 34.4337 23.45 33.3337 21.6667L36.667 18.3333L31.667 13.3333L28.167 16.8333C25.913 15.6219 23.3925 14.9918 20.8337 15C17.7503 15 14.917 15.8833 12.5837 17.35C11.9837 16.6167 11.667 15.8333 11.667 15C11.667 12.0167 15.767 9.58333 20.8337 9.58333C23.217 9.58333 25.5003 10.1333 27.217 11.1167L30.5837 7.75C27.9503 5.98333 24.467 5 20.8337 5ZM20.8337 18.3333C21.4003 18.3333 21.9503 18.4 22.5003 18.4833C17.317 19.2833 13.3337 23.75 13.3337 29.1667V33.3333H10.0003V29.1667C10.0003 26.2935 11.1417 23.538 13.1733 21.5063C15.205 19.4747 17.9605 18.3333 20.8337 18.3333Z" fill="#181A18"/>
                  </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Coffee machine</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M30.0003 10.0002V6.66683H33.3337V3.3335H10.0003C8.16699 3.3335 6.66699 4.8335 6.66699 6.66683V33.3335C6.66699 35.1668 8.16699 36.6668 10.0003 36.6668H33.3337V33.3335H26.617C27.6644 32.5656 28.5165 31.5621 29.1043 30.4039C29.692 29.2458 29.999 27.9656 30.0003 26.6668V18.3335H13.3337V26.6668C13.3337 29.4002 14.6837 31.8168 16.717 33.3335H10.0003V6.66683H13.3337V10.0002C13.3337 10.9168 14.0837 11.6668 15.0003 11.6668H28.3337C29.2503 11.6668 30.0003 10.9168 30.0003 10.0002ZM21.667 13.3335C22.5837 13.3335 23.3337 14.0835 23.3337 15.0002C23.3337 15.9168 22.5837 16.6668 21.667 16.6668C20.7503 16.6668 20.0003 15.9168 20.0003 15.0002C20.0003 14.0835 20.7503 13.3335 21.667 13.3335Z" fill="#181A18"/>
                  </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Dishes</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M31.6667 31.6667C31.6667 33.5167 30.1833 35 28.3333 35H11.6667C10.7826 35 9.93476 34.6488 9.30964 34.0237C8.68452 33.3986 8.33333 32.5507 8.33333 31.6667V20H5V16.6667H35V20H31.6667V31.6667ZM13.3333 2.5C11.8525 2.5 10.4324 3.08824 9.38532 4.13532C8.33824 5.1824 7.75 6.60254 7.75 8.08333C7.75 9.56413 8.33824 10.9843 9.38532 12.0313C10.4324 13.0784 11.8525 13.6667 13.3333 13.6667H15.8833C16.5333 13.6667 17.15 13.8333 17.6833 14.1667H21.05C20.0833 12.4167 18.1 11.25 15.8833 11.25H13.3333C11.6667 11.25 10.25 9.61667 10.25 7.91667C10.25 6.21667 11.6667 5 13.3333 5V2.5ZM21.4167 3.33333C21.4167 5 20 6.41667 18.3333 6.41667V8.91667C21.5333 8.91667 24.1667 11.1667 24.8167 14.1667H27.3667C27.1316 12.694 26.5434 11.3002 25.6523 10.1044C24.7613 8.90862 23.5939 7.94639 22.25 7.3C23.2833 6.28333 23.9167 4.88333 23.9167 3.33333H21.4167Z" fill="#181A18"/>
                  </svg>
            </div>
            
        </div>
        <div class="iconAmenitiesColumn1">
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Washing machine</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M24.717 18.6168C25.9656 19.869 26.6667 21.5652 26.6667 23.3335C26.6667 25.1018 25.9656 26.798 24.717 28.0502C23.4648 29.2987 21.7686 29.9999 20.0003 29.9999C18.232 29.9999 16.5358 29.2987 15.2837 28.0502L24.717 18.6168ZM10.0003 3.3335H30.0003C30.8844 3.3335 31.7322 3.68469 32.3573 4.30981C32.9825 4.93493 33.3337 5.78277 33.3337 6.66683V33.3335C33.3337 34.2176 32.9825 35.0654 32.3573 35.6905C31.7322 36.3156 30.8844 36.6668 30.0003 36.6668H10.0003C9.11627 36.6668 8.26842 36.3156 7.6433 35.6905C7.01818 35.0654 6.66699 34.2176 6.66699 33.3335V6.66683C6.66699 5.78277 7.01818 4.93493 7.6433 4.30981C8.26842 3.68469 9.11627 3.3335 10.0003 3.3335ZM11.667 6.66683C11.225 6.66683 10.801 6.84242 10.4885 7.15499C10.1759 7.46755 10.0003 7.89147 10.0003 8.3335C10.0003 8.77552 10.1759 9.19945 10.4885 9.51201C10.801 9.82457 11.225 10.0002 11.667 10.0002C12.109 10.0002 12.5329 9.82457 12.8455 9.51201C13.1581 9.19945 13.3337 8.77552 13.3337 8.3335C13.3337 7.89147 13.1581 7.46755 12.8455 7.15499C12.5329 6.84242 12.109 6.66683 11.667 6.66683ZM16.667 6.66683C16.225 6.66683 15.801 6.84242 15.4885 7.15499C15.1759 7.46755 15.0003 7.89147 15.0003 8.3335C15.0003 8.77552 15.1759 9.19945 15.4885 9.51201C15.801 9.82457 16.225 10.0002 16.667 10.0002C17.109 10.0002 17.5329 9.82457 17.8455 9.51201C18.1581 9.19945 18.3337 8.77552 18.3337 8.3335C18.3337 7.89147 18.1581 7.46755 17.8455 7.15499C17.5329 6.84242 17.109 6.66683 16.667 6.66683ZM20.0003 13.3335C17.3482 13.3335 14.8046 14.3871 12.9293 16.2624C11.0539 18.1378 10.0003 20.6813 10.0003 23.3335C10.0003 25.9857 11.0539 28.5292 12.9293 30.4046C14.8046 32.2799 17.3482 33.3335 20.0003 33.3335C22.6525 33.3335 25.196 32.2799 27.0714 30.4046C28.9468 28.5292 30.0003 25.9857 30.0003 23.3335C30.0003 20.6813 28.9468 18.1378 27.0714 16.2624C25.196 14.3871 22.6525 13.3335 20.0003 13.3335Z" fill="#181A18"/>
                  </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Dryer</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M10.0003 3.3335H30.0003C30.8844 3.3335 31.7322 3.68469 32.3573 4.30981C32.9825 4.93493 33.3337 5.78277 33.3337 6.66683V33.3335C33.3337 34.2176 32.9825 35.0654 32.3573 35.6905C31.7322 36.3156 30.8844 36.6668 30.0003 36.6668H10.0003C9.11627 36.6668 8.26842 36.3156 7.6433 35.6905C7.01818 35.0654 6.66699 34.2176 6.66699 33.3335V6.66683C6.66699 5.78277 7.01818 4.93493 7.6433 4.30981C8.26842 3.68469 9.11627 3.3335 10.0003 3.3335ZM11.667 6.66683C11.225 6.66683 10.801 6.84242 10.4885 7.15499C10.1759 7.46755 10.0003 7.89147 10.0003 8.3335C10.0003 8.77552 10.1759 9.19945 10.4885 9.51201C10.801 9.82457 11.225 10.0002 11.667 10.0002C12.109 10.0002 12.5329 9.82457 12.8455 9.51201C13.1581 9.19945 13.3337 8.77552 13.3337 8.3335C13.3337 7.89147 13.1581 7.46755 12.8455 7.15499C12.5329 6.84242 12.109 6.66683 11.667 6.66683ZM16.667 6.66683C16.225 6.66683 15.801 6.84242 15.4885 7.15499C15.1759 7.46755 15.0003 7.89147 15.0003 8.3335C15.0003 8.77552 15.1759 9.19945 15.4885 9.51201C15.801 9.82457 16.225 10.0002 16.667 10.0002C17.109 10.0002 17.5329 9.82457 17.8455 9.51201C18.1581 9.19945 18.3337 8.77552 18.3337 8.3335C18.3337 7.89147 18.1581 7.46755 17.8455 7.15499C17.5329 6.84242 17.109 6.66683 16.667 6.66683ZM20.0003 13.3335C17.3482 13.3335 14.8046 14.3871 12.9293 16.2624C11.0539 18.1378 10.0003 20.6813 10.0003 23.3335C10.0003 25.9857 11.0539 28.5292 12.9293 30.4046C14.8046 32.2799 17.3482 33.3335 20.0003 33.3335C22.6525 33.3335 25.196 32.2799 27.0714 30.4046C28.9468 28.5292 30.0003 25.9857 30.0003 23.3335C30.0003 20.6813 28.9468 18.1378 27.0714 16.2624C25.196 14.3871 22.6525 13.3335 20.0003 13.3335ZM13.517 17.5002H16.667C16.267 19.8002 16.667 21.1168 17.6337 22.1502C19.467 23.9335 20.267 26.1835 19.817 29.1668H16.667C17.067 26.8668 16.667 25.5502 15.7003 24.5168C13.867 22.7335 13.0837 20.4835 13.517 17.5002ZM20.1837 17.5002H23.3337C22.9337 19.8002 23.3337 21.1168 24.3003 22.1502C26.1337 23.9335 26.9337 26.1835 26.4837 29.1668H23.3337C23.7337 26.8668 23.3337 25.5502 22.367 24.5168C20.5337 22.7335 19.7503 20.4835 20.1837 17.5002Z" fill="#181A18"/>
                  </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Iron</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M16.6663 5.00006V8.33339C20.833 8.33339 23.1663 8.41672 24.533 9.01672C25.433 9.41672 26.2163 10.3501 27.083 11.6667H8.33301V15.0001H32.6997L31.483 12.5834C29.7663 9.16672 28.2663 7.03339 25.883 5.98339C23.4997 4.91672 20.833 5.00006 16.6663 5.00006ZM9.99967 18.3334C6.29967 18.3334 3.33301 21.3001 3.33301 25.0001V30.0001C3.33301 33.7001 6.29967 36.6667 9.99967 36.6667H29.9997C33.6997 36.6667 36.6663 33.7001 36.6663 30.0001V25.0001C36.6663 21.3001 33.6997 18.3334 29.9997 18.3334H9.99967Z" fill="#181A18"/>
                  </svg>
            </div>
            <div class="iconsA"> 
                <div class="textContent">
                    <h5>Wardrobe</h5>
                    <p></p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M6.66699 6.66683V31.6668C6.66699 33.5002 8.16699 35.0002 10.0003 35.0002V36.6668H13.3337V35.0002H19.167V3.3335H10.0003C8.16699 3.3335 6.66699 4.8335 6.66699 6.66683ZM13.3337 16.6668H16.667V21.6668H13.3337V16.6668ZM30.0003 3.3335H20.8337V35.0002H26.667V36.6668H30.0003V35.0002C31.8337 35.0002 33.3337 33.5002 33.3337 31.6668V6.66683C33.3337 4.8335 31.8337 3.3335 30.0003 3.3335ZM26.667 21.6668H23.3337V16.6668H26.667V21.6668Z" fill="#181A18"/>
                  </svg>
            </div>
            
        </div>
    </div>
</div>

<div class="LocationPropertyDetails">
    <h1>Location</h1>
    @php
        // Tạo URL Google Maps từ địa chỉ
        $encodedAddress = urlencode($address);
    @endphp
    <div class="LocationMap">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBoA17lY0Ew39efGfTQp_jOqnD_z9o41uo&q={{$encodedAddress}}" style="    border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@endsection