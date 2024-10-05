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