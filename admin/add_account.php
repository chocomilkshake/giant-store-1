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
    $saveaccount = new save();
    $branch = $_SESSION['branch'];
    $name = $_SESSION['name'];
    $designation = $_SESSION['designation'];
    $saveaccount->save_account($con);
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

        <?php echo $body->navigation($name, $designation) ?>

        <!--================ Start Main Content Area  =================-->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                        <hr style="border-color:#000">
                        <h1>Create Account</h1>
                        <hr style="border-color:#000">
                        <div class="add-account">
                            <!--================ Start account Information Area  =================-->
                            <div class="row" style="margin-left:0.1%;">
                                <div class="name">
                                    <label for="name" style="">Username<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Username" style="width: 400px;" required>
                                </div>

                                <div class="name">
                                    <label for="name" style="margin-left:10%;">Password<span
                                            style="color:red;">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password" style="width: 400px; margin-left:10%;" required>
                                </div>
                            </div>
                            <br>

                            <div class="row" style="margin-left:0.1%;">
                                <div class="name">
                                    <label for="name" style="">First Name<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="fname" id="fname"
                                        placeholder="First Name" style="width: 400px;" required>
                                </div>

                                <div class="name">
                                    <label for="name" style="margin-left:10%;">Middle Name</label>
                                    <input type="text" class="form-control" name="mname" id="mname"
                                        placeholder="Middle Name" style="width: 400px; margin-left:10%;">
                                </div>

                                <div class="name">
                                    <label for="name" style="">Last Name<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="lname" id="lname"
                                        placeholder="Last Name" style="width: 400px;" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="desc">
                            <div>
                                <div class="name">
                                    <label for="address" style="">Address<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Address" style="width: 800px;" required>
                                </div>
                            </div>
                            <br>
                            <div class="row" style="margin-left:0.1%;">
                                <div class="name">
                                    <label for="branch" style="">Branch<span style="color:red;">*</span></label>
                                    <br>
                                    <select class="form-control" name="branch" id="branch" style="overflow-y: auto;">
                                        <?php $body->branch_list($con) ?>
                                    </select>
                                </div>

                                <div class="name" style="margin-left:1%;">
                                    <label for="branch" style="">Designation<span style="color:red;">*</span></label>
                                    <br>
                                    <select class="form-control" name="designation" id="designation">
                                        <option value="Admin">Admin</option>
                                        <option value="OrderFullfilment">Oder Fullfilment</option>
                                        <option value="Encoder">Encoder</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <!--================ End account Information Area  =================-->
                        <hr style="border-color:#000">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                    <hr style="border-color:#000">
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
        echo $body->script()
            ?>
    </body>

    </html>