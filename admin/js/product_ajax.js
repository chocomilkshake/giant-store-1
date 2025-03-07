$(document).ready(function () {
    $('#category').change(function () {
        var selectedCategory = $(this).val();

        if (selectedCategory !== "") {
            $.ajax({
                type: 'POST',
                url: 'include/subcategory.php',
                data: { category: selectedCategory },
                success: function (response) {
                    $('#subcategory').html(response);
                },
                error: function (xhr, status, error) {
                    console.log('Error fetching subcategories');
                    console.log('Status: ' + status);
                    console.log('Error: ' + error);
                    console.log('Response: ' + xhr.responseText);
                }
            });
        }
    });
});
