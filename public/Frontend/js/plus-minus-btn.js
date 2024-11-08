// Add event listeners to buttons
document.getElementById('btnPlus').addEventListener('click', countGuest);
document.getElementById('btnMinus').addEventListener('click', countGuest);

const plusBtn = document.getElementById('btnPlus');
const minusBtn = document.getElementById('btnMinus');
const displayGuest = document.getElementById('guest_count');
let nGuest = parseInt(displayGuest.value, 10); // Track the guest count

// Update nGuest when user inputs a new value
displayGuest.addEventListener('input', function () {
    let userValue = parseInt(displayGuest.value, 10);

    // Ensure input is a number and within the limits (1–30)
    if (!isNaN(userValue)) {
        nGuest = Math.max(1, Math.min(userValue, Number.MAX_SAFE_INTEGER));
        updateButtons(); // Update button states
    }
});

// Function to count guests
function countGuest(event) {
    // Increment or decrement guest count
    if (event.target === plusBtn) {
        nGuest++;
    } else if (event.target === minusBtn) {
        nGuest--;
    }

    // Update display and button states
    displayGuest.value = nGuest;
    updateButtons();
}

// Update button disabled states based on guest count
function updateButtons() {
    minusBtn.disabled = nGuest <= 1;
}

// Initialize button states and display
updateButtons();
displayGuest.value = nGuest; // Display initial guest count
