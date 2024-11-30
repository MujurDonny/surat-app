let currentPage = 1;
const rowsPerPage = 10;

function paginateTable() {
    const rows = document.querySelectorAll("#suratTable tbody tr");
    const totalRows = rows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = currentPage * rowsPerPage;

    rows.forEach((row, index) => {
        if (index >= startIndex && index < endIndex) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });

    const rangeLabel = document.getElementById("rangeLabel");
    rangeLabel.textContent = `Showing ${startIndex + 1}-${Math.min(endIndex, totalRows)} of ${totalRows}`;

    document.getElementById("prevButton").disabled = currentPage === 1;
    document.getElementById("nextButton").disabled = currentPage === totalPages;
}

function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        paginateTable();
    }
}

function nextPage() {
    const rows = document.querySelectorAll("#suratTable tbody tr");
    const totalPages = Math.ceil(rows.length / rowsPerPage);
    if (currentPage < totalPages) {
        currentPage++;
        paginateTable();
    }
}

window.onload = function () {
    paginateTable();
};

function searchTable() {
    const input = document.getElementById("searchInput");
    const filter = input.value.toLowerCase();
    const rows = document.querySelectorAll("#suratTable tbody tr");
    let visibleRowsCount = 0;

    rows.forEach((row) => {
        const cells = row.querySelectorAll("td");
        let found = false;

        cells.forEach((cell) => {
            if (cell.textContent.toLowerCase().includes(filter)) {
                found = true;
            }
        });

        if (found) {
            row.style.display = "";
            visibleRowsCount++;
        } else {
            row.style.display = "none";
        }
    });

    currentPage = 1;

    const totalRows = visibleRowsCount;
    const totalPages = Math.ceil(totalRows / rowsPerPage);

    const rangeLabel = document.getElementById("rangeLabel");
    rangeLabel.textContent = `Showing 1-${Math.min(rowsPerPage, totalRows)} of ${totalRows}`;

    document.getElementById("prevButton").disabled = currentPage === 1;
    document.getElementById("nextButton").disabled = currentPage === totalPages;

    paginateTable();
}


    $(document).ready(function() {
        $('.navbar-nav.side-bar li').on('click', function() {
            $('.navbar-nav.side-bar li').removeClass('active');
            $(this).addClass('active');
        });
    });
