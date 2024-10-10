$(function() {
    var dateFormat = "dd.mm.yy", // Change date format to dd.mm.yy
        minDays = 14, // Minimum days between "from" and "to" dates
        from = $("#from")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
                minDate: 0, // Prevent booking before today
                dateFormat: dateFormat // Set the date format
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
                numberOfMonths: 1,
                minDate: minDays, // Prevent booking before 14 days from today
                dateFormat: dateFormat // Set the date format
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
