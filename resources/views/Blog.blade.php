@extends('Layout/header_footer')
@section('content')

<script>
    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/swiper-bundle.min.blogPage.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

    // Create a link element
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/Frontend/css/Blog.css'; // Your CSS file path
    // Append it to the head
    document.head.appendChild(link);

</script>


<div class="blog-title-container">
    <p>Flex Living
        Insights</p>

</div>

<div class="nav-container">
    <div class="nav-block">
        <a href="#" style="color:#064749">View all</a>
        <a href="#">Destination guide</a>
        <a href="#">Remote working</a>
        <a href="#">Property investing</a>
        <a href="#">Property insights</a>
    </div>
</div>

<div class="picture-container">

    <div class="picture-content">
        <div class="swiper blog-picture">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture6.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="\Frontend\Image\blogPage\picture8.jfif" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="quote">
            <h2>We rent your property</h2>
            <p>Vel mattis integer pulvinar morbi quis amet eu. In nunc facilisis proin fermentum, consectetur cursus. </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="\Frontend\js\blog-pictureSlider.js"></script>


<div class="blogPart">
    <div class="card-container">
        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__" alt="Placeholder Image" />
            <h3 class="label">Relocation</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Turpis elit in dictum eget eget</h2>
                    <p>Neque faucibus pharetra condimentum tincidunt commodo velit.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>1 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/79ba/e27c/807c8084952db7b46a3d986cded539d4?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=L8yiZU2qE7VJCpl5OX2kZQ2VjZy0mPPN-nNKWyp~5urhwStm~EX8V3KNodVD0BAnFxV-48Lfh5oVQUZwxLii87dTtsdh9kfeVmn7mrGPAQ40CYYOSzhOAjFHPw8R9WEZpe87oCw8BR4BS79ucbVu7Edcw2K8lpiYJoZa66KJZ5I3vFukXIyDjgihIlN-MgCOfnMTmud7ag0a4HjXjW-BWZ5GfjWG2hc3NVs9NuEukHgJk6utnSFUyUaOFG9X1TY4zckuEtT~kaqFdsSvHYrO3wvoCRpAmlexX4va1VS5QDOQufZbXpm1n65K5eQGaNabRsciyuwg4IFV~t6mKFqlmw__" alt="Placeholder Image" />
            <h3 class="label">Working remotely</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Feugiat gravida sed sit lacus sagittis</h2>
                    <p>Neque ipsum mi nisl, id ultricies. Sollicitudin et id consequat tellus commodo magnis.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>3 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/b7f3/690e/f79fac11fa6f24610dc4233c1b427fff?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=b7k~owYgdi7Tp0PJ3vTpdxJtZpTREfXtbjYzg8yMU4miTazScxr1xDHoytYyEIrezZdOtrAR3pRcr244SQXGyYWF9vys9EeNgK~xRAL4rmY24nRSMojkVRqX3yYyMHdZMgUr9gUHBsV-IW7aePHos47CnTzhafz1rjhkfPsWtYu1DW1H4ckRgA-0bx3oySZyD4-ipz1uOwYNuvgqhiLFRhKvFp9RKi4b9-BN0X5PhcNtRbmmfcKLiVpDubE193V7Ymkql5V8qii-qkIYkpf92XoK2Xi~JtXJRoAUmZSeyemsKmh2c7xMKFVyD0V9GGzDc-PnhHtkuC0m0KSKUol6jA__" alt="Placeholder Image" />
            <h3 class="label">Guest experience</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Aliquam id ullamcorper eu</h2>
                    <p>Id imperdiet sem nec id nulla purus leo risus. Risus tincidunt ultrices id ultricies vitae.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>2 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/b746/dfe2/175c2f5153853678585d4f7b8c434f53?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lHlIsImzYzmQrP2JNWX93PZ-KNy~gNSO9muE2lglXn1G4IihTJGmJAWMr4jHb1J4ZV9EgFCayP7-xFHxbe1l3AcGojzBDQJeoPwimQYqivpfDo9X-V297oIx3-b7KL7saNWc5u9CFRQMGDuxkdNvIltSJ54y0JHbCmq5eNg3cnZUlqVO2JDo8VuA6psVqninmn15Jo7flQhIly-ARsVYaUrt4DoQG6TZPsVnJbjQUzCsx9NZ2AZKdJZ2Y-bu1l4tlmvY5YtJvaaC5Cz~uJYhj~rH6CwOBjttBGJV81410F8g83h~aPEAFevX4M3T2AQgq65emv9ry5~F0UOQ6yEh1Q__" alt="Placeholder Image" />
            <h3 class="label">Guest experience</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Placerat purus habitasse malesuada</h2>
                    <p>Egestas varius urna vestibulum et, phasellus varius ornare.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>3 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/33a9/12db/06ff8628ba5031c7a86a8dcff57e3e80?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=J44uSGpohbwMUvBDuBc7SnvQmbaTxAgGSJItZ~DJ0z~YhGsPnyyb~tsgkU3XzBzCR~Q6S9zGVkJJKhlraCYB9778Wn832AEyN8APiJYXhCVlMxy~-5acSoFrOqF7SV5lvHE~ZfipsgOwPca1xPq3mUq1Qd1QRWtz~SJ65Eqd2LDlausU27TkCXEb97XEWumIijlnd8TauvTbA4oLhv9Frb-UVaMKfoR6Tb3qG6KHczL1rATKocpuvpuQ9vW4uEfM4n355YIQMzbUfrBFjTf8uB~Hvgpsit8dIzTDuVq1-tOS5WOXHbky7cwse~NTrK49Ku~TRW3yvXw-z~uNpWoSZg__" alt="Placeholder Image" />
            <h3 class="label">Apartment lifestyle</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Proin tristique ipsum velit cursus</h2>
                    <p>Ultricies lacus, purus praesent scelerisque vitae et ultrices.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>2 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/db55/ca48/4fc67ffe6c6f988e85c19b9abcee81bc?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=pXz-M5syuCfCtSOYvwX0ZEdouIKVzRb1q9-Ku2fM3Z~kasHnrUGKDw0baOAnmU51ZrX5T20U1IQfSdTf6a2DwPHpz-E5UTFWhhs78e6ssJoQaon4cGfIcMlkvJrBf2sWnISY7iSD0qPXAmm4vEpmfDuoc8TkAvurvlSKAJQRhA770h~fYp89M2GUrm7NX4YCh1Ttax65SvN62kW6PE3lUkS6N15iHFk52eIkIwk0qPdoFkKxruMyK2F9xqTn74M1t42FO6o-ojdGCi3B9vRw5F7f9rQRC7g1m4367RCGVz~taIO7xMXjgxAHNz0KvR3XfolB25PZyv0QnyOZAFwygw__" alt="Placeholder Image" />
            <h3 class="label">Guest experience</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Vulputate id sem felis, at at eget nulla</h2>
                    <p>Vitae enim morbi varius neque pellentesque faucibus.</p>
                </div>


                <div class="read-time">
                    <div class="dot"></div>
                    <span>5 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/942b/7312/ec3ca0617f281e211cc690b8aebf9b8f?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=QjNejodd-xTRticOstEI9FtSV4KpozJ9tOGbCXhQKheX~OUfLUEkU6LCfg9tRMd1LGDgThfVLODRfJO22ygqc3dddvdoizYt5JbKAya~5VlewMgf~uREJmGxYa9N-CogAWuQwHa8XeBnJjP8JJQrHc15nPkH9gtpZtwmhIJCZ7kaBmtYwwwGhQZSSzDzo9SjFxS79S3GaXqk~fD2yjgifMLjLLR0wrXA1WNGfFpFS3i4UZNBnk~u7OIiRLdPzX2O6YhpPdVFzbMMGNuXs5fU-sxLKaSuDobMskWhMyS000e5R~GriP~TtPIivWRE23wgxSPb4ncuDuQ2qdGNJnVipA__" alt="Placeholder Image" />
            <h3 class="label">Working remotely</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Ultrices sodales a sit pretium ut amet</h2>
                    <p>Sagittis purus aenean magna eget arcu egestas nisi, id.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>5 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/942b/7312/ec3ca0617f281e211cc690b8aebf9b8f?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=QjNejodd-xTRticOstEI9FtSV4KpozJ9tOGbCXhQKheX~OUfLUEkU6LCfg9tRMd1LGDgThfVLODRfJO22ygqc3dddvdoizYt5JbKAya~5VlewMgf~uREJmGxYa9N-CogAWuQwHa8XeBnJjP8JJQrHc15nPkH9gtpZtwmhIJCZ7kaBmtYwwwGhQZSSzDzo9SjFxS79S3GaXqk~fD2yjgifMLjLLR0wrXA1WNGfFpFS3i4UZNBnk~u7OIiRLdPzX2O6YhpPdVFzbMMGNuXs5fU-sxLKaSuDobMskWhMyS000e5R~GriP~TtPIivWRE23wgxSPb4ncuDuQ2qdGNJnVipA__" alt="Placeholder Image" />
            <h3 class="label">Guest experience</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>Turpis pellentesque mauris quis risus</h2>
                    <p>Volutpat scelerisque sed lectus eu donec neque in aliquam.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>1 min read</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/942b/7312/ec3ca0617f281e211cc690b8aebf9b8f?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=QjNejodd-xTRticOstEI9FtSV4KpozJ9tOGbCXhQKheX~OUfLUEkU6LCfg9tRMd1LGDgThfVLODRfJO22ygqc3dddvdoizYt5JbKAya~5VlewMgf~uREJmGxYa9N-CogAWuQwHa8XeBnJjP8JJQrHc15nPkH9gtpZtwmhIJCZ7kaBmtYwwwGhQZSSzDzo9SjFxS79S3GaXqk~fD2yjgifMLjLLR0wrXA1WNGfFpFS3i4UZNBnk~u7OIiRLdPzX2O6YhpPdVFzbMMGNuXs5fU-sxLKaSuDobMskWhMyS000e5R~GriP~TtPIivWRE23wgxSPb4ncuDuQ2qdGNJnVipA__" alt="Placeholder Image" />
            <h3 class="label">Relocation</h3>
            <div class="card-content">
                <div class="card-text">
                    <h2>In pellentesque eget natoque vestibulum</h2>
                    <p>In amet vehicula porttitor viverra maecenas metus dictum arcu lorem.</p>
                </div>
                <div class="read-time">
                    <div class="dot"></div>
                    <span>2 min read</span>
                </div>
            </div>
        </div>
    </div>

    <div class="load-more">
        <span>Load more</span>
    </div>
