@extends('Layout/header_footer')
@section('content')

    <!-- Form và image -->
    <div class="container2">
        <img src="{{ ('/Frontend/Image/Landlords/business.png') }}" alt="Background Image" class="background-image">

        <!-- Form Container -->
        <div class="form-container">

            <!-- Title -->
            <div>
                <h1>Earn more from your property, do less</h1>
                <p>Find out if your property meets our criteria</p>
            </div>

            <!-- Input details in here -->
            <div class="section-2">
                <input type="text" placeholder="Name *" required>
                <input type="email" placeholder="Email *" required>
                <input type="tel" placeholder="Phone number *" required>

                <div>
                    <p2>Property details</p2>
                    <div class="property-details">
                        <select required>
                            <option value="" disabled selected>City *</option>
                            <option value="city1">Ho Chi Minh city</option>
                            <option value="city2">Ha Noi</option>
                        </select>
                        <select required>
                            <option value="" disabled selected>Area *</option>
                            <option value="area1">Thu Duc</option>
                            <option value="area2">Tan Binh</option>
                        </select>
                    </div>

                    <select required>
                        <option value="" disabled selected># of bedrooms *</option>
                        <option value="1">1 Bedroom</option>
                        <option value="2">2 Bedrooms</option>
                        <option value="3">3 Bedrooms</option>
                    </select>
                </div>
            </div>
      
            <!-- Submit button -->
            <div class="section-3">
                <button type="submit">Submit</button>
            </div>
        </div>
    
    </div>

    <!-- Information Section -->
    <div class="boxes-container">
        <div class="boxes-header">
            <h1>Better than Property Management</h1>
            <p>We work with 100+ companies to meet accommodation needs in London. Offer a dedicated<br> booking manager that can help to find properties for your needs.</p>
        </div>
        <div class="boxes-features">
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M30 40C31.3807 40 32.5 38.8807 32.5 37.5C32.5 36.1193 31.3807 35 30 35C28.6193 35 27.5 36.1193 27.5 37.5C27.5 38.8807 28.6193 40 30 40Z" fill="black"/>
  <path d="M42.5 19.9999H40V15.2749C40 12.6227 38.9464 10.0792 37.0711 8.20383C35.1957 6.32847 32.6522 5.2749 30 5.2749C27.3478 5.2749 24.8043 6.32847 22.9289 8.20383C21.0536 10.0792 20 12.6227 20 15.2749V19.9999H17.5C15.5109 19.9999 13.6032 20.7901 12.1967 22.1966C10.7902 23.6031 10 25.5108 10 27.4999V47.4999C10 49.489 10.7902 51.3967 12.1967 52.8032C13.6032 54.2097 15.5109 54.9999 17.5 54.9999H42.5C44.4891 54.9999 46.3968 54.2097 47.8033 52.8032C49.2098 51.3967 50 49.489 50 47.4999V27.4999C50 25.5108 49.2098 23.6031 47.8033 22.1966C46.3968 20.7901 44.4891 19.9999 42.5 19.9999ZM25 15.2749C24.9664 13.9131 25.4736 12.5935 26.4107 11.6049C27.3478 10.6163 28.6384 10.0392 30 9.9999C31.3616 10.0392 32.6522 10.6163 33.5893 11.6049C34.5264 12.5935 35.0336 13.9131 35 15.2749V19.9999H25V15.2749ZM30 44.9999C28.5166 44.9999 27.0666 44.56 25.8332 43.7359C24.5999 42.9118 23.6386 41.7405 23.0709 40.37C22.5032 38.9996 22.3547 37.4916 22.6441 36.0367C22.9335 34.5819 23.6478 33.2455 24.6967 32.1966C25.7456 31.1477 27.082 30.4334 28.5368 30.144C29.9917 29.8546 31.4997 30.0031 32.8701 30.5708C34.2406 31.1385 35.4119 32.0998 36.236 33.3331C37.0601 34.5665 37.5 36.0165 37.5 37.4999C37.5 39.489 36.7098 41.3967 35.3033 42.8032C33.8968 44.2097 31.9891 44.9999 30 44.9999Z" fill="black"/>
