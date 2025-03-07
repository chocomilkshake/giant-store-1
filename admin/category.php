<!DOCTYPE php>
<php lang="en">
    <?php
    include "include/auth.php";
    include "include/config.php";
    require_once "include/website_body.class.php";
    require_once "include/product.class.php";
    require_once "process/save.class.php";
    $body = new website_body();
    $item = new product();
    $saveProduct = new save();
    $saveProduct->save_category($con);
    $name = $_SESSION['name'];
    $designation = $_SESSION['designation'];
    ?>

    <head>
        <?php echo $body->head(); ?>
        <title>CREMPCO Giant Store</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/pop-up.css">
    </head>

    <body>
        <!--================ Start Navigation Area  =================-->
        <?php echo $body->navigation($name,$designation) ?>
        <!--================ End Navigation Area  =================-->

        <!--================ Start Main Content Area  =================-->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">

                    <div>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <a href="#" class="btn btn-primary" id="add-category-btn">Add Category</a>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $currentPage = isset($_GET['category_page']) ? $_GET['category_page'] : 1;
                                $item->categorylist($con, $currentPage);
                                ?>
                            </tbody>
                        </table>

                        <!-- Pagination links for category list -->
                        <?php
                        $totalCategoryPages = $item->getTotalPages($con, 'category');
                        if ($totalCategoryPages > 1) {
                            echo "<div>";
                            for ($i = 1; $i <= $totalCategoryPages; $i++) {
                                echo "<a href='?category_page=$i'>$i</a> ";
                            }
                            echo "</div>";
                        }
                        ?>


                        <br><br>
                        <!-- Display subcategory list with pagination -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <a href="#" class="btn btn-primary" id="add-sub-category-btn" style="">Add Sub
                                        Category</a>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $currentPage = isset($_GET['subcategory_page']) ? $_GET['subcategory_page'] : 1;
                                $item->subcategoryList($con, $currentPage);
                                ?>
                            </tbody>
                        </table>

                        <!-- Pagination links for subcategory list -->
                        <?php
                        $totalSubcategoryPages = $item->getTotalPages($con, 'sub_category');
                        if ($totalSubcategoryPages > 1) {
                            echo "<div>";
                            for ($i = 1; $i <= $totalSubcategoryPages; $i++) {
                                echo "<a href='?subcategory_page=$i'>$i</a> ";
                            }
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End  Main Content Area  =================-->


        <!--================ Start popup-form Area  =================-->
        <div class="popup-overlay" id="popup-overlay"></div>

        <div class="popup-form" id="add-category-form">
            <span class="close-btn" id="close-category-form">&times;</span>
            <h2>Add Category</h2>
            <br>
            <form action="" method="POST">
                <!-- Add your form fields here -->
                <label for="category-name">Category Name:</label>
                <input type="text" class="form form-control" id="category-name" name="category-name" required><br><br>
                <input type="submit" class="btn btn-primary" value="Add Category">
            </form>
        </div>

        <div class="popup-form" id="add-sub-category-form">
            <span class="close-btn" id="close-sub-category-form">&times;</span>
            <h2>Add Sub Category</h2>
            <br>
            <form action="" method="POST">
                <!-- Add your form fields here -->
                <label for="category">Category:</label>
                <br>
                <select class="form form-control" name="category" id="category" required>
                    <option value="" selected disabled>Select category</option>
                    <?php $item->category($con) ?>
                </select>
                <br><br><br>
                <label for="sub-category-name">Sub Category Name:</label>
                <input type="text" class="form form-control" id="sub-category-name" name="sub-category-name"
                    required><br><br>
                <input type="submit" class="btn btn-primary" value="Add Sub Category">
            </form>
        </div>

        <!--================ Start footer Area  =================-->
        <footer class="footer">
            <?php echo $body->footer() ?>
        </footer>
        <!--================ End footer Area  =================-->



        <?php
        $item->show_product($con);
        echo $body->script()
            ?>
    </body>

    </html>