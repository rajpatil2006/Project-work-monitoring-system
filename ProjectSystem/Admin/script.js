document.addEventListener('DOMContentLoaded', function () {
    var headers = document.querySelectorAll('#table1 th[data-sort]');
    headers.forEach(function (header) {
        header.addEventListener('click', function () {
            var column = this.dataset.sort;
            var order = this.dataset.order === 'asc' ? 'desc' : 'asc';
            sortTable(column, order);
            this.dataset.order = order;
        });
    });
});

function sortTable(column, order) {
    var table, rows, switching, i, shouldSwitch;
    table = document.getElementById("table1");
    switching = true;

    while (switching) {
        switching = false;
        rows = table.rows;

        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;

            // Extract text content from cells
            var x = rows[i].getElementsByTagName("td")[column].innerText.trim();
            var y = rows[i + 1].getElementsByTagName("td")[column].innerText.trim();

            // Convert values to integers if possible
            var numX = parseFloat(x);
            var numY = parseFloat(y);

            // Check if both values are valid numbers
            var isNumeric = !isNaN(numX) && !isNaN(numY);

            if (isNumeric) {
                // Numeric comparison
                if (order === 'asc') {
                    if (numX > numY) {
                        shouldSwitch = true;
                        break;
                    }
                } else {
                    if (numX < numY) {
                        shouldSwitch = true;
                        break;
                    }
                }
            } else {
                // Alphabetic comparison
                if (order === 'asc') {
                    if (x.toLowerCase() > y.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                } else {
                    if (x.toLowerCase() < y.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }
        }

        if (shouldSwitch) {
            // Switch rows
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true; // Set switching to true to continue sorting
        }
    }

    // Update Sr. No. column after sorting
    updateSrNoColumn();
}


function updateSrNoColumn() {
    var table = document.getElementById("table1");
    var rows = table.rows;

    for (var i = 1; i < rows.length; i++) {
        rows[i].getElementsByTagName("td")[0].innerText = i;
    }
}
