<!DOCTYPE php>
<php lang="en">
    <?php
    include "include/auth.php";
    include "include/config.php";
    require_once "include/website_body.class.php";
    require_once "include/product.class.php";
    $body = new website_body();
    $item = new product();
    
    $name = $_SESSION['name'];
    $designation = $_SESSION['designation'];
    ?>

    <head>
        <?php echo $body->head(); ?>
        <title>CREMPCO Giant Store</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sidebar.css">
    </head>

    <body>

    <?php echo $body->navigation($name,$designation) ?>


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