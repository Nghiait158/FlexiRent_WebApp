const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
    initialCountry: "vn", // Set the default country
    preferredCountries: ["us", "gb", "vn"], // Customize preferred countries (optional)
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Load utilities script
});