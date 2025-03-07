// Function to handle category search
function searchCategories() {
    var searchValue = document.getElementById("category_search_input").value;
    var currentPage = "<?php echo isset($_GET['category_page']) ? $_GET['category_page'] : 1; ?>";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "<?php echo $_SERVER['PHP_SELF']; ?>?category_search=" + searchValue + "&category_page=" + currentPage, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById("category_table").innerHTML = xhr.responseText;
            } else {
                console.log("Error occurred: " + xhr.status);
            }
        }
    };
    xhr.send();
}

// Handle search input while typing
document.getElementById("category_search_input").addEventListener("input", function () {
    searchCategories();
});

// Initial search if there's a search query in the URL
window.onload = function () {
    var urlParams = new URLSearchParams(window.location.search);
    var searchQuery = urlParams.get('category_search');
    if (searchQuery !== null) {
        document.getElementById("category_search_input").value = searchQuery;
        searchCategories();
    }
};