</svg></div>
                <h2>Guaranteed rent</h2>
                <p>We do the searching for you</p>
            </div>
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M53.675 28.9498L37.625 12.9248C37.2161 12.5135 36.677 12.2573 36.1 12.1998L12.725 9.99977C12.3588 9.96609 11.9897 10.0136 11.644 10.1389C11.2983 10.2642 10.9845 10.4643 10.725 10.7248C10.4645 10.9843 10.2645 11.2981 10.1392 11.6438C10.0138 11.9895 9.96633 12.3586 10 12.7248L12.2 36.0998C12.2575 36.6768 12.5138 37.2159 12.925 37.6248L28.95 53.6748C29.8095 54.5225 30.9678 54.9984 32.175 54.9998C33.3746 54.9972 34.5247 54.521 35.375 53.6748L53.675 35.3748C54.5253 34.5219 55.0028 33.3666 55.0028 32.1623C55.0028 30.9579 54.5253 29.8027 53.675 28.9498ZM28.9 28.9498C28.3757 29.4747 27.7076 29.8323 26.98 29.9774C26.2525 30.1224 25.4982 30.0485 24.8127 29.7648C24.1272 29.4811 23.5413 29.0004 23.129 28.3836C22.7168 27.7668 22.4967 27.0416 22.4967 26.2998C22.4967 25.5579 22.7168 24.8327 23.129 24.2159C23.5413 23.5991 24.1272 23.1185 24.8127 22.8348C25.4982 22.5511 26.2525 22.4771 26.98 22.6222C27.7076 22.7672 28.3757 23.1249 28.9 23.6498C29.5931 24.3476 29.9821 25.2912 29.9821 26.2748C29.9821 27.2583 29.5931 28.2019 28.9 28.8998V28.9498Z" fill="black"/>
</svg></div>
                <h2>No fees</h2>
                <p>Preferred partner rates</p>
            </div>
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M42.5 27.5V12.5C42.5 9.75 40.25 7.5 37.5 7.5H22.5C19.75 7.5 17.5 9.75 17.5 12.5V17.5H12.5C9.75 17.5 7.5 19.75 7.5 22.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H25C26.375 52.5 27.5 51.375 27.5 50V42.5H32.5V50C32.5 51.375 33.625 52.5 35 52.5H47.5C50.25 52.5 52.5 50.25 52.5 47.5V32.5C52.5 29.75 50.25 27.5 47.5 27.5H42.5ZM17.5 47.5H12.5V42.5H17.5V47.5ZM17.5 37.5H12.5V32.5H17.5V37.5ZM17.5 27.5H12.5V22.5H17.5V27.5ZM27.5 37.5H22.5V32.5H27.5V37.5ZM27.5 27.5H22.5V22.5H27.5V27.5ZM27.5 17.5H22.5V12.5H27.5V17.5ZM37.5 37.5H32.5V32.5H37.5V37.5ZM37.5 27.5H32.5V22.5H37.5V27.5ZM37.5 17.5H32.5V12.5H37.5V17.5ZM47.5 47.5H42.5V42.5H47.5V47.5ZM47.5 37.5H42.5V32.5H47.5V37.5Z" fill="black"/>
</svg></div>
                <h2>No voids</h2>
                <p>Preferred partner rates</p>
            </div>
            <div class="boxes-feature">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
  <path d="M55 30C55 16.1925 43.8075 5 30 5C16.1925 5 5 16.1925 5 30C5 43.8075 16.1925 55 30 55C43.8075 55 55 43.8075 55 30ZM18.75 21.86C19.6175 20.905 21.0375 20 23.125 20C26.005 20 27.86 21.98 28.5125 24.1525C29.145 26.27 28.7625 28.89 26.9625 30.6975C26.3382 31.2977 25.676 31.8572 24.98 32.3725L24.88 32.45C24.18 32.99 23.555 33.48 23.005 34.025C22.3675 34.665 21.845 35.3625 21.5425 36.25H26.875C27.3723 36.25 27.8492 36.4475 28.2008 36.7992C28.5525 37.1508 28.75 37.6277 28.75 38.125C28.75 38.6223 28.5525 39.0992 28.2008 39.4508C27.8492 39.8025 27.3723 40 26.875 40H19.375C18.8777 40 18.4008 39.8025 18.0492 39.4508C17.6975 39.0992 17.5 38.6223 17.5 38.125C17.5 35.0075 18.81 32.9175 20.36 31.3725C21.1 30.6325 21.905 30.01 22.585 29.4825L22.5925 29.4775C23.3075 28.925 23.8625 28.495 24.305 28.0525C24.985 27.3675 25.2225 26.24 24.92 25.2275C24.6325 24.275 23.995 23.75 23.125 23.75C22.2425 23.75 21.7875 24.0925 21.525 24.3825C21.3714 24.552 21.2465 24.7454 21.155 24.955V24.9625C21.0018 25.4359 20.6669 25.8291 20.2238 26.0555C19.7808 26.282 19.2659 26.3232 18.7925 26.17C18.3191 26.0168 17.9259 25.6819 17.6995 25.2388C17.473 24.7958 17.4318 24.2809 17.585 23.8075L17.6725 23.5675C17.9294 22.9404 18.2931 22.3627 18.7475 21.86H18.75ZM33.125 20C33.6223 20 34.0992 20.1975 34.4508 20.5492C34.8025 20.9008 35 21.3777 35 21.875V28.75H38.75V21.875C38.75 21.3777 38.9475 20.9008 39.2992 20.5492C39.6508 20.1975 40.1277 20 40.625 20C41.1223 20 41.5992 20.1975 41.9508 20.5492C42.3025 20.9008 42.5 21.3777 42.5 21.875V38.05C42.5 38.5473 42.3025 39.0242 41.9508 39.3758C41.5992 39.7275 41.1223 39.925 40.625 39.925C40.1277 39.925 39.6508 39.7275 39.2992 39.3758C38.9475 39.0242 38.75 38.5473 38.75 38.05V32.5H33.125C32.6277 32.5 32.1508 32.3025 31.7992 31.9508C31.4475 31.5992 31.25 31.1223 31.25 30.625V21.875C31.25 21.3777 31.4475 20.9008 31.7992 20.5492C32.1508 20.1975 32.6277 20 33.125 20Z" fill="black"/>
