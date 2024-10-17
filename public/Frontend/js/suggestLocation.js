// Hardcoded locations for the example
const locations = [
    "Manhattan, New York, USA",
    "Brooklyn, New York, USA",
    "Hollywood, Los Angeles, USA",
    "Santa Monica, Los Angeles, USA",
    "Fisherman's Wharf, San Francisco, USA",
    "Union Square, San Francisco, USA",
    "Shibuya, Tokyo, Japan",
    "Shinjuku, Tokyo, Japan",
    "Gangnam, Seoul, South Korea",
    "Itaewon, Seoul, South Korea",
    "Camden Town, London, UK",
    "Westminster, London, UK",
    "Montmartre, Paris, France",
    "Le Marais, Paris, France",
    "Kreuzberg, Berlin, Germany",
    "Mitte, Berlin, Germany",
    "Ba Dinh, Hanoi, Vietnam",
    "Hoan Kiem, Hanoi, Vietnam",
    "Tay Ho, Hanoi, Vietnam",
    "Long Bien, Hanoi, Vietnam",
    "Cau Giay, Hanoi, Vietnam",
    "Dong Da, Hanoi, Vietnam",
    "Hai Ba Trung, Hanoi, Vietnam",
    "Hoang Mai, Hanoi, Vietnam",
    "Thanh Xuan, Hanoi, Vietnam",
    "Soc Son, Hanoi, Vietnam",
    "Dong Anh, Hanoi, Vietnam",
    "Gia Lam, Hanoi, Vietnam",
    "Nam Tu Liem, Hanoi, Vietnam",
    "Bac Tu Liem, Hanoi, Vietnam",
    "Me Linh, Hanoi, Vietnam",
    "Ha Dong, Hanoi, Vietnam",
    "Son Tay, Hanoi, Vietnam",
    "Ba Vi, Hanoi, Vietnam",
    "Phuc Tho, Hanoi, Vietnam",
    "Dan Phuong, Hanoi, Vietnam",
    "Hoai Duc, Hanoi, Vietnam",
    "Thach That, Hanoi, Vietnam",
    "Quoc Oai, Hanoi, Vietnam",
    "Chuong My, Hanoi, Vietnam",
    "Thanh Oai, Hanoi, Vietnam",
    "Thuong Tin, Hanoi, Vietnam",
    "Phu Xuyen, Hanoi, Vietnam",
    "Ung Hoa, Hanoi, Vietnam",
    "My Duc, Hanoi, Vietnam",
    "District 1, Ho Chi Minh City, Vietnam",
    "District 2 (Thu Duc City), Ho Chi Minh City, Vietnam",
    "District 3, Ho Chi Minh City, Vietnam",
    "District 4, Ho Chi Minh City, Vietnam",
    "District 5, Ho Chi Minh City, Vietnam",
    "District 6, Ho Chi Minh City, Vietnam",
    "District 7, Ho Chi Minh City, Vietnam",
    "District 8, Ho Chi Minh City, Vietnam",
    "District 9 (Thu Duc City), Ho Chi Minh City, Vietnam",
    "Thu Duc (Thu Duc City), Ho Chi Minh City, Vietnam",
    "District 10, Ho Chi Minh City, Vietnam",
    "District 11, Ho Chi Minh City, Vietnam",
    "District 12, Ho Chi Minh City, Vietnam",
    "Binh Thanh, Ho Chi Minh City, Vietnam",
    "Go Vap, Ho Chi Minh City, Vietnam",
    "Phu Nhuan, Ho Chi Minh City, Vietnam",
    "Tan Binh, Ho Chi Minh City, Vietnam",
    "Tan Phu, Ho Chi Minh City, Vietnam",
    "Binh Tan, Ho Chi Minh City, Vietnam",
    "Binh Chanh, Ho Chi Minh City, Vietnam",
    "Hoc Mon, Ho Chi Minh City, Vietnam",
    "Cu Chi, Ho Chi Minh City, Vietnam",
    "Nha Be, Ho Chi Minh City, Vietnam",
    "Can Gio, Ho Chi Minh City, Vietnam",
];

function showSuggestions(input) {
    const suggestionsBox = document.getElementById('suggestions');
    suggestionsBox.innerHTML = ''; // Clear previous suggestions

    if (input.length === 0) {
        return; // Do not show suggestions if input is empty
    }

    const filteredLocations = locations.filter(location =>
        location.toLowerCase().includes(input.toLowerCase())
    );

    if (filteredLocations.length > 0) {
        filteredLocations.forEach(location => {
            const div = document.createElement('div');
            div.classList.add('suggestion-item');
            div.textContent = location;
            div.onclick = () => selectLocation(location);
            suggestionsBox.appendChild(div);
        });
    } else {
        const div = document.createElement('div');
        div.classList.add('suggestion-item');
        div.textContent = 'No suggestions found';
        suggestionsBox.appendChild(div);
    }
}

function selectLocation(location) {
    document.getElementById('location-input').value = location;
    document.getElementById('suggestions').innerHTML = ''; // Clear suggestions
}



