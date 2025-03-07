<?php

class product
{


    public function show_product($con)
    {


        // Fetch products
        $query = $con->query("SELECT `id`, `name`, `category`, `price`, `img_dir` FROM `product`");

        echo '<script>';
        echo 'const products = [';

        while ($product = $query->fetch_assoc()) {
            echo '`
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card text-center card-product">
            <div class="card-product__img">
                <img class="card-img" src="' . htmlspecialchars($product['img_dir']) . '" alt="">
                <a href="single-product.php?id=' . htmlspecialchars($product['id']) . '">
                <ul class="card-product__imgOverlay">
                    <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
                </a>
            </div>
            <div class="card-body">
                <p>' . htmlspecialchars($product['category']) . '</p>
                <h4 class="card-product__title"><a href="single-product.php?id=' . htmlspecialchars($product['id']) . '">' . htmlspecialchars($product['name']) . '</a></h4>
                <p class="card-product__price">$' . htmlspecialchars($product['price']) . '</p>
            </div>
        </div>
    </div>`,';
        }

        echo '];';
        echo '</script>';
    }


    public function category($con)
    {
        $categorySql = mysqli_query($con, "SELECT * FROM category");

        while ($category = mysqli_fetch_array($categorySql)) {
            echo "<option value='" . $category['id'] . "'>" . $category['name'] . "</option>";
        }
    }

    public function subcategory($con)
    {
        $categorySql = mysqli_query($con, "SELECT * FROM category");

        while ($category = mysqli_fetch_array($categorySql)) {
            echo "<option value='" . $category['id'] . "'>" . $category['name'] . "</option>";
        }
    }


    public function product_list($con)
    {
        // Number of products per page
        $productsPerPage = 10;

        // Get search query
        $search = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';

        // Determine the current page
        $currentPage = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;

        // Calculate the offset
        $offset = ($currentPage - 1) * $productsPerPage;

        // Base SQL query with search filter
        $sql = "SELECT * FROM product WHERE branch ='{$_SESSION['branch']}'";
        if (!empty($search)) {
            $sql .= " AND name LIKE '%$search%'";
        }

        // Get total number of filtered products
        $totalProductsQuery = mysqli_query($con, $sql);
        $totalProducts = mysqli_num_rows($totalProductsQuery);

        // Add pagination to the query
        $sql .= " LIMIT $offset, $productsPerPage";
        $productsQuery = mysqli_query($con, $sql);

        ?>
        <form method="GET" action="">
            <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search product..."
                class="form-control" style="width: 200px; display: inline-block;">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <div class="row mb-3">

            <a href="add_product.php" class="btn btn-primary" style="margin-left:1%;">Add</a>
        </div>

        <table class="table" id="productTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Branch</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num = $offset;
                while ($productList = mysqli_fetch_array($productsQuery)) {
                    $categorySql = mysqli_query($con, "SELECT * FROM category WHERE id='{$productList['category']}'");
                    $category = mysqli_fetch_array($categorySql);
                    $subcategorySql = mysqli_query($con, "SELECT * FROM sub_category WHERE id='{$productList['sub_category']}'");
                    $subcategory = mysqli_fetch_array($subcategorySql);
                    $branchSql = mysqli_query($con, "SELECT * FROM branch WHERE id='{$productList['branch']}'");
                    $branch = mysqli_fetch_array($branchSql);
                    ?>
                    <tr class="product-row">
                        <td><?php echo ++$num; ?></td>
                        <td><?php echo $productList['name']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $subcategory['name']; ?></td>
                        <td><?php echo $productList['quantity']; ?></td>
                        <td><?php echo $productList['price']; ?></td>
                        <td><?php echo $branch['city'] . '/' . $branch['region']; ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-button">
                                    <i class="fas fa-bars icon"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="update_product.php?id=<?php echo $productList['id']; ?>">Edit</a>
                                    <a href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

        <?php
        // Pagination logic
        $totalPages = ceil($totalProducts / $productsPerPage);

        echo '<div class="pagination">';
        if ($currentPage > 1) {
            echo '<a class="btn btn-primary mr-2" href="?page=' . ($currentPage - 1) . '&search=' . urlencode($search) . '">&laquo; Previous</a>';
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $currentPage) {
                echo '<span class="btn btn-primary disabled mr-2">' . $i . '</span>';
            } else {
                echo '<a class="btn btn-primary mr-2" href="?page=' . $i . '&search=' . urlencode($search) . '">' . $i . '</a>';
            }
        }
        if ($currentPage < $totalPages) {
            echo '<a class="btn btn-primary mr-2" href="?page=' . ($currentPage + 1) . '&search=' . urlencode($search) . '">Next &raquo;</a>';
        }
        echo '</div>';
    }


    // Function to display subcategory list with pagination
    public function subcategoryList($con, $page = 1, $perPage = 10)
    {
        // Calculate offset
        $offset = ($page - 1) * $perPage;

        // Query to fetch subcategories with pagination
        $subcategorySql = mysqli_query($con, "SELECT * FROM sub_category LIMIT $offset, $perPage");

        while ($subcategoryList = mysqli_fetch_array($subcategorySql)) {
            $categorySql = mysqli_query($con, "SELECT * FROM category WHERE id='{$subcategoryList['category']}'");
            $category = mysqli_fetch_array($categorySql);
            ?>
            <tr>
                <td><?php echo $subcategoryList['id']; ?></td>
                <td><?php echo $category['name']; ?></td>
                <td><?php echo $subcategoryList['name']; ?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="deletesubCat" value="<?php echo $subcategoryList['id']; ?>">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <?php
        }
    }

    // Function to calculate total number of pages
    public function getTotalPages($con, $table, $perPage = 10)
    {
        $result = mysqli_query($con, "SELECT COUNT(*) AS total FROM $table");
        $row = mysqli_fetch_assoc($result);
        $totalRows = $row['total'];
        $totalPages = ceil($totalRows / $perPage);
        return $totalPages;
    }

    public function branchlist($con)
    {
        $branchSql = mysqli_query($con, "SELECT * FROM branch");
        while ($branch = mysqli_fetch_array($branchSql)) {
            ?>
            <tr>
                <td><?php echo $branch['id']; ?></td>
                <td><?php echo $branch['city']; ?></td>
                <td><?php echo $branch['region']; ?></td>
            </tr>
            <?php
        }
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









}