document.addEventListener('DOMContentLoaded', function () {
    console.log("DOM fully loaded and script running.");

    // Get all filter buttons and table rows
    const filterButtons = document.querySelectorAll('.btn-view');
    const tableRows = document.querySelectorAll('#eventTable tbody tr');

    if (filterButtons.length === 0 || tableRows.length === 0) {
        console.error("Filter buttons or table rows not found.");
        return;
    }

    // Add click event listener to each filter button
    filterButtons.forEach(button => {
        console.log(`Adding click event to button: ${button.getAttribute('data-filter')}`);
        button.addEventListener('click', function () {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));

            // Add active class to clicked button
            this.classList.add('active');

            // Get the filter value from the button's data-filter attribute
            const filterValue = this.getAttribute('data-filter');

            console.log(`Filtering rows with status: ${filterValue}`);

            // Filter rows based on the selected filter
            tableRows.forEach(row => {
                const rowStatus = row.getAttribute('data-status');

                if (filterValue === 'all') {
                    row.style.display = ''; // Show all rows
                } else if (rowStatus === filterValue) {
                    row.style.display = ''; // Show rows matching the filter
                } else {
                    row.style.display = 'none'; // Hide rows not matching the filter
                }
            });
        });
    });
});
