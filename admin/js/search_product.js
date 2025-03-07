document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const productTable = document.getElementById('productTable');

    searchInput.addEventListener('keyup', function() {
        const filter = searchInput.value.toLowerCase();
        const rows = productTable.getElementsByClassName('product-row');

        Array.from(rows).forEach(row => {
            const productName = row.cells[1].textContent.toLowerCase();
            const category = row.cells[2].textContent.toLowerCase();
            const subCategory = row.cells[3].textContent.toLowerCase();
            const branch = row.cells[6].textContent.toLowerCase();
            
            if (productName.includes(filter) || category.includes(filter) || subCategory.includes(filter) || branch.includes(filter)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});