</div>

<script src="\Frontend\js\Blog.js"></script>


<div class="blog-container">
    <h2>Read our blog</h2>

    <div class="swiper blogSwiperBlog">
        <div class="swiper-wrapper">
            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/816a/26dc/ca23d8635be9f936f7b906928bffa8f3?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=fOwYl7AHgp~ecYqAcgKjBtuQtLhCBlgDAYJ6XGDd8jEBrL1yaHWHXM7TvUhhTwZW3koC0UUHlICyh1Ds9g4BTREM77mCYteLqixcj0ZDIpzg7t~rMiU~YFdkfjV9LXU5uV3W4-oUgHsM-Pk3M~IkL0oe7OfmwZVKZs9J6lyu18rLQcOsqWhR~-E1TepfDiavr2Ck4OKoFGQliZzjsQkSvTEA8WND4ubbL3zTRIrRmz7cCCOFZUhcavXIBVNak0gVVZspOaQqfVe0fqGm0usMudrDQMhnrhzeQS3Y2Hh95GVIv4EFw4I2sC4wtqbAYdj3KVj9p2g00WCMqrLEVGwO5Q__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Neque faucibus pharetra condimentum tincidunt commodo velit.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/a210/8b5b/70676d8adf7169e0cfb368a3f5e68b8c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=mXO9Llg78hhxoOBnTnfvOvVhsrdan8IxJHLgZvECQ-HhrQmZgsunKCKc2-cX3obdNGUYqpsSalTn1OnjnRXhR~N~N56336ExXmVdhLi4Ny3tN-cQQbohd0bqm5pPfaLuRgNGlt4VEhafyFVjdpbN8pJGLXAujl6r-kgaciPBBE82jLK-vlKciU7FntgZhhq8iXihcwdTAi9FmlQoZSVVG0RGwPNwq27bUFc8sMINSgVI3SmvOBfcoGX9qZ~FxVpjELQxjuxBBbAI8H0FkNDTMgspHVwe~~JcfjVNvaWQZtXobY~vqKYTPEg1hSEOVOZRwvrDL~52pqPLyybvTtiDew__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Convallis eu vel fames feugiat et venenatis nulla ipsum.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>1 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/7734/04fa/8d452f77369d5bdb11b8bac3b9352168?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lJCJqBBBlTvlxcQfzYIjaeHOG-f8Iu7sSPtyKBnxuvPG5NJtJJrOtUJw~hSyVbilbDIEPovt6Dz5W9WF6oT-pDJQU-OOqazG~IT4wVoIdv07BJ~khStjchs-ZjYNgZsk-N5vS634Q~wpXWrTe1dsumfWw~zWwXK24A9o2X~SpwO3DHzcaoWMJAyfQkuTWcx0Uv1U2fZI0XForJhp5FcwdxHLBt3yIOrqgsuFAt6ZytKx0-uY8l1CeooFJIU5Hw7yw25kRkcvamf2oQKdmwXInAcF6PaiB~Nj~sOl4KXD5lR0HkpYQFUiebJBrx9Q~fGnozN4gtMOrRBubUp4oOKU1Q__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Feugiat gravida sed sit lacus sagittis</h2>
                        <p>Pellentesque ultrices hendrerit lacus lectus.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/33a9/12db/06ff8628ba5031c7a86a8dcff57e3e80?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=J44uSGpohbwMUvBDuBc7SnvQmbaTxAgGSJItZ~DJ0z~YhGsPnyyb~tsgkU3XzBzCR~Q6S9zGVkJJKhlraCYB9778Wn832AEyN8APiJYXhCVlMxy~-5acSoFrOqF7SV5lvHE~ZfipsgOwPca1xPq3mUq1Qd1QRWtz~SJ65Eqd2LDlausU27TkCXEb97XEWumIijlnd8TauvTbA4oLhv9Frb-UVaMKfoR6Tb3qG6KHczL1rATKocpuvpuQ9vW4uEfM4n355YIQMzbUfrBFjTf8uB~Hvgpsit8dIzTDuVq1-tOS5WOXHbky7cwse~NTrK49Ku~TRW3yvXw-z~uNpWoSZg__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Feugiat gravida sed sit lacus sagittis</h2>
                        <p>Dolor elit viverra facilisis aliquam, aliquet arcu nec.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/816a/26dc/ca23d8635be9f936f7b906928bffa8f3?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=fOwYl7AHgp~ecYqAcgKjBtuQtLhCBlgDAYJ6XGDd8jEBrL1yaHWHXM7TvUhhTwZW3koC0UUHlICyh1Ds9g4BTREM77mCYteLqixcj0ZDIpzg7t~rMiU~YFdkfjV9LXU5uV3W4-oUgHsM-Pk3M~IkL0oe7OfmwZVKZs9J6lyu18rLQcOsqWhR~-E1TepfDiavr2Ck4OKoFGQliZzjsQkSvTEA8WND4ubbL3zTRIrRmz7cCCOFZUhcavXIBVNak0gVVZspOaQqfVe0fqGm0usMudrDQMhnrhzeQS3Y2Hh95GVIv4EFw4I2sC4wtqbAYdj3KVj9p2g00WCMqrLEVGwO5Q__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Neque faucibus pharetra condimentum tincidunt commodo velit.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/a210/8b5b/70676d8adf7169e0cfb368a3f5e68b8c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=mXO9Llg78hhxoOBnTnfvOvVhsrdan8IxJHLgZvECQ-HhrQmZgsunKCKc2-cX3obdNGUYqpsSalTn1OnjnRXhR~N~N56336ExXmVdhLi4Ny3tN-cQQbohd0bqm5pPfaLuRgNGlt4VEhafyFVjdpbN8pJGLXAujl6r-kgaciPBBE82jLK-vlKciU7FntgZhhq8iXihcwdTAi9FmlQoZSVVG0RGwPNwq27bUFc8sMINSgVI3SmvOBfcoGX9qZ~FxVpjELQxjuxBBbAI8H0FkNDTMgspHVwe~~JcfjVNvaWQZtXobY~vqKYTPEg1hSEOVOZRwvrDL~52pqPLyybvTtiDew__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Turpis elit in dictum eget eget</h2>
                        <p>Convallis eu vel fames feugiat et venenatis nulla ipsum.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>1 min read</p>
                    </div>
                </div>
            </a>



            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/d51e/0114/6015144e93b4f0a379b9355fbb99cca1?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=a4RQxwm2vIpfdVF8G7Eeyn5IasYN7eZy7jljin8cv5v2CI7x8k0gTrYYsVNSflX-qozrn4a9qUcA0FllUWdkXsYvegNilEcHbOj841wlZSw-9pWXRgvmCNHIQbo8mVBcoyMT-FIglKaYSJqavo4zEFiDd4yTn1~IBTGQaxc~V-Y2K9wmUzOyHtgQL~NOE-6nVbiYeo3QfF44FrxXIB4pW537Q8uTn7C8d4PNVRee7VEqSU0iA7T8SDzGAMzSyjreMLZFy-A1wljQu0YBCw8lebOkjJLIQEiczm821zACuU7i4KUqezuUIvyduN9dOS6zPF5qb5ASOy6MJtLPCkFt6g__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Faucibus egestas ut sit purus ultricies at eu</h2>
                        <p>Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>

            <a href="" class="swiper-slide">
                <img class="slide-picture" src="https://s3-alpha-sig.figma.com/img/33a9/12db/06ff8628ba5031c7a86a8dcff57e3e80?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=J44uSGpohbwMUvBDuBc7SnvQmbaTxAgGSJItZ~DJ0z~YhGsPnyyb~tsgkU3XzBzCR~Q6S9zGVkJJKhlraCYB9778Wn832AEyN8APiJYXhCVlMxy~-5acSoFrOqF7SV5lvHE~ZfipsgOwPca1xPq3mUq1Qd1QRWtz~SJ65Eqd2LDlausU27TkCXEb97XEWumIijlnd8TauvTbA4oLhv9Frb-UVaMKfoR6Tb3qG6KHczL1rATKocpuvpuQ9vW4uEfM4n355YIQMzbUfrBFjTf8uB~Hvgpsit8dIzTDuVq1-tOS5WOXHbky7cwse~NTrK49Ku~TRW3yvXw-z~uNpWoSZg__" alt="">

                <div class="text">
                    <div class="slide-content">
                        <h2>Feugiat gravida sed sit lacus sagittis</h2>
                        <p>Dolor elit viverra facilisis aliquam, aliquet arcu nec.</p>
                    </div>
                    <div class="time-to-read">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM16 13H12C11.7348 13 11.4804 12.8946 11.2929 12.7071C11.1054 12.5196 11 12.2652 11 12V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13Z" fill="#181A18" />
                        </svg>
                        <p>3 min read</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="\Frontend\js\blogBlogSlider.js"></script>


</div>


@endsection