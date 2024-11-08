function formatDate(date) {
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return `${year}-${month}-${day}`;
}

// Helper function to parse yyyy-mm-dd format to JavaScript Date object
function parseDate(dateString) {
    const parts = dateString.split('-');
    if (parts.length === 3) {
        const year = parseInt(parts[0], 10);
        const month = parseInt(parts[1], 10) - 1; // Months are 0-based
        const day = parseInt(parts[2], 10);
        return new Date(year, month, day);
    }
    return null;
}

// Function to calculate and validate the dates
function calculateDays() {
    const fromDateInput = document.getElementById('from');
    const toDateInput = document.getElementById('to');

    const today = new Date();
    const minDate = formatDate(today); // Set today's date as minimum for validation

    const fromDate = parseDate(fromDateInput.value);
    const toDate = parseDate(toDateInput.value);

    // Ensure "from" date is not before today
    if (fromDate && fromDate < today) {
        alert("The 'from' date cannot be before today.");
        fromDateInput.value = '';
        return;
    }

    // Ensure "to" date is not before today
    if (toDate && toDate < today) {
        alert("The 'to' date cannot be before today.");
        toDateInput.value = '';
        return;
    }

    // Ensure "from" date is not later than "to" date
    if (fromDate && toDate && fromDate > toDate) {
        alert("The 'from' date cannot be later than the 'to' date.");
        fromDateInput.value = '';
        toDateInput.value = '';
        return;
    }

    // Ensure "to" date is at least 7 days after "from" date
    if (fromDate) {
        const minToDate = new Date(fromDate);
        minToDate.setDate(minToDate.getDate() + 7); // "to" must be at least 7 days after "from"
        if (!toDate || toDate < minToDate) {
            toDateInput.value = formatDate(minToDate); // Automatically set 'to' to 7 days after 'from'
        }
        toDateInput.setAttribute('min', formatDate(minToDate)); // Set minimum 'to' date as 'from' + 7 days
    }

    // Ensure "from" date is at least 7 days before "to" date
    if (toDate) {
        const maxFromDate = new Date(toDate);
        maxFromDate.setDate(maxFromDate.getDate() - 7); // "from" must be at least 7 days before "to"
        if (!fromDate || fromDate > maxFromDate) {
            fromDateInput.value = formatDate(maxFromDate); // Automatically set 'from' to 7 days before 'to'
        }
        fromDateInput.setAttribute('max', formatDate(maxFromDate)); // Set maximum 'from' date as 'to' - 7 days
    }

    // Set today's date as the minimum for the 'from' field
    fromDateInput.setAttribute('min', minDate);
    toDateInput.setAttribute('min', minDate);
}


// Add event listeners to handle date changes
document.getElementById('from').addEventListener('change', calculateDays);
document.getElementById('to').addEventListener('change', calculateDays);

// Initialize the date constraints when the page loads
window.onload = calculateDays;