<!DOCTYPE php>
<php lang="en">
    <?php
    include "include/auth.php";
    include "include/config.php";
    require_once "include/website_body.class.php";
    require_once "include/product.class.php";
    require_once "process/save.class.php";
    require_once "include/account.class.php";
    $body = new website_body();
    $item = new product();
    $account = new account();
    $branch = $_SESSION['branch'];
    $name = $_SESSION['name'];
    $designation = $_SESSION['designation'];
    ?>

    <head>
        <?php echo $body->head(); ?>
        <title>CREMPCO Giant Store</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/upload-img.css">
        <link rel="stylesheet" href="css/account.css">
    </head>

    <body>
        <!--================ Start Navigation Area  =================-->
        <?php echo $body->navigation($name, $designation) ?>
        <!--================ End Navigation Area  =================-->

        <!--================ Start Main Content Area  =================-->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">

                    <div>
                        <table class="table">

                            <thead>
                                <tr>
                                    <a href="add_account.php" class="btn btn-primary" >Add</a>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Branch</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $account->account_table($con)?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End  Main Content Area  =================-->

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