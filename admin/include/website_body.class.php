<?php

class website_body
{

    public function head()
    {
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="img/Fevicon.png" type="image/png">
        <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
        <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/product_ajax.js"></script>
        <?php
    }




    public function navigation($name, $designation)
    {
        if ($designation === 'Admin') {
            ?>
            <div id="mySideMenu" class="side-menu">
                <a class="navbar-brand logo_h" href="dashboard.php"><img src="img/logo.png" alt="" style="width:200px;"></a>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="dashboard.php">Home</a>
                <a href="product.php">Products</a>
                <a href="branch.php">Branch</a>
                <a href="#">Vendor</a>
                <a href="category.php">Category</a>
                <a href="#">Collection</a>
                <a href="account.php">Account</a>
                <form id="myForm" action="process/logout.php" method="POST">
                </form>
                <a href="#" id="submitLink">Logout</a>
            </div>
            <button class="openbtn" onclick="openNav()">☰ CREMPCO Giant Store</button>
            <div class="header">
                Welcome <?php echo $name; ?>
            </div>
            <?php
        } else {
            ?>
            <div id="mySideMenu" class="side-menu">
                <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt="" style="width:200px;"></a>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="dashboard.php">Home</a>
                <a href="product.php">Products</a>
                <a href="category.php">Category</a>
                <form id="myForm" action="process/logout.php" method="POST">
                </form>
                <a href="#" id="submitLink">Logout</a>

            </div>
            <button class="openbtn" onclick="openNav()">☰ CREMPCO Giant Store</button>
            <div class="header">
                Welcome <?php echo $name; ?>
            </div>
            <?php
        }


    }

    public function footer()
    {
        ?>
        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved
                        <a href="https://colorlib.com" target="_blank">Counterpart Resource Multi-Purpose Cooperative</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
        <?php
    }

    public function script()
    {
        ?>
        <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="vendors/skrollr.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/mail-script.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pagination.js"></script>
        <script src="js/sidebar.js"></script>
        <script src="js/upload_image.js"></script>
        <script src="js/pop-up.js"></script>
        <script src="js/search_category.js"></script>
        <script>
            function validateInput(input) {
                // Use a regular expression to replace any character that is not a digit or a dot
                input.value = input.value.replace(/[^0-9.]/g, '');

                // Ensure only one dot is present in the input
                const parts = input.value.split('.');
                if (parts.length > 2) {
                    input.value = parts[0] + '.' + parts.slice(1).join('');
                }
            }
        </script>
        <script>
            document.getElementById("submitLink").addEventListener("click", function (event) {
                event.preventDefault();  // Prevent the default anchor behavior
                document.getElementById("myForm").submit();  // Trigger the form submission
            });
        </script>

        <?php
    }

    public function branch_list($con){
        $branchSql = mysqli_query($con,"SELECT * FROM branch");

        while($branchList = mysqli_fetch_array($branchSql)){
            echo '<option value = "'.$branchList['id'].'">'.$branchList['city'].'</option>';
        }
    }



}