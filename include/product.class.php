<?php

class product
{


    public function show_product($con, $branch)
    {


        // Secure database connection
        $stmt = $con->prepare("SELECT p.category ,p.id, p.name, c.name AS category_name, sc.name AS subcategory_name, p.branch, p.price, p.img_dir 
        FROM product p
        LEFT JOIN category c ON p.category = c.id
        LEFT JOIN sub_category sc ON p.sub_category = sc.id
        WHERE p.branch = ?");
        $stmt->bind_param("s", $branch);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch all products as an array
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'category' => $row['category_name'],
                'category_id' => $row['category'],
                'sub_category' => $row['subcategory_name'],
                'price' => $row['price'],
                'img_dir' => $row['img_dir']
            ];
        }

        // Convert PHP array to JSON for JavaScript
        echo '<script>';
        echo 'const products = ' . json_encode($products, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . ';';
        echo '</script>';

    }


    public function product_detail($con, $id)
    {
        // Ensure the ID is properly sanitized to prevent SQL injection
        $id = mysqli_real_escape_string($con, $id);

        // Prepare and execute the SQL query
        $productSql = mysqli_query($con, "SELECT 
        p.id AS product_id,
        p.name AS product_name,
        p.description,
        c.name AS category_name,
        sc.name AS sub_category_name,
        p.price,
        p.quantity,
        p.branch,
        p.shop,
        p.spec,
        p.img_dir,
        ps.width,
        ps.height,
        ps.depth,
        ps.weight,
        ps.`Quality Checking`,
        ps.`Estimate Delivery`,
        ps.`Returnable/Refundable`
    FROM 
        product p
    LEFT JOIN 
        category c ON p.category = c.id
    LEFT JOIN 
        sub_category sc ON p.sub_category = sc.id
    LEFT JOIN 
        product_spec ps ON p.id = ps.product
    WHERE 
        p.id = '$id';
    
    ");

        // Check if the query was successful
        if (!$productSql) {
            die("Query failed: " . mysqli_error($con));
        }

        // Fetch the product details as an associative array
        $productDetail = mysqli_fetch_assoc($productSql);

        // Check if the product was found
        if ($productDetail === null) {
            return null; // Product not found
        }

        return $productDetail;
    }


    public function browse_categories($con)
    {
        $categorySql = mysqli_query($con, "SELECT * FROM category");

        while ($category = mysqli_fetch_array($categorySql)) {
            echo '<li class="filter-list"><input class="pixel-radio" type="radio" id="' . $category['id'] . '" name="brand"><label
                          for="' . $category['id'] . '">' . $category['name'] . '<span></span></label></li>';
        }
    }





}