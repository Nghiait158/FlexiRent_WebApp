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
    "Chinatown, Melbourne, Australia",
    "Ho Chi Minh City",
    "District 1",
    "District 2 (Thu Duc City)",
    "District 3",
    "District 4",
    "District 5",
    "District 6",
    "District 7",
    "District 8",
    "District 9 (Thu Duc City)",
    "Thu Duc (Thu Duc City)",
    "District 10",
    "District 11",
    "District 12",
    "Binh Thanh",
    "Go Vap",
    "Phu Nhuan",
    "Tan Binh",
    "Tan Phu",
    "Binh Tan",
    "Binh Chanh",
    "Hoc Mon",
    "Cu Chi",
    "Nha Be",
    "Can Gio",
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



