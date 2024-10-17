let nGuest = 1; // Track the guest count

// Add event listeners to buttons
document.getElementById('btnPlus').addEventListener('click', countGuest);
document.getElementById('btnMinus').addEventListener('click', countGuest);

const plusBtn = document.getElementById('btnPlus');
const minusBtn = document.getElementById('btnMinus');
const displayGuest = document.getElementById('numberGuest');

// Function to count guests
function countGuest(event) {
    // Determine if the plus or minus button was clicked
    if (event.target === plusBtn) {
        nGuest++; // Increment guest count
    } else if (event.target === minusBtn) {
        nGuest--; // Decrement guest count
    }

    // Disable buttons based on guest count limits
    plusBtn.disabled = nGuest >= 10; // Disable plus button if nGuest reaches 10
    minusBtn.disabled = nGuest <= 1;  // Disable minus button if nGuest drops to 0

    // Update display
    displayGuest.textContent = nGuest; // Update the displayed count
}

// Initialize button states
minusBtn.disabled = nGuest <= 1;
plusBtn.disabled = nGuest >= 10;

// Initial display
displayGuest.textContent = nGuest; // Display initial guest count