</svg></div>
                <h2>24/7 maintenance</h2>
                <p>Extend on short notice</p>
            </div>
        </div>
    </div>
    
    <!--Corporate Partnerships-->
    <div class="corporate">
        <div class="container">
            <div class="header">
                <h1>Corporate Partnerships</h1>
                <p>We work with 100+ companies to meet accommodation needs in London. Offer a dedicated<br> booking manager that can help to find properties for your needs.</p>
            </div>
            <div class="image-gallery">
                <div class="image-wrapper">
                    <img src="{{ ('/Frontend/Image/Landlords/bedroom-before.png') }}" alt="Before" />
                    <div class="label">Before</div>
                </div>
                <div class="image-wrapper">
                    <img src="{{ ('/Frontend/Image/Landlords/bedroom-after.png') }}" alt="After" />
                    <div class="label">After</div>
                </div>
            </div>
            <div class="features">
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 5H11.666C10.3399 5 9.06816 5.52678 8.13048 6.46447C7.1928 7.40215 6.66602 8.67392 6.66602 10V30C6.66602 31.3261 7.1928 32.5979 8.13048 33.5355C9.06816 34.4732 10.3399 35 11.666 35H31.666C32.108 35 32.532 34.8244 32.8445 34.5118C33.1571 34.1993 33.3327 33.7754 33.3327 33.3333V6.66667C33.3327 6.22464 33.1571 5.80072 32.8445 5.48816C32.532 5.17559 32.108 5 31.666 5ZM11.666 31.6667C11.224 31.6667 10.8001 31.4911 10.4875 31.1785C10.1749 30.866 9.99935 30.442 9.99935 30C9.99935 29.558 10.1749 29.134 10.4875 28.8215C10.8001 28.5089 11.224 28.3333 11.666 28.3333H29.9993V31.6667H11.666Z" fill="black"/>
</svg></div>
                    <h2>Consequat risus</h2>
                    <p>Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                </div>
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 34.583L27.816 19.583C29.2394 17.812 30.0103 15.6052 29.9993 13.333C29.9993 10.6808 28.9458 8.1373 27.0704 6.26194C25.195 4.38658 22.6515 3.33301 19.9993 3.33301C17.3472 3.33301 14.8036 4.38658 12.9283 6.26194C11.0529 8.1373 9.99933 10.6808 9.99933 13.333C9.99476 15.6227 10.784 17.8432 12.2327 19.6163L8.33266 34.583C8.24971 34.9029 8.26372 35.2402 8.37292 35.5521C8.48213 35.864 8.68159 36.1364 8.94596 36.3347C9.21034 36.533 9.52769 36.6482 9.8577 36.6657C10.1877 36.6832 10.5155 36.6022 10.7993 36.433L19.6827 31.2163L29.1493 36.4497C29.4051 36.604 29.7008 36.6794 29.9993 36.6663C30.2581 36.6746 30.5153 36.6224 30.7504 36.514C30.9855 36.4056 31.1922 36.2439 31.3539 36.0417C31.5157 35.8395 31.6281 35.6024 31.6823 35.3492C31.7364 35.096 31.7309 34.8337 31.666 34.583ZM19.9993 6.66634C21.3179 6.66634 22.6068 7.05733 23.7031 7.78988C24.7995 8.52242 25.6539 9.56361 26.1585 10.7818C26.6631 12 26.7951 13.3404 26.5379 14.6336C26.2807 15.9268 25.6457 17.1147 24.7134 18.0471C23.781 18.9794 22.5931 19.6143 21.2999 19.8716C20.0067 20.1288 18.6663 19.9968 17.4481 19.4922C16.2299 18.9876 15.1887 18.1331 14.4562 17.0368C13.7237 15.9405 13.3327 14.6515 13.3327 13.333C13.3327 11.5649 14.035 9.8692 15.2853 8.61896C16.5355 7.36872 18.2312 6.66634 19.9993 6.66634Z" fill="#181A18"/>
</svg>️</div>
                    <h2>Morbi pulvinar</h2>
                    <p>Eu vulputate mi cras quam lectus. Ut ut dignissim amet dignissim gravida sit ullamcorper lectus.</p>
                </div>
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 5H11.666C10.3399 5 9.06816 5.52678 8.13048 6.46447C7.1928 7.40215 6.66602 8.67392 6.66602 10V30C6.66602 31.3261 7.1928 32.5979 8.13048 33.5355C9.06816 34.4732 10.3399 35 11.666 35H31.666C32.108 35 32.532 34.8244 32.8445 34.5118C33.1571 34.1993 33.3327 33.7754 33.3327 33.3333V6.66667C33.3327 6.22464 33.1571 5.80072 32.8445 5.48816C32.532 5.17559 32.108 5 31.666 5ZM11.666 31.6667C11.224 31.6667 10.8001 31.4911 10.4875 31.1785C10.1749 30.866 9.99935 30.442 9.99935 30C9.99935 29.558 10.1749 29.134 10.4875 28.8215C10.8001 28.5089 11.224 28.3333 11.666 28.3333H29.9993V31.6667H11.666Z" fill="black"/>
</svg></div>
                    <h2>Turpis elit</h2>
                    <p>Arcu venenatis id dignissim massa ipsum. Viverra mi habitant urna at elit dignissim cursus ut facilisi.</p>
                </div>
                <div class="feature">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M31.666 34.583L27.816 19.583C29.2394 17.812 30.0103 15.6052 29.9993 13.333C29.9993 10.6808 28.9458 8.1373 27.0704 6.26194C25.195 4.38658 22.6515 3.33301 19.9993 3.33301C17.3472 3.33301 14.8036 4.38658 12.9283 6.26194C11.0529 8.1373 9.99933 10.6808 9.99933 13.333C9.99476 15.6227 10.784 17.8432 12.2327 19.6163L8.33266 34.583C8.24971 34.9029 8.26372 35.2402 8.37292 35.5521C8.48213 35.864 8.68159 36.1364 8.94596 36.3347C9.21034 36.533 9.52769 36.6482 9.8577 36.6657C10.1877 36.6832 10.5155 36.6022 10.7993 36.433L19.6827 31.2163L29.1493 36.4497C29.4051 36.604 29.7008 36.6794 29.9993 36.6663C30.2581 36.6746 30.5153 36.6224 30.7504 36.514C30.9855 36.4056 31.1922 36.2439 31.3539 36.0417C31.5157 35.8395 31.6281 35.6024 31.6823 35.3492C31.7364 35.096 31.7309 34.8337 31.666 34.583ZM19.9993 6.66634C21.3179 6.66634 22.6068 7.05733 23.7031 7.78988C24.7995 8.52242 25.6539 9.56361 26.1585 10.7818C26.6631 12 26.7951 13.3404 26.5379 14.6336C26.2807 15.9268 25.6457 17.1147 24.7134 18.0471C23.781 18.9794 22.5931 19.6143 21.2999 19.8716C20.0067 20.1288 18.6663 19.9968 17.4481 19.4922C16.2299 18.9876 15.1887 18.1331 14.4562 17.0368C13.7237 15.9405 13.3327 14.6515 13.3327 13.333C13.3327 11.5649 14.035 9.8692 15.2853 8.61896C16.5355 7.36872 18.2312 6.66634 19.9993 6.66634Z" fill="#181A18"/>
