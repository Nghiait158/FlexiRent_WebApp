@extends('Layout/header_footer')
@section('content')

<div class="blogPart">
    <div class="card-container">
        <div class="card">
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__" alt="Placeholder Image"/>
            <h3 class ="label">Relocation</h3>
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/79ba/e27c/807c8084952db7b46a3d986cded539d4?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=L8yiZU2qE7VJCpl5OX2kZQ2VjZy0mPPN-nNKWyp~5urhwStm~EX8V3KNodVD0BAnFxV-48Lfh5oVQUZwxLii87dTtsdh9kfeVmn7mrGPAQ40CYYOSzhOAjFHPw8R9WEZpe87oCw8BR4BS79ucbVu7Edcw2K8lpiYJoZa66KJZ5I3vFukXIyDjgihIlN-MgCOfnMTmud7ag0a4HjXjW-BWZ5GfjWG2hc3NVs9NuEukHgJk6utnSFUyUaOFG9X1TY4zckuEtT~kaqFdsSvHYrO3wvoCRpAmlexX4va1VS5QDOQufZbXpm1n65K5eQGaNabRsciyuwg4IFV~t6mKFqlmw__" alt="Placeholder Image"/>
            <h3 class ="label">Working remotely</h3>
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/b7f3/690e/f79fac11fa6f24610dc4233c1b427fff?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=b7k~owYgdi7Tp0PJ3vTpdxJtZpTREfXtbjYzg8yMU4miTazScxr1xDHoytYyEIrezZdOtrAR3pRcr244SQXGyYWF9vys9EeNgK~xRAL4rmY24nRSMojkVRqX3yYyMHdZMgUr9gUHBsV-IW7aePHos47CnTzhafz1rjhkfPsWtYu1DW1H4ckRgA-0bx3oySZyD4-ipz1uOwYNuvgqhiLFRhKvFp9RKi4b9-BN0X5PhcNtRbmmfcKLiVpDubE193V7Ymkql5V8qii-qkIYkpf92XoK2Xi~JtXJRoAUmZSeyemsKmh2c7xMKFVyD0V9GGzDc-PnhHtkuC0m0KSKUol6jA__" alt="Placeholder Image"/>
            <h3 class ="label">Guest experience</h3>
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/b746/dfe2/175c2f5153853678585d4f7b8c434f53?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lHlIsImzYzmQrP2JNWX93PZ-KNy~gNSO9muE2lglXn1G4IihTJGmJAWMr4jHb1J4ZV9EgFCayP7-xFHxbe1l3AcGojzBDQJeoPwimQYqivpfDo9X-V297oIx3-b7KL7saNWc5u9CFRQMGDuxkdNvIltSJ54y0JHbCmq5eNg3cnZUlqVO2JDo8VuA6psVqninmn15Jo7flQhIly-ARsVYaUrt4DoQG6TZPsVnJbjQUzCsx9NZ2AZKdJZ2Y-bu1l4tlmvY5YtJvaaC5Cz~uJYhj~rH6CwOBjttBGJV81410F8g83h~aPEAFevX4M3T2AQgq65emv9ry5~F0UOQ6yEh1Q__" alt="Placeholder Image"/>
            <h3 class ="label">Guest experience</h3>            
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/33a9/12db/06ff8628ba5031c7a86a8dcff57e3e80?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=J44uSGpohbwMUvBDuBc7SnvQmbaTxAgGSJItZ~DJ0z~YhGsPnyyb~tsgkU3XzBzCR~Q6S9zGVkJJKhlraCYB9778Wn832AEyN8APiJYXhCVlMxy~-5acSoFrOqF7SV5lvHE~ZfipsgOwPca1xPq3mUq1Qd1QRWtz~SJ65Eqd2LDlausU27TkCXEb97XEWumIijlnd8TauvTbA4oLhv9Frb-UVaMKfoR6Tb3qG6KHczL1rATKocpuvpuQ9vW4uEfM4n355YIQMzbUfrBFjTf8uB~Hvgpsit8dIzTDuVq1-tOS5WOXHbky7cwse~NTrK49Ku~TRW3yvXw-z~uNpWoSZg__" alt="Placeholder Image"/>
            <h3 class ="label">Apartment lifestyle</h3>
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/db55/ca48/4fc67ffe6c6f988e85c19b9abcee81bc?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=pXz-M5syuCfCtSOYvwX0ZEdouIKVzRb1q9-Ku2fM3Z~kasHnrUGKDw0baOAnmU51ZrX5T20U1IQfSdTf6a2DwPHpz-E5UTFWhhs78e6ssJoQaon4cGfIcMlkvJrBf2sWnISY7iSD0qPXAmm4vEpmfDuoc8TkAvurvlSKAJQRhA770h~fYp89M2GUrm7NX4YCh1Ttax65SvN62kW6PE3lUkS6N15iHFk52eIkIwk0qPdoFkKxruMyK2F9xqTn74M1t42FO6o-ojdGCi3B9vRw5F7f9rQRC7g1m4367RCGVz~taIO7xMXjgxAHNz0KvR3XfolB25PZyv0QnyOZAFwygw__" alt="Placeholder Image"/>
            <h3 class ="label">Guest experience</h3>
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/942b/7312/ec3ca0617f281e211cc690b8aebf9b8f?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=QjNejodd-xTRticOstEI9FtSV4KpozJ9tOGbCXhQKheX~OUfLUEkU6LCfg9tRMd1LGDgThfVLODRfJO22ygqc3dddvdoizYt5JbKAya~5VlewMgf~uREJmGxYa9N-CogAWuQwHa8XeBnJjP8JJQrHc15nPkH9gtpZtwmhIJCZ7kaBmtYwwwGhQZSSzDzo9SjFxS79S3GaXqk~fD2yjgifMLjLLR0wrXA1WNGfFpFS3i4UZNBnk~u7OIiRLdPzX2O6YhpPdVFzbMMGNuXs5fU-sxLKaSuDobMskWhMyS000e5R~GriP~TtPIivWRE23wgxSPb4ncuDuQ2qdGNJnVipA__" alt="Placeholder Image"/>
            <h3 class ="label">Working remotely</h3>
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/942b/7312/ec3ca0617f281e211cc690b8aebf9b8f?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=QjNejodd-xTRticOstEI9FtSV4KpozJ9tOGbCXhQKheX~OUfLUEkU6LCfg9tRMd1LGDgThfVLODRfJO22ygqc3dddvdoizYt5JbKAya~5VlewMgf~uREJmGxYa9N-CogAWuQwHa8XeBnJjP8JJQrHc15nPkH9gtpZtwmhIJCZ7kaBmtYwwwGhQZSSzDzo9SjFxS79S3GaXqk~fD2yjgifMLjLLR0wrXA1WNGfFpFS3i4UZNBnk~u7OIiRLdPzX2O6YhpPdVFzbMMGNuXs5fU-sxLKaSuDobMskWhMyS000e5R~GriP~TtPIivWRE23wgxSPb4ncuDuQ2qdGNJnVipA__" alt="Placeholder Image"/>
            <h3 class ="label">Guest experience</h3>
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
            <img class="card-image" src="https://s3-alpha-sig.figma.com/img/942b/7312/ec3ca0617f281e211cc690b8aebf9b8f?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=QjNejodd-xTRticOstEI9FtSV4KpozJ9tOGbCXhQKheX~OUfLUEkU6LCfg9tRMd1LGDgThfVLODRfJO22ygqc3dddvdoizYt5JbKAya~5VlewMgf~uREJmGxYa9N-CogAWuQwHa8XeBnJjP8JJQrHc15nPkH9gtpZtwmhIJCZ7kaBmtYwwwGhQZSSzDzo9SjFxS79S3GaXqk~fD2yjgifMLjLLR0wrXA1WNGfFpFS3i4UZNBnk~u7OIiRLdPzX2O6YhpPdVFzbMMGNuXs5fU-sxLKaSuDobMskWhMyS000e5R~GriP~TtPIivWRE23wgxSPb4ncuDuQ2qdGNJnVipA__" alt="Placeholder Image"/>
            <h3 class ="label">Relocation</h3>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreButton = document.querySelector('.load-more');
            const cardContainer = document.querySelector('.card-container');

            const cards = [
                {
                    title: "Turpis elit in dictum eget eget",
                    description: "Neque faucibus pharetra condimentum tincidunt commodo velit.",
                    readTime: "1 min read",
                    image: "https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__",
                    label: "Relocation"
                },
                {
                    title: "Turpis elit in dictum eget eget",
                    description: "Neque faucibus pharetra condimentum tincidunt commodo velit.",
                    readTime: "1 min read",
                    image: "https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__",
                    label: "Relocation"
                },
                {
                    title: "Turpis elit in dictum eget eget",
                    description: "Neque faucibus pharetra condimentum tincidunt commodo velit.",
                    readTime: "1 min read",
                    image: "https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__",
                    label: "Relocation"
                },
                {
                    title: "Turpis elit in dictum eget eget",
                    description: "Neque faucibus pharetra condimentum tincidunt commodo velit.",
                    readTime: "1 min read",
                    image: "https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__",
                    label: "Relocation"
                },
                {
                    title: "Turpis elit in dictum eget eget",
                    description: "Neque faucibus pharetra condimentum tincidunt commodo velit.",
                    readTime: "1 min read",
                    image: "https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__",
                    label: "Relocation"
                },
                {
                    title: "Turpis elit in dictum eget eget",
                    description: "Neque faucibus pharetra condimentum tincidunt commodo velit.",
                    readTime: "1 min read",
                    image: "https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__",
                    label: "Relocation"
                },
                {
                    title: "Turpis elit in dictum eget eget",
                    description: "Neque faucibus pharetra condimentum tincidunt commodo velit.",
                    readTime: "1 min read",
                    image: "https://s3-alpha-sig.figma.com/img/0165/61a8/c624d464926a2d8e636cde51aa0e0bad?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jgmwFq7g4GAppbXNBWM5T35~hJVbz8b-8Hmh3b6aDN93W8P7o4ibHV2v0KJIfV80yoopRAMiQPq4kNBGbcmb7bXNqYSGhDi2-Yu28l4M1Cbg9EgZAt4yUL~IsYvMEZ33Wk0OCQmTwyDowbipGPjoiOzXwyMl6Rsse4F4JUG7VDF3bgyL-AOaF~XUT4aKSf4fqQSGnOQfS4GnZl-rERulUdR6ETITvZzSt2k-VyR3BatObQzADYqEz8yovcGrZd-~AP4Yp33bAooJBQp4l73Wstx2XEPxpRuXpCCiEZ1ecIWEvCO3sCXiPOybz6M-ayTUqwIjgAyr5h1uuSF5OoGLvA__",
                    label: "Relocation"
                }
            ];

            let currentIndex = 0;

            loadMoreButton.addEventListener('click', () => {
                if (currentIndex < cards.length) {
                    for (let i = 0; i < 3 && currentIndex < cards.length; i++, currentIndex++) {
                        const card = document.createElement('div');
                        card.className = 'card';
                        card.innerHTML = `
                            <img class="card-image" src="${cards[currentIndex].image}" alt="Placeholder Image"/>
                            <h3 class="label">${cards[currentIndex].label}</h3>
                            <div class="card-content">
                                <div class="card-text">
                                    <h2>${cards[currentIndex].title}</h2>
                                    <p>${cards[currentIndex].description}</p>
                                </div>
                                <div class="read-time">
                                    <div class="dot"></div>
                                    <span>${cards[currentIndex].readTime}</span>
                                </div>
                            </div>
                        `;
                        cardContainer.appendChild(card);
                    }
                } else {
                    loadMoreButton.style.display = 'none'; // Hide button if no more cards
                }
            });
        });
    </script>

@endsection