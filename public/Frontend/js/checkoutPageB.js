const radioButtons = document.querySelectorAll('input[name="flexRadioDefault"]');

radioButtons.forEach(radio => {
    radio.addEventListener('change', () => {
        // Remove 'selected' class from all labels
        document.querySelectorAll('.form-check-label').forEach(label => {
            label.classList.remove('selected');
        });

        // Add 'selected' class to the label of the selected radio button
        if (radio.checked) {
            const label = document.querySelector(`label[for="${radio.id}"]`);
            label.classList.add('selected');
        }
    });
});


const additionalInput = document.getElementById('additionalInput');
const textareaInput = document.getElementById('textareaInput');

function updateVisibility() {
    if (document.getElementById('flexRadioDefault1').checked) {
        additionalInput.style.display = 'block'; // Show input for Business Travel
        textareaInput.style.display = 'none'; // Hide textarea for Other
    } else if (document.getElementById('flexRadioDefault4').checked) {
        additionalInput.style.display = 'none'; // Hide input for Business Travel
        textareaInput.style.display = 'block'; // Show textarea for Other
    } else {
        additionalInput.style.display = 'none'; // Hide input for other options
        textareaInput.style.display = 'none'; // Hide textarea for other options
    }
}

// Initially hide both inputs
additionalInput.style.display = 'none';
textareaInput.style.display = 'none';

// Show the appropriate input field on page load
updateVisibility();

radioButtons.forEach(radio => {
    radio.addEventListener('change', () => {
        // Remove 'selected' class from all labels
        document.querySelectorAll('.form-check-label').forEach(label => {
            label.classList.remove('selected');
        });

        // Add 'selected' class to the label of the selected radio button
        if (radio.checked) {
            const label = document.querySelector(`label[for="${radio.id}"]`);
            label.classList.add('selected');

            // Show or hide additional input based on selection
            if (radio.id === 'flexRadioDefault1') {
                additionalInput.style.display = 'block'; // Show input for Business Travel
                textareaInput.style.display = "none"
            }
            else if (radio.id == 'flexRadioDefault4') {
                additionalInput.style.display = 'none';
                textareaInput.style.display = 'block' // Show input for Other
            }
            else {
                additionalInput.style.display = 'none'; // Hide input for other options
                textareaInput.style.display = "none"

            }


        }
    });
});

$(function() {
    var dateFormat = "mm/dd/yy",
        minDays = 14, // Minimum days between "from" and "to" dates
        from = $("#from")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1
            })
            .on("change", function() {
                var selectedFromDate = getDate(this);
                if (selectedFromDate) {
                    // Add 14 days to the selected "from" date for the "to" datepicker's minDate
                    selectedFromDate.setDate(selectedFromDate.getDate() + minDays);
                    to.datepicker("option", "minDate", selectedFromDate);
                }
            }),
        to = $("#to")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1
            })
            .on("change", function() {
                var selectedToDate = getDate(this);
                if (selectedToDate) {
                    // Subtract 14 days from the selected "to" date for the "from" datepicker's maxDate
                    selectedToDate.setDate(selectedToDate.getDate() - minDays);
                    from.datepicker("option", "maxDate", selectedToDate);
                }
            });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }
        return date;
    }
});

