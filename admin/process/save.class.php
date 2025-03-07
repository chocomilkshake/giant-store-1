<?php

class save
{
    public function product_save($con, $branch)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $desc = $_POST['desc'];
            $category = $_POST['category'];
            $subcategory = $_POST['subcategory'];
            $width = $_POST['width'];
            $height = $_POST['height'];
            $depth = $_POST['depth'];
            $weight = $_POST['weight'];
            $quality = $_POST['quality'];
            $delivery = $_POST['delivery'];
            $return = $_POST['return'];
            $specSql = mysqli_query($con, "SELECT * FROM product");
            $specId = mysqli_num_rows($specSql) + 1; // Adjust to avoid duplicate IDs

            if (isset($_FILES['image'])) {
                if ($_FILES['image']['error'] == 0) {
                    $uploadedFile = $_FILES['image'];
                    $fileName = basename($uploadedFile['name']);
                    $uploadDir = 'img/product/';
                    $uploadFilePath = $uploadDir . $fileName;

                    // Ensure the upload directory exists
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755, true);
                    }

                    // Move the file to the upload directory
                    if (move_uploaded_file($uploadedFile['tmp_name'], "../" . $uploadFilePath)) {
                        $save = mysqli_query($con, "INSERT INTO `product`(`name`, `description`, `category`, `sub_category`, `price`, `quantity`, `branch`, `shop`, `spec`, `img_dir`) VALUES ('$name','$desc','$category','$subcategory','$price','$quantity','$branch','','$specId','$uploadFilePath')");
                        $spec = mysqli_query($con, "INSERT INTO `product_spec`(`product`, `width`, `height`, `depth`, `weight`, `Quality Checking`, `Estimate Delivery`, `Returnable/Refundable`) VALUES ('$specId','$width','$height','$depth','$weight','$quality','$delivery','$return')");
                        echo "<script>alert('Product Successfully Added.');</script>";
                    } else {
                        echo "<script>alert('There was an error uploading the file.');</script>";
                    }
                } else {
                    echo "<script>alert('File upload error: " . $_FILES['image']['error'] . "');</script>";
                }
            } else {
                echo "<script>alert('No file uploaded or there was an error with the upload.');</script>";
            }
        }
    }

    public function update_product($con, $productId)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $desc = $_POST['desc'];
            $category = $_POST['category'];
            $subcategory = $_POST['subcategory'];
            $width = $_POST['width'];
            $height = $_POST['height'];
            $depth = $_POST['depth'];
            $weight = $_POST['weight'];
            $quality = $_POST['quality'];
            $delivery = $_POST['delivery'];
            $return = $_POST['return'];
            $specSql = mysqli_query($con, "SELECT * FROM product");
            $specId = mysqli_num_rows($specSql) + 1; // Adjust to avoid duplicate IDs

            if (isset($_FILES['image'])) {
                if ($_FILES['image']['error'] == 0) {
                    $uploadedFile = $_FILES['image'];
                    $fileName = basename($uploadedFile['name']);
                    $uploadDir = 'img/product/';
                    $uploadFilePath = $uploadDir . $fileName;

                    // Ensure the upload directory exists
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755, true);
                    }

                    // Move the file to the upload directory
                    if (move_uploaded_file($uploadedFile['tmp_name'], "../" . $uploadFilePath)) {
                        $save = mysqli_query($con, "UPDATE `product` 
                                                    SET 
                                                    `name` = '$name', 
                                                    `description` = '$desc', 
                                                    `category` = '$category', 
                                                    `sub_category` = '$subcategory', 
                                                    `price` = '$price', 
                                                    `quantity` = '$quantity',
                                                    `spec` = '$specId', 
                                                    `img_dir` = '$uploadFilePath' 
                                                    WHERE 
                                                    `product_id` = '$productId';");
                        $spec = mysqli_query($con, "UPDATE `product_spec` 
                                                SET 
                                                `width` = '$width', 
                                                `height` = '$height', 
                                                `depth` = '$depth', 
                                                `weight` = '$weight', 
                                                `Quality Checking` = '$quality', 
                                                `Estimate Delivery` = '$delivery', 
                                                `Returnable/Refundable` = '$return' 
                                                WHERE 
                                                `product` = '$productId';
                                                ");
                        echo "<script>alert('Product Successfully Added.');</script>";
                    } else {
                        echo "<script>alert('There was an error uploading the file.');</script>";
                    }
                } else {
                    echo "<script>alert('File upload error: " . $_FILES['image']['error'] . "');</script>";
                }
            } else {
                echo "<script>alert('No file uploaded or there was an error with the upload.');</script>";
            }
        }
    }

    public function save_category($con)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['category-name'])) {
                $categoryName = $_POST['category-name'];
                $saveCategory = mysqli_query($con, "INSERT INTO `category`(`name`) VALUES ('$categoryName')");
                if (!$saveCategory) {
                    // Display or handle the error if the query fails
                    echo "<script> alert('Error:" . mysqli_error($con) . "');</script>";
                } else {
                    echo "<script> alert('Category Added');</script>";
                }
                // Redirect to prevent form resubmission
                header("Location: {$_SERVER['PHP_SELF']}");
                exit;
            }

            if (isset($_POST['sub-category-name'])) {
                $category = $_POST['category'];
                $subCategory = $_POST['sub-category-name'];
                $saveSubcategory = mysqli_query($con, "INSERT INTO `sub_category`(`name`, `category`) VALUES ('$subCategory','$category')");
                if (!$saveSubcategory) {
                    // Display or handle the error if the query fails
                    echo "<script> alert('Error:" . mysqli_error($con) . "');</script>";
                } else {
                    echo "<script> alert('Sub Category Added');</script>";
                }
                // Redirect to prevent form resubmission
                header("Location: {$_SERVER['PHP_SELF']}");
                exit;
            }

            if (isset($_POST['deleteCat'])) {
                $deleteCat = $_POST['deleteCat'];
                $checksubcatSql = mysqli_query($con, "SELECT * FROM sub_category WHERE category = '$deleteCat'");
                $checksubcat = mysqli_num_rows($checksubcatSql);

                if ($checksubcat > 0) {
                    echo "<script>
                        alert('This category cannot be deleted because it has sub-categories.');
                        window.location.href = '{$_SERVER['PHP_SELF']}';
                        </script>";
                    exit;
                } else {
                    $delcategory = mysqli_query($con, "DELETE FROM category WHERE id = '$deleteCat'");
                    if (!$delcategory) {
                        // Display or handle the error if the query fails
                        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
                    } else {
                        echo "<script>
                    alert('Category Deleted');
                    window.location.href = '{$_SERVER['PHP_SELF']}';
                </script>";
                    }
                }
            }

            if (isset($_POST['deletesubCat'])) {
                $delSubcategory = mysqli_query($con, "DELETE FROM `sub_category` WHERE id='{$_POST['deletesubCat']}'");
                if (!$delSubcategory) {
                    // Display or handle the error if the query fails
                    echo "<script> alert('Error:" . mysqli_error($con) . "');</script>";
                } else {
                    echo "<script>
                    alert('Sub - Category Deleted');
                    window.location.href = '{$_SERVER['PHP_SELF']}';
                </script>";
                }
                // Redirect to prevent form resubmission

            }


        }

    }


    public function add_branch($con)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $city = $_POST['branch-city'];
            $region = $_POST['region'];
            $saveSubcategory = mysqli_query($con, "INSERT INTO `branch`(`city`, `region`) VALUES ('$city','$region')");
            if (!$saveSubcategory) {
                // Display or handle the error if the query fails
                echo "<script> alert('Error:" . mysqli_error($con) . "');</script>";
            } else {
                echo "<script>
                    alert('" . $city . " Branch of " . $region . " is Added');
                    window.location.href = '{$_SERVER['PHP_SELF']}';
                </script>";
            }
            // Redirect to prevent form resubmission

        }
    }

    public function save_account($con)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize and get user inputs
            $fname = mysqli_real_escape_string($con, $_POST['fname']);
            $mname = mysqli_real_escape_string($con, $_POST['mname']);
            $lname = mysqli_real_escape_string($con, $_POST['lname']);
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $address = mysqli_real_escape_string($con, $_POST['address']);
            $branch = mysqli_real_escape_string($con, $_POST['branch']);
            $designation = mysqli_real_escape_string($con, $_POST['designation']);
            $currentDate = date('Y-m-d'); // Use Y-m-d format for SQL date

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Combine first, middle, and last names
            $fullName = $fname . ' ' . $mname . ' ' . $lname;

            // Prepare and bind the SQL statement
            $stmt = $con->prepare("INSERT INTO `account` (`username`, `password`, `first_name`, `middle_name`, `last_name`, `address`, `branch`, `designation`, `date_created`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssss", $username, $hashedPassword, $fname, $mname, $lname, $address, $branch, $designation, $currentDate);

            // Execute the statement
            if ($stmt->execute()) {
                // Store success message in session
                echo "<script>
                    alert('Account is Added');
                    window.location.href = '{$_SERVER['PHP_SELF']}';
                </script>";
            } else {
                // Store error message in session
                $_SESSION['message'] = "Error: " . $stmt->error;
            }

            // Redirect to the same page to avoid form resubmission
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit();

            // Close the statement and connection
            $stmt->close();
            $con->close();
        }


    }






}