</svg>️</div>
                    <h2>Faucibus egestas</h2>
                    <p>Vehicula arcu, felis, et urna, nunc, ut eget pellentesque scelerisque. Accumsan et velit nibh tempor.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-container">
        <div class="header">
            <h1>Pricing</h1>
            <p>Compare our pricing model to high street agents</p>
        </div>
        <div class="comparison">
            <div class="agent-card">
                <div class="card-header">
                    <h2>High Street Agents</h2>
                    <div class="price">12%</div>
                    <p>management fee</p>
                </div>
                <div class="features">
                    <div class="feature">6 to 12 months</div>
                    <div class="feature">No maintenance</div>
                    <div class="feature">No weekly cleaning</div>
                    <div class="feature">No interior design</div>
                    <div class="feature">5% void</div>
                    <div class="feature">£24,900</div>
                </div>
                <button class="get-started">Get started</button>
            </div>
            <div class="vs">Vs</div>
            <div class="agent-card">
                <div class="card-header">
                    <h2>Flex Living (guaranteed Rental)</h2>
                    <div class="price">Fixed price</div>
                    <p>monthly</p>
                </div>
                <div class="features">
                    <div class="feature">3 to 5 years</div>
                    <div class="feature">Free maintenance</div>
                    <div class="feature">Weekly cleaning</div>
                    <div class="feature">Interior design</div>
                    <div class="feature">No void</div>
                    <div class="feature">£30,000</div>
                </div>
                <button class="get-started">Get started</button>
            </div>
        </div>
    </div>


@endsection 